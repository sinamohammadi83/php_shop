<?php
$name = 'saman';
class PostController
{

    public function index()
    {
        view('admin.posts.index');
    }

    public function create()
    {

        view('admin.posts.create',[
            'name' => 'saman'
        ]);
    }

    public function store()
    {
        redirect('/post/index');
    }

    public function delete($id)
    {
        redirect('/post/index');
    }


}