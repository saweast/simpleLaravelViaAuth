<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $fillable = [
        'title', 'user_id', 'body',
    ];
    protected function getDateFormat()
    {
        return "Y-m-d H:i:s";
    }
    public function user()
    {
//        return User::where('id', $this->user_id)->first()->name;
        return $this->belongsTo(Users::class);
    }
}
