<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = 'posts';
    protected $allowedFields = ['title', 'slug', 'body'];

    public function getpost($slug = null)
    {
        if (!$slug) {
            return $this->findAll();
        }

        return $this->asArray()
            ->where(['slug' => $slug])
            ->first();

    }

    public function delete_post($slug = null){
        if (!$slug) {
            return $this->findAll();
        }
        else{
            $this->where('slug', $slug)->delete();
        }
        
    }
}