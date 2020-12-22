<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customerDB extends Model
{
   	protected $table = 'customers';
	protected $primaryKey = "id";
	public $timestamps = false;

	// const CREATED_AT = "create_at";
	// const UPDATED_AT = "update_time";
}
//$post->created_at->format('Y-m-d')