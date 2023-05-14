<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $fillable = ['cnpj','nome','endereco','email','senha', 'numero'];
    //protected $hidden = ['senha', 'remember_token'];

}
