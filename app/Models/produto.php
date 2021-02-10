<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    protected $fillable = ['nome', 'preço'];
    protected $table = 'produto';
    

    public function getNome() {
        return $this-> attributes['nome'];
    }
    public function getPreço() {
        return $this-> attributes['preço'];
    }
}
