<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matter extends Model
{
    protected $table = 'matter';
    protected $fillable = ['matter_name', 'price'];

    use HasFactory;
}
