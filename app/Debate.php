<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Debate extends Model
{
        public function tags()
    {
    	return $this->belongsToMany('App\Tag', 'debate_tag', 'debate_id', 'tag_id');
    }

}
