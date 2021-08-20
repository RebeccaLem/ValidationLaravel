<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Character extends Model
{
    public function Characters()
{
    return $this->belongsTo(Authors::class);
}
}
