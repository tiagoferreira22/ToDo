<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'due_date',
        'category_id',
        'user_id',
    ];


    public function user()
    {
        /* belongsTo => pertence a um */
        return $this->belongsTo(User::class);
    }

    public function catefory()
    {
        /* belongsTo => pertence a um */
        return $this->belongsTo(Category::class);
    }
}
