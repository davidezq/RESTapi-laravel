<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $table= "libros";

    protected $primaryKey = "isbn";
    protected $keyType = "string";
    protected $fillable = ["isbn","autor","titulo","precio"]; 
}
