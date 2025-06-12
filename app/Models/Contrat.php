<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    protected $table = 'Contrat';
    public $timestamps = false;
    protected $primaryKey = 'numContrat';
    protected $guarded = [];
}
