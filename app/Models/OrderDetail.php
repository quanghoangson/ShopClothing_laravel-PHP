<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table ='order_details'; //khai bao ten bang
    protected $primaryKey ='id';  //kb khoa chinhs
    protected $guarded =[]; //kb cot , all row được ghi hàng loạt

    public function order(){   //dinh nghia mối quan hệ 1 n nn n1
        return $this->belongsTo(Order::class,'order_id','id' );   //belongsTo=1 1 bản chất như n-1 (related,foreignkey'', locakey'')
    }

    public function product(){   //dinh nghia mối quan hệ 1 n nn n1
        return $this->belongsTo(Product::class,'product_id','id' );   //belongsTo=1 1 bản chất như n-1 (related,foreignkey'', locakey'')
    }
}
