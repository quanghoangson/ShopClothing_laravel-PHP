<?php

namespace App\Repositories\Blog;

use App\Repositories\RepositoryInterface;
use App\Repositories\Blog;
interface BlogRepositoryInterface extends RepositoryInterface
{
    public  function  getLatestBlogs($limit=3);
}
