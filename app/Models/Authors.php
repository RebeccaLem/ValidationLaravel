<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    public function Author() {
    $authors = App\Models\Authors::find(1)->author;
    return $this->hasMany(Characters::class);
}
}
