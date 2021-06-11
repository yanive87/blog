<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $with=['category','author'];

    public function scopeFilter($query,array $filters)
    {
        $query->when($filters['search'] ?? false,function ( $query,$search){
        $query
            ->where('title', 'like' , '%'.request('search').'%' )
            ->orwhere('body', 'like' , '%'.request('search').'%' );
        });
//        if($filters['search'] ?? false )
//        {
//            $query
//                ->where('title', 'like' , '%'.request('search').'%' )
//                ->orwhere('body', 'like' , '%'.request('search').'%' );
//        }
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
