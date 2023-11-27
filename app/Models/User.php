<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'form_step',
        'candidate_id',
        'show_password',
        'phone',
        'registration_no',
        'payment_status',
    ];

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
        'password' => 'hashed',
    ];

    // fetch applicant_data for user from table applicant_data in json then decode and append to user object userDetail
    public function userDetail($step = 0)
    {
        $data = ApplicationData::where('user_id', $this->id)->where('form_step', $step)->first();
        if ($data) {
            $data = json_decode($data->data);
        }
        return $data;
    }

    // has many application data
    public function applicationData()
    {
        return $this->hasMany(ApplicationData::class);
    }

}
