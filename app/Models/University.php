<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class University extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom', 'descriptionGen', 'critereAdmission', 'photo'
    ];
    public function User():HasMany{
        return $this->hasMany(User::class);
    }

    public function Domains():HasMany{
        return $this->hasMany(Domain::class);
    }
}
