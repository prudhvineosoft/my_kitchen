<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
}
