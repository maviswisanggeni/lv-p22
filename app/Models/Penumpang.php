<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penumpang extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Kereta(){
        return $this->belongsTo(Kereta::class);
    }
}
