<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Materiel;
use App\Models\Mvt;

class Detail extends Model
{
    use HasFactory;
    
    protected $table="details";
    public function materiels()
    {
        return $this->belongsTo(Materiel::class);
    }
    public function mvts()
    {
        return $this->belongsTo(Mvt::class);
    }

}
