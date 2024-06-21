<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $table = 'datas';

    protected $fillable = ['name', 'description', 'created_at', 'updated_at'];

    public function entries()
    {
        return $this->hasMany(Entry::class);
    }

    public function projections()
    {
        return $this->hasMany(Projection::class);
    }
}
