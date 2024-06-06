<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeentry extends Model
{
    use HasFactory;
    protected $fillable = ['nom_tache', 'date_debut', 'date_fin'];
    protected $appends = ['duree'];

    protected function dateDebut(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Carbon::parse($value)
        );
    }
    protected function dateFin(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Carbon::parse($value)
        );
    }

    protected function nomTache(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => mb_convert_case($value, MB_CASE_TITLE, 'UTF-8'),
            set: fn ($value) => mb_strtolower($value)
        );
    }

    protected function casts(): array
    {
        return [
            'date_debut' => 'datetime:Y-m-d',
            'date_fin' => 'datetime:Y-m-d'
        ];
    }

    protected function duree(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->date_debut->floatDiffInMinutes($this->date_fin)
        );
    }
}
