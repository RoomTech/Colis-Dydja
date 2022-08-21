<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Compagny;

class Street extends Model
{
    use HasFactory;use SoftDeletes;

    protected $guarded = [];

    //Relation compagnie et street 
    public function compagnies(){
        return $this->belongsToMany(Compagny::class);
    }
}