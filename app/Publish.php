<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publish extends Model
{
    public function publisher() {
        return $this->belongsTo(Publisher::class);
    }
}
