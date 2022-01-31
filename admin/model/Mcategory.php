<?php
class category{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }

    public function store($category_id,$title,$time)
    {
        if ($category_id != null){
            $this->db->query("INSERT INTO categories(category_id,title,created_at,updated_at) VALUES ('$category_id','$title','$time','$time')");
        }else {
            $this->db->query("INSERT INTO categories(title,created_at,updated_at) VALUES ('$title','$time','$time')");
        }
    }

    public function all()
    {
        $sql=$this->db->query("SELECT * FROM categories");
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }

    public function show($id)
    {
        $sql=$this->db->query("SELECT * FROM categories WHERE id='$id'");
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function showByTitle($title)
    {
        return  $this->db->query("SELECT * FROM categories WHERE title='$title'")->fetch(PDO::FETCH_OBJ);
    }

    public function update($category_id,$title,$time,$id)
    {
        if ($category_id != null){
            $this->db->query("UPDATE categories SET title='$title' , category_id='$category_id' , updated_at='$time' WHERE id='$id'");
        }else {
            $this->db->query("UPDATE categories SET title='$title' , category_id=null  , updated_at='$time' WHERE id='$id'");
        }
    }

    public function destroy($id)
    {
        $this->db->query("DELETE FROM categories WHERE id='$id'");
    }

    public function attach($property_groups,$category_id)
    {
        foreach ($property_groups as $property_group):
            $this->db->query("INSERT INTO category_property_group (category_id,property_group_id) VALUES ('$category_id','$property_group')");
        endforeach;
    }

    public function sync($category_id,$property_groups)
    {
        foreach ($property_groups as $property_group):
            if (!$this->haspropertygroup($property_group,$category_id)):
                $this->db->query("INSERT INTO category_property_group (category_id,property_group_id) VALUES ('$category_id','$property_group')");
            endif;
        endforeach;

        foreach ($this->show_propertygroups($category_id) as $properties):
            if (!in_array($properties->property_group_id,$property_groups)):
                $this->db->query("DELETE FROM category_property_group WHERE property_group_id='$properties->property_group_id' AND category_id='$properties->category_id'");
            endif;
        endforeach;
    }

    public function detach($category_id)
    {
        foreach ($this->show_propertygroups($category_id) as $propertygroup)
        {
            $this->db->query("DELETE FROM category_property_group WHERE property_group_id='$propertygroup->property_group_id' AND category_id='$category_id'");
        }
    }

    public function show_propertygroups($category_id)
    {
        return $this->db->query("SELECT * FROM category_property_group WHERE category_id='$category_id'")
            ->fetchAll(PDO::FETCH_OBJ);
    }

    public function haspropertygroup($property_group_id,$category_id)
    {
        return (boolean) $this->db->query("SELECT * FROM category_property_group WHERE category_id='$category_id' AND property_group_id='$property_group_id'")
            ->fetchAll(PDO::FETCH_OBJ);
    }
}