<?php

namespace App\Controllers;

use App\Models\BlogModel;
use App\Models\CommentsModel;

class CommentController extends BaseController
{

    public function postcomment($slug_ref)
    {

        $CommentsModel = new CommentsModel();
        $BlogModel = new BlogModel();
        

        $db = ['user_comment' => $this->request->getVar('Addcomment'),
            'slug_ref' => $slug_ref,
        ];

        $CommentsModel->save($db);

        $data['post'] = $BlogModel->getPost($slug_ref);

        $data['get'] = $CommentsModel->getcomments($slug_ref);

        // return redirect()->to('blog/post');

        return view('blog/post', $data);

    }

}