<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
	/**
	 * Table to be used
	 *
	 * @var        string
	 */
    public $table = 'tasks';

    /**
     * Fillable columns
     * @var array
     */
    protected $fillable = ['name', 'priority', 'created_at', 'updated_at'];
}
