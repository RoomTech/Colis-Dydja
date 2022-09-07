<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class Package extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    //Relation Colis et users 
    public function users(){
        return $this->hasMany(User::class);
    }
}