<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'password',
        'phone',
        'address',
        'zip',
        'state',
        'city',
        'user_mode'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPhoneAttribute($value)
    {
        $this->attributes['phone'] = EnFa($value,'en');
    }
    public function codes()
    {
        return $this->hasMany(UserCode::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function lastCode($request)
    {
        return $request->user()->codes()->select('code')->orderBy('id','desc')->first();
    }

    public function makeCode()
    {
        $this->codes()->create([
            'code' => rand(10000,99999)
        ]);
    }

    public static function verified()
    {
        if (auth()->check()){
            $userId = auth()->user();
            $user = User::whereNotNull('phone_verified_at')->whereId($userId->id)->exists();
            return $user;
        }
    }

}
