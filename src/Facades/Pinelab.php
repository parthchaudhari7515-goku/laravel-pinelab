<?php
namespace Parth\Pinelab\Facades;
use Illuminate\Support\Facades\Facade;

class Pinelab extends Facade {
    protected static function getFacadeAccessor() {
        return \Parth\Pinelab\Services\GatewayService::class;
    }
}
