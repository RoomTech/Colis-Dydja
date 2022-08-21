<?php

namespace App\Models;

use App\Models\Street;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Compagny extends Model
{
    use HasFactory; use SoftDeletes;

    protected $guarded = [];

    //Relation compagnie et users
    public function users(){
        return $this->hasMany(User::class);
    }
    //Relation street et compagnie
    public function street(){
        return $this->belongsToMany(Street::class);
    }
}