<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Detail;

class Mvt extends Model
{
    use HasFactory;
    protected $primaryKey = 'mvt_id';
    protected $table ="mvts";
    public function details()
    {
        return $this->haMany(Detail::class);
    }
}
