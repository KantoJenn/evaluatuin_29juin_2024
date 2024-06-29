<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = "client";
    public $timestamps = false;

    protected $primaryKey = 'id';
    protected $fillable = ["email","id_type_perso"];


    public function typePersonneBe(){
        return $this->belongsTo(TypePersonne::class, 'id');
    }


}
