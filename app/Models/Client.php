<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'utilisateur';
    protected $primaryKey = 'cinutilisateur';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;
}
?>
