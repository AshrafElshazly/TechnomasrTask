<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'permissions'
    ];
    public $timestamps = false;

    
    public function user()
    {
        return $this->hasMany(User::class,'role_id');     
    }

    protected function permissions(): Attribute 
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value),
            set: fn ($value) => json_encode($value)
        );
    }
}
