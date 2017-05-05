<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password',
        'payment_first_name',
        'payment_last_name',
        'payment_company_name',
        'payment_country',
        'payment_address',
        'payment_city',
        'payment_post_code',
        'payment_phone_number',
        'payment_email',
        'recieve_first_name',
        'recieve_last_name',
        'recieve_company_name',
        'recieve_country',
        'recieve_address',
        'recieve_city',
        'recieve_post_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /**
     * Get student by email
     * 
     * @param string $email
     * @return StudentModel
     */
    public static function getByEmail($email){
        return self::where('email',$email)->first();
    }
    
    /**
     * Get student by student id
     * 
     * @param int $id
     * @return StudentModel
     */
    public function getById($id){
        return self::where('id', $id)
                ->where('del_flg', null)
                ->first();
    }
    
    /**
     * Update del_flg.
     * 
     * @param int $id
     * @return StudentModel
     */
    public function updateDelFlg($id)
    {
        return self::where('id', $id)
          ->update(['del_flg' => true]);
    }
}