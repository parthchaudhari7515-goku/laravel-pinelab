<?php
namespace Vendor\Pinelab\Facades;
use Illuminate\Support\Facades\Facade;

class Pinelab extends Facade {
    protected static function getFacadeAccessor() {
        return \Vendor\Pinelab\Services\GatewayService::class;
    }
}
