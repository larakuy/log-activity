<?php
namespace Larakuy\LogActivity\Facades;

use Illuminate\Support\Facades\Facade;

class LogActivity extends Facade{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'logactivity';
    }
}
