<?php
namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
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
        'phone',
        'dp',
        'dob',
        'gender',
        'aadhar_front',
        'aadhar_back',
        'last_qualification',
        'shipping_address',
        'state',
        'city',
        'zip',
        'profile_complete',
        'password',
        'status'
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
    ];

    public function deleteImage($image)
    {
        if (Storage::exists('public/user_data/'.$this->id .'/'. $this[$image])) {
            Storage::delete('public/user_data/'.$this->id .'/'. $this[$image]);
        }
    }

    public function getImage($image)
    {
        if (Storage::exists('public/user_data/'.$this->id .'/'. $this[$image])) {
            return asset('storage/user_data/' .$this->id .'/' . $this[$image]);
        }else{
            return 'https://eu.ui-avatars.com/api/?name=NoImage&size=250';
        }
    }

    public function orders()
    {
        return $this->hasMany(Order::class,'user_id')->latest();
    }
}
