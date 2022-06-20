<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userdetail extends Model
{
    use HasFactory;
    protected $table = 'user_details';
    protected $fillable = [
        'user_id','prefix','email','password','suffix','image','address','education','license','counseling','offerings','Offering_now','description','images','events','event_description','event_image','availability','internships','intern_hours','exam_study_group',
    ];

    public function users() {
    return $this->belongsTo(User::class);
    }

}
