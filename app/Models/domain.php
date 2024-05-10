<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class domain extends Model
{
    use HasFactory;

    private string $libelle;

    public function University():BelongsTo{
        return $this->belongsTo(University::class);
    }

    public function Departement():HasMany{
        return $this->hasMany(departement::class);
    }
}
