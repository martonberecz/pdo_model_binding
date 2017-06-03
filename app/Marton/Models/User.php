<?php
namespace Marton\Models;

//if the Model would be somewhere else should use
//use Marton\Models\Base\Model 	//if under Base folder

class User extends Model
{
	//Carbon has to know which of the columns are actualy dates
	protected $dates = [
		'created',
		'last_active'
	];

	//to filter out any values to json
	protected $hidden =[
		'password',
		'id'
	];

	public function getFirstName()
	{
		return $this->firstName;
	}

	public function getFullNameOrUserName()
	{
		return $this->getFullName()?:$this->userName;
	}
	public function getFullName()
	{
		if($this->firstName && $this->lastName){
			return "{$this->firstName} {$this->lastName}";
		}
		return null;
	}
}