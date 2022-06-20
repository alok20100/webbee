<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Workshop;
class Event extends Model
{
	public function workshop()
	{
        return $this->hasMany(Workshop::class);
	}
}
