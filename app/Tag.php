<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function debates()
    {
    	return $this->belongsToMany('App\Debate', 'debate_tag', 'tag_id', 'debate_id');
    }
}
