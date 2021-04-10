<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Participant extends Model
{
    protected $guarded = ['id','attendend'];

    public function events():BelongsToMany
    {
        return $this->belongsToMany(Event::class);
    }
}
