<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tache extends Model
{
    use HasFactory;

    protected $fillable = ['titre'];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
