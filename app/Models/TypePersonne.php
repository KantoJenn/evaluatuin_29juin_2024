<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypePersonne extends Model
{
    protected $table = "typepersonne";
    public $timestamps = false;

    protected $primaryKey = 'id';
    protected $fillable = ["nom"];

}
