<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Evenement;
class Expert extends Model
{
    //
    use HasFactory;
    protected $fillable=['nom','prenom','email','specialite'];
    public function evenements(){
        $this->hasMany(Evenement::class);
    }
    
}
