<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprio extends Model
{
    protected $table = "proprio";
    public $timestamps = false;

    protected $primaryKey = 'id';
    protected $fillable = ["numero","id_type_perso"];


    public function typePersonneBe(){
        return $this->belongsTo(TypePersonne::class, 'id');
    }
}
