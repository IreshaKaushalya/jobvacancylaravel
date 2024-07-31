<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class JobApplication extends Model
{
    use HasFactory;

    use Notifiable;

    protected $fillable = [
    'first_name', 'last_name', 'email', 'job_role', 'address', 'city', 'pincod', 'date', 'status', 'upload', 'user_id'
];

}
