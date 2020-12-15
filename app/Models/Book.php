<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable=['descripcion','cantidad','autor'];

    protected $primaryKey='id';

    use HasFactory;
}
