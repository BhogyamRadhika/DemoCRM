<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessInfoDetails extends Model
{
    use HasFactory;

    protected $table = 'business_info';
    protected $fillable = [
        'name',
        'description',
        'country',
        'state',
        'city',
        'address',
        'pincode',
        'email',
        'phone',
        'website',
        'status',
        'source',
        'opportunity',
        'industry',
        'assign_user',
        'intelligence_description',
        'remark_description',
        'remark_date',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'assign_user');
    }
}
