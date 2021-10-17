<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Materiels;

class Categorie extends Model
{
    use HasFactory;
    protected $table="categories";
    protected $primaryKey = 'categorie_id';

    public function materiels()
    {
        return $this->hasMany(Materiel::class);
    }
}
