<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon;

class Article extends Model {

	
	protected $table = 'articles';

	protected $fillable = [ 'title', 'body' ,'published_at'];



	protected $dates= ['published_at'];
	

	public function scopePublicado($query)
	{

		$query->where('published_at', '<=', Carbon::now());
	}	

	public function scopeNopublicado($query)
	{

		$query->where('published_at', '>', Carbon::now());
	}


}
