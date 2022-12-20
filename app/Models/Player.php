<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'lastname',
        'edad',
        'stars',
        'nationality',
        'team_id'
    ];

    public function teams()
    {
        return $this->hasMany(Team::class);
    }

}
