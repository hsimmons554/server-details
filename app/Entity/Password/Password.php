<?php

namespace App\Entity\Password;

use Illuminate\Database\Eloquent\Model;

class Password extends Model
{
	public function user()
	{
		return $this->belongsTo(\App\Entity\User\User::class);
	}
}
