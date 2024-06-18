<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;

    protected $table = 'travel';
    
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'approve',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
