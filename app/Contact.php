<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ["name", "twitter", "discord", "facebook", "other"];

	protected $casts = [
		'twitter' => 'array',
		'discord' => 'array',
		'facebook' => 'array',
		'other' => 'array'
	];
}
