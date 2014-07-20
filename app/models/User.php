<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use LaravelBook\Ardent\Ardent;

class User extends Ardent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    /**
     * Will scrub 'password_confirmation', '_token', etc before save.
     *
     * @var bool
     */
    public $autoPurgeRedundantAttributes = true;

    /**
     * Will auto-populate assignable fields from input upon validation of new users.
     *
     * @var bool
     */
    public $autoHydrateEntityFromInput = true;

    /**
     * Will auto-populate assignable fields from input upon validation of existing users.
     *
     * @var bool
     */
    public $forceEntityHydrationFromInput = true; // hydrates whenever validation is called

    /**
     * Validation rules.
     *
     * @var array
     */
    public static $rules = [
        'name'                  => 'required|between:4,16',
        'username'              => 'required|unique:users',
        'email'                 => 'required|email|unique:users',
        'password'              => 'required|alpha_num|between:4,8|confirmed',
        'password_confirmation' => 'required|alpha_num|between:4,8',
    ];

    /**
     * Whitelist of mass-assignable fields.
     * @var array
     */
    public $fillable = [
        'name',
        'username',
        'email',
        'password',
        'password_confirmation'
    ];

    /**
     * Automatically hash passwords.
     * @var array
     */
    public static $passwordAttributes = array('password');
    public $autoHashPasswordAttributes = true;

}
