<?php namespace Oyj\Student\Models;

use Model;

/**
 * Model
 */
class Student extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;
    // NO garlic

    /**
     * @var string The database table used by the model.
     */
    public $table = 'oyj_student_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public attachOne
}
