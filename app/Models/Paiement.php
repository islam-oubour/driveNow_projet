<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    protected $table = 'paiement'; 
    protected $primaryKey = 'id_paiement'; 
    public $timestamps = false;
    protected $fillable = [
        'date_paiement',
        'montant',
        'mode_paiement',
        'id_location',
    ];
}
?>