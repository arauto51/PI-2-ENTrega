<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudante extends Model
{
   
    protected $fillable = ['nome', 'senha'];
    protected $table = 'estudante';
    

    public function getNome() {
        return $this-> attributes['nome'];
    }
}
