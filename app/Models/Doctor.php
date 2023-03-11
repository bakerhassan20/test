<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'lang' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
        public function course()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function getCatAttribute($value)
    {
        return $this->attributes['lang'] = json_decode($value);
    }
}
