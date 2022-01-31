<?php
class role{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }

    public function store($title,$permissions,$time)
    {
        $this->db->query("INSERT INTO roles (title,created_at,updated_at) VALUES ('$title','$time','$time')");
        $role = $this->showByTitle($title);
        $this->attach($permissions,$role->id);
    }

    public function all()
    {
        return $this->db->query("SELECT * FROM roles")
            ->fetchAll(PDO::FETCH_OBJ);
    }

    public function show($id)
    {
        return $this->db->query("SELECT * FROM roles WHERE id='$id'")
            ->fetch(PDO::FETCH_OBJ);
    }

    public function showByTitle($title)
    {
        return $this->db->query("SELECT * FROM roles WHERE title='$title'")
            ->fetch(PDO::FETCH_OBJ);
    }

    public function update($permissions,$role_id,$title,$time)
    {
        $this->db->query("UPDATE roles SET title='$title' , updated_at='$time' WHERE id='$role_id'");
        $this->sync($permissions,$role_id);
    }

    public function destroy($role_id)
    {
        $this->db->query("DELETE FROM roles WHERE id='$role_id'");
        $this->detach($role_id);
    }

    public function attach($permissions,$role_id)
    {
        foreach ($permissions as $permission)
        {
            $this->db->query("INSERT INTO permission_role (role_id, permission_id) VALUES ('$role_id','$permission')");
        }
    }

    public function sync($permissions,$role_id)
    {
        foreach ($permissions as $permission)
        {
            if (!$this->haspermission($permission,$role_id))
            {
                $this->db->query("INSERT INTO permission_role (role_id, permission_id) VALUES ('$role_id','$permission')");
            }
        }

        foreach ($this->show_permission($role_id) as $permission)
        {
            if (!in_array($permission->permission_id,$permissions))
            {
                $this->db->query("DELETE FROM permission_role WHERE permission_id='$permission->permission_id' AND role_id='$role_id'");
            }
        }
    }

    public function detach($role_id)
    {
        $permissions = $this->show_permission($role_id);
        foreach ($permissions as $permission)
        {
            $this->db->query("DELETE FROM permission_role WHERE permission_id='$permission->permission_id' AND role_id='$role_id'");
        }
    }

    public function show_permission($role_id)
    {
        return $this->db->query("SELECT * FROM permission_role WHERE role_id='$role_id'")
            ->fetchAll(PDO::FETCH_OBJ);
    }

    public function permission()
    {
        return $this->db->query("SELECT * FROM permissions ")
            ->fetchAll(PDO::FETCH_OBJ);
    }

    public function haspermission($permission_id,$role_id)
    {
        return (boolean) $this->db->query("SELECT * FROM permission_role WHERE permission_id='$permission_id' AND role_id='$role_id' ")
            ->fetch(PDO::FETCH_OBJ);
    }
}