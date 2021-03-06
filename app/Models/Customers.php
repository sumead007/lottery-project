<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; //ใส่ตามนี้
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Authenticatable
{
    use HasFactory;
    use AuthenticableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname',
        'lname',
        'money',
        'username',
        'password',
        'address',
        'tel',
    ];

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function bank_customer(){
        return $this->hasOne(BankCustomer::class,'id');
    }

    public function transfer_notice_(){
        return $this->hasMany(TransferNotice::class,'id');
    }


}
