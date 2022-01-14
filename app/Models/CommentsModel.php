<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentsModel extends Model
{

    protected $table = 'comments';

    protected $allowedFields = ['id', 'user_comment', 'slug_ref', 'commented_on'];

    public function getcomments($slug_ref = null)
    {
        if (!$slug_ref) {
            return $this->findAll();
        }

        return $this->asArray()
            ->where(['slug_ref' => $slug_ref])
            ->get()->getResultArray();

        // $sql = "SELECT user_comment, FROM comments, posts
        // WHERE comments.slug_ref = posts.slug;";

        // return $this->query($sql);
    }

}