<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    // Určuje, které atributy jsou hromadně přiřazovány
    protected $fillable = ['user_id', 'type', 'timestamp'];

    // Volitelně, pokud chceš používat timestampy jako objekty Carbon
    protected $dates = ['timestamp'];
}
