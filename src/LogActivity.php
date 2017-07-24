<?php
namespace Larakuy\LogActivity;

use Request;
use Larakuy\LogActivity\Models\LogActivity as M_LogActivity;

class LogActivity{

    protected $messages;

    public function addLog($subject){
        $log = [
            'subject'   => !empty($subject) ? $subject : NULL,
            'url'       => Request::fullUrl(),
            'method'    => Request::method(),
            'ip'        => Request::ip(),
            'agent'     => Request::header('user-agent'),
            'user_id'   => auth()->check() ? auth()->user()->id : NULL
        ];

    	M_LogActivity::create($log);

        $this->messages = "Success add to log.";

        return $this->messages;
    }

    public function listLog()
    {
    	return M_LogActivity::latest()->get();
    }
}
