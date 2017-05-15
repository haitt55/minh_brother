<?php
/**
 * Created by PhpStorm.
 * User: haitt
 * Date: 4/1/2017
 * Time: 4:13 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'name', 'subject', 'message', 'is_new'
    ];

    /**
     * Get the project that owns the position.
     */
    public function project()
    {
        return $this->belongsTo('App\MainProject', 'Nproject_id');
    }
}