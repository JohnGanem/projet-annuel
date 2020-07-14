<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    protected $table = "user";

    public function sms(): HasMany
    {
        return $this->hasMany(Sms::class, 'user_id', 'id');
    }

    public function phones(): HasMany
    {
        return $this->hasMany(Phone::class, 'user_id', 'id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class, 'user_id', 'id');
    }

    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class, 'user_id', 'id');
    }

    public function accounts(): HasMany
    {
        return $this->hasMany(Account::class, 'user_id', 'id');
    }
}
