<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function projects()
    {
        $this->belongsTo(Project::class);
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address', 'email', 'name', 'phone',
    ];
}
