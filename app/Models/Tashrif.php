<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tashrif extends Model
{
    use HasFactory;

    protected $fillable = ['fish', 'tashkilot', 'jinsi', 'maqsad', 'sana', 'sabab', 'image'];
}
