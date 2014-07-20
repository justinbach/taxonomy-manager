<?php

use LaravelBook\Ardent\Ardent;

class Taxonomy extends Ardent {

    /**
     * Mass-assignable fields.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];

    /**
     * Will auto-populate assignable fields from input upon validation of new taxonomies.
     *
     * @var bool
     */
    public $autoHydrateEntityFromInput = true;

    /**
     * Will auto-populate assignable fields from input upon validation of existing taxonomies.
     *
     * @var bool
     */
    public $forceEntityHydrationFromInput = true;

    /**
     * Validation rules.
     *
     * @var array
     */
    public static $rules = [
        'name'          => 'required|unique:taxonomies',
        'description'   => 'required'

    ];

}