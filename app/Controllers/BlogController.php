<?php

namespace App\Controllers;

use App\Models\BlogModel;
use App\Models\CommentsModel;

class BlogController extends BaseController
{

    public function blogtitle()
    {
        $model = new BlogModel();
        $data['news'] = $model->getpost();

        echo view('blog/blogTitle', $data);
    }

    public function create()
    {
        helper('form');
        $model = new BlogModel();

        if (!$this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
            'body' => 'required'])) {

            echo view('blog/create');

        } else {
            $model->save(
                [
                    'title' => $this->request->getVar('title'),
                    'body' => $this->request->getVar('body'),
                    'slug' => url_title($this->request->getVar('title')),
                ]
            );

            return redirect()->to('/');
        }
    }

    public function show()
    {
        echo view('blog/create');
    }

    public function post($slug)
    {
        $BlogModel = new BlogModel();
        $CommentsModel = new CommentsModel();

        $data['post'] = $BlogModel->getPost($slug);

        $data['get'] = $CommentsModel->getcomments();

        echo view('blog/post', $data);
        
        // return redirect()->to('/');

    }

    public function delete($slug){
        $BlogModel = new BlogModel();
        $BlogModel->delete_post($slug);        
        
        return redirect()->to('/');
    }

}