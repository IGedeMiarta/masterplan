<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bank extends Model
{
    use HasFactory;
    public function rekening(){
        return $this->hasMany(rekening::class,'nama_bank','nama_bank');
    }
}
