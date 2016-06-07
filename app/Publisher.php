<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    public function publishes() {
        return $this->hasMany(Publish::class);
    }
}
