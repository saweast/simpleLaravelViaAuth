<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $fillable = [
        'title', 'users_id', 'body',
    ];
    protected function getDateFormat()
    {
        return "Y-m-d H:i:s";
    }
    public function user()
    {
        return Users::find($this->users_id);
//        return User::where('id', $this->users_id)->first()->name;
//        return $this->belongsTo(Users::class);
    }
}
