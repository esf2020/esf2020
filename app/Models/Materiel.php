<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Categorie;
use App\Models\Detail;

class Materiel extends Model
{
    use HasFactory;
    //use SoftDeletes;
    protected $primaryKey = 'materiel_id';
    //protected $dates = ['deleted_at'];

    protected $table="materiels";
    protected $fillable = [
        
        'materiel_id',
        'designation',
        'marque',
        'quantites',
        'observation',
        'categorie_id',
    ];

    public function categories()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function details()
    {
        return $this->haMany(Detail::class);
    }
}
