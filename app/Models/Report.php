<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable =     [
        'rep_passport_no',
        'rep_registration_date',
        'rep_result_date',
        'rep_acc_no',
        'rep_sample_type',
        'rep_result',
        'rep_result_ar',
        'rep_verified_by',
        'rep_image',
        'rep_lab_director',
        'rep_reviewed_by',
        ];
}
