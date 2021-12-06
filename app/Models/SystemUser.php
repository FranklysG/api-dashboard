<?php

namespace App\Models;

use App\Models\Base\SystemUser as BaseSystemUser;

class SystemUser extends BaseSystemUser
{
	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'name',
		'login',
		'password',
		'email',
		'frontpage_id',
		'system_unit_id',
		'active',
		'type'
	];

	/**
	 * Metodo responsavel por passar um md5 no password do usuario
	 *  @param string $password
	 */
	public function setPasswordAttribute($password){
		$this->attributes['password'] = md5($password);
	}

	/**
	 * Metodo responsavel por esconder o email do usuario
	 * @param string $email
	 * @return ************@****
	 */
	public function getEmailAttribute($email){
		return preg_replace('/([a-z])/','*', $email);
	}
}
