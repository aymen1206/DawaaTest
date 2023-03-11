<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Application extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    protected $table='application';
                        

    protected $fillable = [
        'Name',
        'DOB',
        'genderId',
        'NationalityId',
        'CV',
        'CoordinatorOperated',
        'AdminOperated',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */

 
    public function gen()
    {
        return $this->belongsTo(Gender::class , 'genderId');
    }
    
    public function nat()
    {
        return $this->belongsTo(Nationality::class , 'NationalityId');
    } 
 
}
