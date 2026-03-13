<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Expert;
use App\Models\Atelier;
class Evenement extends Model
{
    //
    use HasFactory;
    protected $fillable=['theme','dateDebut','dateFin','description','coutJ','expert_id'];

    public function expert(){
        $this->belongsTo(Expert::class);
    }

    public function ateliers(){
        $this->hasMany(Atelier::class);
    }
}
