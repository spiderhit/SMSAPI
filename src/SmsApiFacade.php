<?php
namespace spiderhit\SmsApi;
use Illuminate\Support\Facades\Facade;

class SmsApiFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'smsapi';
    }
}