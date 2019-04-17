<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Mark
 *
 * @package App
 * @property string $subject
 * @property string $student
 * @property integer $mark
*/
class Mark extends Model
{
    use SoftDeletes;

    protected $fillable = ['mark', 'subject_id', 'student_id'];
    protected $hidden = [];
    
    

    /**
     * Set to null if empty
     * @param $input
     */
    public function setSubjectIdAttribute($input)
    {
        $this->attributes['subject_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setStudentIdAttribute($input)
    {
        $this->attributes['student_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setMarkAttribute($input)
    {
        $this->attributes['mark'] = $input ? $input : null;
    }
    
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id')->withTrashed();
    }
    
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id')->withTrashed();
    }
    
}
