<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory; use SoftDeletes;

    //Creons nos rôles 

    const Administrator = 1;
    const Station_manager = 2;
    const Convoyer = 3;
    
    protected $fillable = ["name"];

    //Relation role and users

    public function users(){
        return $this->hasMany(User::class);
    }
}