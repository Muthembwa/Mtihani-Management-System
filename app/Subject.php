<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Subject
 *
 * @package App
 * @property integer $subject_code
 * @property string $subjectname
 * @property string $subject_teacher
*/
class Subject extends Model
{
    use SoftDeletes;

    protected $fillable = ['subject_code', 'subjectname', 'subject_teacher_id'];
    protected $hidden = [];
    
    

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setSubjectCodeAttribute($input)
    {
        $this->attributes['subject_code'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setSubjectTeacherIdAttribute($input)
    {
        $this->attributes['subject_teacher_id'] = $input ? $input : null;
    }
    
    public function subject_teacher()
    {
        return $this->belongsTo(User::class, 'subject_teacher_id');
    }
    
}
