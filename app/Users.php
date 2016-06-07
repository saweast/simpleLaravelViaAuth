<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = [
        'name', 'email', 'password'
    ];
    public function blogs() {
        return $this->hasMany(Blogs::class);
    }

}
