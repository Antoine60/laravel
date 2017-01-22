<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model {

	protected $table = 'roles';
	public $timestamps = false;
	protected $fillable = array('name');

	public function user()
	{
		return $this->belongsTo('User');
	}

}