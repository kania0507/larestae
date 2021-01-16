<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = ['name_unreg', 'email_unreg', 'phone_unreg', 'address_unreg'];
}
