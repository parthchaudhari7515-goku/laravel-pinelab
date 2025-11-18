<?php
namespace Vendor\Pinelab\Http;

use GuzzleHttp\Client as Guzzle;
use Vendor\Pinelab\Exceptions\PinelabException;

class Client {
    protected $guzzle;
    public function __construct(array $config=[]) {
        $this->guzzle = new Guzzle([
            'base_uri'=>$config['base_url']??null,
            'timeout'=>$config['timeout']??15,
            'headers'=>[
                'Accept'=>'application/json',
                'Authorization'=>'Bearer '.($config['api_key']??'')
            ],
        ]);
    }
    public function post(string $u,array $d=[]):array {
        try { return json_decode($this->guzzle->post($u,['json'=>$d])->getBody(),true); }
        catch(\Exception $e){ throw new PinelabException($e->getMessage()); }
    }
    public function get(string $u,array $q=[]):array {
        try { return json_decode($this->guzzle->get($u,['query'=>$q]).getBody(),true); }
        catch(\Exception $e){ throw new PinelabException($e->getMessage()); }
    }
}
