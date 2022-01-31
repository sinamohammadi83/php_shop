<?php
class comment{
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function store($product_id,$user_id,$content,$time)
    {
        $this->db->query("INSERT INTO comments (product_id,user_id,content,created_at,updated_at) VALUES ('$product_id','$user_id','$content','$time','$time')");
    }

    public function update($content,$time,$id)
    {
        $this->db->query("UPDATE comments SET content='$content' , updated_at='$time' WHERE  id='$id'");
    }

    public function destroy($comment_id)
    {
        $this->db->query("DELETE FROM comments WHERE id='$comment_id'");
    }
}