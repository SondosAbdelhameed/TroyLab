<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class School extends Model
{
    use HasFactory ,SoftDeletes;

    protected $appends = [
        'student_no',
        'school_status',
        'login_access_status',
    ];

    protected $fillable = [
        'status',
        'user_id',
    ];

    protected $hidden = [
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    public function scopeWhenSearch($query,$search){
        return $query->when($search,function($q)use($search){
            return $q->where('name','like',"%$search%");
        });
    }

    public function getStudentNoAttribute($value) {
       return $this->students()->count();
    }

    public function getSchoolStatusAttribute($value) {
      if($this->status == 1) return 'active';
      else return 'inactive';
    }

    public function getLoginAccessStatusAttribute($value) {
      if($this->user_id == null) return 'No';
      else return 'Yes';
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
