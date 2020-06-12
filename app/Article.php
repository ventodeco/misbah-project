<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    public function getCover()
    {
    	if(substr($this->cover, 0, 5) == 'https') {
    		return $this->cover;
    	}

    	if($this->cover){
    		return asset($this->cover);
    	}

    	return 'https://via.placeholder.com/1080x720.png?text=No+Cover';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
