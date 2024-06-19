<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    use HasFactory;

    protected $fillable = ['prefecture_name'];

    public function restaurant(){

        return $this->belongsTo(Restaurant::class);
    }
}
