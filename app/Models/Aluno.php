<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    public function comprovante() {
        return $this->hasMany('\App\Models\Comprovante');
    }

    public function declaracao() {
        return $this->hasMany('\App\Models\Declaracao');
    }
}
