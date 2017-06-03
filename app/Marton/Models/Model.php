<?php
namespace Marton\Models;
//carbon has been downloaded from composer require nesbot/carbon
use Carbon\Carbon;

class Model{
	protected $dates = []; //in case it doesn't exist in child classes
	protected $hidden = []; //same here

	public function __construct()
	{
		foreach ($this->dates as $date) {
			if(!$this->{$date}){//check if the field is null as null can not be passed in!
				continue;	//just to go on with the next loop as we ignoring null fields
			}
			$this->{$date} = new Carbon($this->{$date});
		}
	}

	//for jason encoded version trough all modell extends base Model
	public function __toString(){
		foreach ($this->hidden as $hidden) {
			unset($this->{$hidden}); //unset the data from toString that to be filtered from json!
		}
		return json_encode($this);
	}
}