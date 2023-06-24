<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table ='brands'; //khai bao ten bang
    protected $primaryKey ='id';  //kb khoa chinhs
    protected $guarded =[]; //kb cot , all row được ghi hàng loạt
    public function products(){   //dinh nghia mối quan hệ 1 n nn n1
        return $this->hasMany(Product::class,'brand_id','id' );   //hasmany=1 n (related,foreignkey'', locakey'')
    }
}
