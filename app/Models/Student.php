<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Student extends Authenticatable
{
    use Notifiable;
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
    
    /**
     * Create student
     * 
     * @param array $data
     * @return boolean
     */
    public function createData($data)
    {
        DB::beginTransaction();
        try {
            $saved = $this->create($data);
            if ($saved) {
                DB::commit();
                return $saved;
            }
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            DB::rollback();
        }
    }
    
    /**
     * Update payment info
     * 
     * @param int $id
     * @param array $data
     * @return boolean
     */
    public function updatePayment($id, $data)
    {
        $student = $this->find($id);
        
        DB::beginTransaction();
        try {
            $student->payment_first_name   = $data['payment_first_name'];
            $student->payment_last_name    = $data['payment_last_name'];
            $student->payment_company_name = $data['payment_company_name'];
            $student->payment_country      = $data['payment_country'];
            $student->payment_address      = $data['payment_address'];
            $student->payment_city         = $data['payment_city'];
            $student->payment_post_code    = $data['payment_post_code'];
            $student->payment_phone_number = $data['payment_phone_number'];
            $student->payment_email        = $data['payment_email'];
            $saved                         = $student->save();

            if ($saved) {
                DB::commit();
                return $saved;
            }
        } catch (\Exception $e) {
            Log::info('Error update payment info of student id: ' . $id);
            DB::rollback();
        }
    }
    
    /**
     * Update recieve info
     * 
     * @param int $id
     * @param array $data
     * @return boolean
     */
    public function updateRecieve($id, $data)
    {
        $student = $this->find($id);

        DB::beginTransaction();
        try {
            $student->recieve_first_name   = $data['recieve_first_name'];
            $student->recieve_last_name    = $data['recieve_last_name'];
            $student->recieve_company_name = $data['recieve_company_name'];
            $student->recieve_country      = $data['recieve_country'];
            $student->recieve_address      = $data['recieve_address'];
            $student->recieve_city         = $data['recieve_city'];
            $student->recieve_post_code    = $data['recieve_post_code'];
            $saved                         = $student->save();

            if ($saved) {
                DB::commit();
                return $saved;
            }
        } catch (\Exception $e) {
            Log::info('Error update recieve info of student id: ' . $id);
            DB::rollback();
        }
    }
    
    /**
     * Update student info
     * 
     * @param int $id
     * @param array $data
     * @return boolean
     */
    public function updateInfo($id, $data)
    {
        $student = $this->find($id);

        DB::beginTransaction();
        try {
            $student->first_name = $data['first_name'];
            $student->last_name  = $data['last_name'];
            $student->email      = $data['email'];
            $student->password   = $data['password'] ? bcrypt($data['password']) : $student->password;
            $saved               = $student->save();

            if ($saved) {
                DB::commit();
                return $saved;
            }
        } catch (\Exception $e) {
            Log::info('Error update recieve info of student id: ' . $id);
            DB::rollback();
        }
    }
}