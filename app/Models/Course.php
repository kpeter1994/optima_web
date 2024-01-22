<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'price',
        'summary',
        'slug',
        'image',
        'video',
        'body',
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
