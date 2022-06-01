<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'valor', 'estoque', 'fornecedor_id'];

    public function post(){
        return $this->belongsTo(Fornecedor::class);
    }
}
