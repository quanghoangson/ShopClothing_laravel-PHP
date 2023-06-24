<?php

namespace App\Repositories\Order;

use App\Repositories\RepositoryInterface;
use App\Repositories\Order;
interface OrderRepositoryInterface extends RepositoryInterface
{
    public function getOrderByUserId($userId);
}
