<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    protected $table = "equipes";

    protected $fillable = [
        "nomClub",
        "ville",
        "pays",
        "nbrMax",
        "continent_id"
    ];

    public function continent(){
        return $this->belongsTo(Continent::class);
    }
}
