<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'subtitle', 'content','category_id'
    ];

    public function dateFormatted(){
        return date_format( $this->created_at,'d-m-Y');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
