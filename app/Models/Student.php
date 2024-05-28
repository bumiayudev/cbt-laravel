<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    public $fillable = ['student_name', 'email', 'user_id', 'place_of_birth', 'date_of_birth'];
}
