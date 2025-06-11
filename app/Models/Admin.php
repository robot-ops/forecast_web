<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'admin';
    protected $fillable = [
        'name',
        'email',
        'password',
        'occupation',
        'phone',
        'gender',
        'profile_picture',
        'status',
    ];

    public function coFiringData()
    {
        return $this->hasMany(CoFiringData::class);
    }
    // public function getProfilePictureUrlAttribute()
    // {
    //     return asset('storage/' . $this->profile_picture);
    // }
    // public function getStatusLabelAttribute()
    // {
    //     return $this->status ? 'Active' : 'Inactive';
    // }

}
