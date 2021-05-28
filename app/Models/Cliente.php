<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    /* ::create($request->all()); */
    protected $fillable=['nome','email','endereco'];

    public function telefones()
    {
        return $this->hasMany('App\telefone');
    }

    public function addTelefone(Telefone $telefone)
    {
        return $this->telefones()->save($telefone);
    }
}
