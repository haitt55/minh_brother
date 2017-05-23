<?php
/**
 * Created by PhpStorm.
 * User: haitt
 * Date: 4/1/2017
 * Time: 4:13 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RateComment extends Model
{
    protected $table = 'rate_comments';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'name', 'comment', 'rate_number', 'product_id', 'type', 'admin_checked', 'admin_reply'
    ];
}