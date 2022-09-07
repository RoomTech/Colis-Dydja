<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Compagny;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Street extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    //Relation compagnie et street 
    public function compagnies() : BelongsToMany{
        return $this->belongsToMany(Compagny::class,'compagny_streets');
    }
}