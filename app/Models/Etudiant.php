<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        "nom",
        "prenom",
        "matiere",
        "semestre",
        "note",
        "examen"
    ];

    public static function moyenneGenerale(){
        $etudiants = Etudiant::all();
        $total = 0;
        $count = 0;
        if($etudiants->count()  > 0 ){
        foreach ($etudiants as $etudiant) {
            $total += ($etudiant->note + $etudiant->examen) / 2;
            $count++;
        }
        return $total / $count;
        }
    }
    public static function premierEtudiant(){

            return self::orderBy('note', 'desc')->orderBy('examen', 'desc')->first();
    }
   
}
