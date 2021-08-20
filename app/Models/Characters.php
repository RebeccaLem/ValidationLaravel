<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Characters extends Model
{
    public function Characters()
{
    $Characters = App\Models\Character::find(1)->Characters;
    return $this->belongsTo(Authors::class);
}
}
