<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    use HasFactory;
    protected $fillable = [
        'mensaje'
    ];
    
    public function user()
    {
      return $this->belongsToMany('App/Models/User');
    }
}
