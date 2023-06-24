<?php

namespace App\Repositories\ProductComment;


use App\Models\ProductComment;
use App\Repositories\BaseRepository;
use App\Repositories\ProductComment\ProductCommentRepositoryInterface;
class ProductCommentRepository extends BaseRepository implements  ProductCommentRepositoryInterface
{

    public function getModel()
    {
        return ProductComment::class;
        // TODO: Implement getModel() method.
    }
}
