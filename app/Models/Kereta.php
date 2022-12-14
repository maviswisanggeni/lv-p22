<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kereta extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Penumpang(){
        return $this->hasMany(Penumpang::class);
    }
}
