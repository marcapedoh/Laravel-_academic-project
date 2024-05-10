<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Marks extends Model
{
    use HasFactory;

    public int $qualiteEns;
    public int $infrastructure;
    public int $recherche;
    public int $insertionPro;
    public int $universities_id;
    public function User():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function University():BelongsTo{
        return $this->belongsTo(University::class);
    }
}
