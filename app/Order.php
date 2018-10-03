<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{	
	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'quantity', 'deliver_method', 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
