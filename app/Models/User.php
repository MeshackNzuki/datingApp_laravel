<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\profile;
use App\Models\media;
use Cache;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable ;
    use \Staudenmeir\LaravelMergedRelations\Eloquent\HasMergedRelationships;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     * 
     */

     public function isOnline()
     {
         return Cache::has('user-is-online-' . $this->id);
     }

     public function profile()  
     {  
       return $this->hasOne('App\Models\profile');  
     }  

     public function subscription()  
     {  
       return $this->hasOne('App\Models\subscription');  
     }  


     public function media()  
     {  
       return $this->hasOne('App\Models\media');  
     } 
     public function friendsTo()
    {
        return $this->belongsToMany(User::class, 'requests', 'to_user_id', 'from_user_id')
            ->withPivot('status')
            ->withTimestamps();
    }
 
    public function friendsFrom()
    {
        return $this->belongsToMany(User::class, 'requests', 'from_user_id', 'to_user_id')
            ->withPivot('status')
            ->withTimestamps();
    } 
    public function pendingFriendsTo()
{
    return $this->friendsTo()->wherePivot('status', 'pending');
}
 
public function pendingFriendsFrom()
{
    return $this->friendsFrom()->wherePivot('status', 'pending');
}
 
public function acceptedFriendsTo()
{
    return $this->friendsTo()->wherePivot('status', 'accepted');
}
 
public function acceptedFriendsFrom()
{
    return $this->friendsFrom()->wherePivot('status', 'accepted');
}


//merged
    public function friends() {
        return $this->mergedRelationWithModel(User::class, 'friends_view');
}
    public function pendingFriends() {
        return $this->mergedRelationWithModel(User::class, 'friends_view_requests');
    }
    protected $fillable = [
        'name',
        'email',
        'location',
        'sex',
        'age',
        'password',
        'avatar',
        'last_login',
        'status_fake_user',
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
}
