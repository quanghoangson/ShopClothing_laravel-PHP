<?php

namespace App\Repositories\Blog;


use App\Models\Blog;
use App\Repositories\BaseRepository;
use App\Repositories\Blog\BlogRepositoryInterface;
class BlogRepository extends BaseRepository implements  BlogRepositoryInterface
{

    public function getModel()
    {
        return Blog::class;
        // TODO: Implement getModel() method.
    }
    public  function  getLatestBlogs($limit=3){ // ham hien thi blog trong home
        return $this->model->orderBy('id','desc')
            ->limit($limit)
            ->get();
    }
}
