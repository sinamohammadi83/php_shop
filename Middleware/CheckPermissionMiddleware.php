<?php
const AUTH = 'http://localhost/php_shop/index.php?c=login&a=login';

function abort($code)
{
    include_once "../errors/$code.php";
}

class CheckPermissionMiddleware{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }

    public function middleware($middleware){
        $sql=$this->db->query("SELECT * FROM permissions WHERE title='$middleware'");
        $getpermission = $sql->fetch(PDO::FETCH_OBJ);
        $role = $this->getrole($_SESSION['user_id']);
        $sqlPermissionsRoles=$this->db->query("SELECT * FROM permission_role WHERE role_id='$role->id' AND permission_id='$getpermission->id'");
        if (!$sqlPermissionsRoles->fetch(PDO::FETCH_OBJ))
        {
            abort(403);
        }
    }

    public function getrole($id)
    {
        $sql=$this->db->query("SELECT * FROM users WHERE id='$id'");
        $user = $sql->fetch(PDO::FETCH_OBJ);
        $role_id = $user->role_id;
        $sqlRole=$this->db->query("SELECT * FROM roles WHERE id='$role_id'");
        $role = $sqlRole->fetch(PDO::FETCH_OBJ);
        return $role;
    }

    public function gate($middleware)
    {
        $sql=$this->db->query("SELECT * FROM permissions WHERE title='$middleware'");
        $getpermission = $sql->fetch(PDO::FETCH_OBJ);
        $role = $this->getrole($_SESSION['user_id']);
        $sqlPermissionsRoles=$this->db->query("SELECT * FROM permission_role WHERE role_id='$role->id' AND permission_id='$getpermission->id'");
        return (boolean) $sqlPermissionsRoles->fetch(PDO::FETCH_OBJ);
    }

    public function middleware_auth()
    {
        if (!isset($_SESSION['user_id']))
        {
            header("location:".AUTH);
        }
    }
}