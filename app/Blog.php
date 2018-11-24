<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable=['titre','texte', 'categorie_id'];

    public function categories(){

        return $this->belongsTo('App\Categorie');

    }
}
