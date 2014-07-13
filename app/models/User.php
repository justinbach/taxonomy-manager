<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use LaravelBook\Ardent\Ardent;

class User extends Ardent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

    public static $rules = [
        'name'                  => 'required|between:4,16',
        'username'              => 'required|unique:users',
        'email'                 => 'required|email|unique:users',
        'password'              => 'required|alpha_num|between:4,8|confirmed',
        'password_confirmation' => 'required|alpha_num|between:4,8',
    ];

    public $fillable = [
        'name',
        'username',
        'email',
        'password',
        'password_confirmation'
    ];


    public $autoPurgeRedundantAttributes = true; // will scrub 'password_confirmation' before save
    public $autoHydrateEntityFromInput = true;    // hydrates on new entries' validation
    public $forceEntityHydrationFromInput = true; // hydrates whenever validation is called

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
     * Hook to hash the password
     */
    public function beforeSave()
    {
        // if there's a new password, hash it
        if($this->isDirty('password'))
        {
            $this->password = Hash::make($this->password);
        }

        return true;
    }

}
