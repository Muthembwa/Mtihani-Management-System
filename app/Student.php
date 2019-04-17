<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Student
 *
 * @package App
 * @property integer $adm_no
 * @property string $student_name
 * @property string $parents_name
 * @property string $parents_email
 * @property integer $parents_phone_no
 * @property string $class_name
*/
class Student extends Model
{
    use SoftDeletes;

    protected $fillable = ['adm_no', 'student_name', 'parents_name', 'parents_email', 'parents_phone_no', 'class_name_id'];
    protected $hidden = [];
    
    

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setAdmNoAttribute($input)
    {
        $this->attributes['adm_no'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setParentsPhoneNoAttribute($input)
    {
        $this->attributes['parents_phone_no'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setClassNameIdAttribute($input)
    {
        $this->attributes['class_name_id'] = $input ? $input : null;
    }
    
    public function class_name()
    {
        return $this->belongsTo(Stream::class, 'class_name_id')->withTrashed();
    }
    
}
