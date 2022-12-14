<?php

namespace App\Models\user;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = ['name','slug'];


    /**
     * @return LengthAwarePaginator
     */
    public function post(): LengthAwarePaginator
    {
        return $this->belongsToMany(Post::class,'category_posts')->orderBy('created_at','DESC')->paginate(5);
    }
}
