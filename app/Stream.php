<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Stream
 *
 * @package App
 * @property string $class_name
 * @property string $class_teacher
*/
class Stream extends Model
{
    use SoftDeletes;

    protected $fillable = ['class_name', 'class_teacher_id'];
    protected $hidden = [];
    
     

    /**
     * Set to null if empty
     * @param $input
     */
    public function setClassTeacherIdAttribute($input)
    {
        $this->attributes['class_teacher_id'] = $input ? $input : null;
    }
    
    public function class_teacher()
    {
        return $this->belongsTo(User::class, 'class_teacher_id');
    }
    
}
