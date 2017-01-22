<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    protected $table = 'characteristics';
    public $timestamps = true;
    protected $fillable = array('health', 'stamina', 'user_id');
    public $max_stamina = 50;

    public function user()
    {
        return $this->belongsTo('User', 'id');
    }
}
