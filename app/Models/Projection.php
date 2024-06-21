<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projection extends Model
{
    use HasFactory;

    protected $table = 'projections';

    protected $fillable = ['data_id', 'year', 'population', 'created_at', 'updated_at'];

    public function data()
    {
        return $this->belongsTo(Data::class);
    }
}
