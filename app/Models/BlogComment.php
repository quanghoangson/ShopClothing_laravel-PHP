<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    use HasFactory;
    protected $table ='blog_comments'; //khai bao ten bang
    protected $primaryKey ='id';  //kb khoa chinhs
    protected $guarded =[]; //kb cot , all row được ghi hàng loạt
    public function blog(){   //dinh nghia mối quan hệ 1 n nn n1
        return $this->belongsTo(Blog::class,'blog_id','id' );   //belongsTo=1 1 bản chất như n-1 (related,foreignkey'', locakey'')
    }
}
