<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $table = 'lessons';

    protected $primaryKey = 'id';

    protected $fillable = [
        'created_at',
        'updated_at',
        'course_id',
        'order',
        'title',
        'summary',
        'slug',
        'body',
    ];

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
