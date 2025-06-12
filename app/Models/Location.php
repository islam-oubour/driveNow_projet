<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
 protected $table = 'Location';
    public $timestamps = false;
    protected $primaryKey = 'id'; 
    protected $guarded = [];
    public function voiture()
    {
        return $this->belongsTo(Voiture::class, 'Matricule', 'Matricule');
    }
    public function contrat()
    {
        return $this->belongsTo(Contrat::class, 'numContrat', 'numContrat');
    }
}
