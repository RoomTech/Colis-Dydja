<?php

namespace App\Models;
use App\Models\Role;
use App\Models\Compagny;
use App\Models\Package;
use Illuminate\Database\Eloquent\Casts\Attribute;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ["id"];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Nos relations roles and user
    public function role(){
        return $this->belongsTo(Role::class);
    }

    //Relation user and compagnies
    public function compagnie(){
        return $this->belongsTo(Compagny::class);
    }

    //Relation entre user et packages 
    public function package(){
        return $this->belongsTo(Package::class);
    }

    //UI AVATAR notre getter
    public function avatar():Attribute{
      return new Attribute(get:function(){
        return "https://ui-avatars.com/api/?name={$this->fullname}?background=0D8ABC&color=ea580c";
      });
    }
}