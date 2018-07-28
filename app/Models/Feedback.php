<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Feedback extends Authenticatable
{
    use Notifiable;

    protected $table='feedbacks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'email', 'message', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}