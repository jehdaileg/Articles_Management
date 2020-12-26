<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'description', 'nbre_jaime'];

   // public $guarded = [];

    //generate all commentaires 

    public function commentaires()
    {

    	return $this->hasMany('App\Models\Commentaire');
    	
    }
}
