<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DengueInfoApplication extends Model
{
    use HasFactory;

    protected $fillable =['name','lName','deaths','recovered','month'];
}
