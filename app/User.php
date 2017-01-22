<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class User extends Model {

	protected $table = 'users';
	public $timestamps = true;
	protected $fillable = array('name', 'sexe', 'birth_date', 'job_id');
	
	public function job()
	{
		return $this->hasOne('App\Job', 'id', 'job_id');
	}
	public function characteristic()
	{
		return $this->hasOne('App\Characteristic');
	}

}