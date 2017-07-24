<?php
namespace Larakuy\LogActivity\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LogActivity extends Model
{
    use SoftDeletes;

    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'log_activities';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'subject', 'url', 'method', 'ip', 'agent', 'user_id'
    ];
}
