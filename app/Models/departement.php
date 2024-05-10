<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class departement extends Model
{
    use HasFactory;

    public string $libelle;
    public function domain():BelongsTo{
        return $this->belongsTo(domain::class);
    }
}
