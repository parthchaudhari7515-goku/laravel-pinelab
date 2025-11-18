<?php
namespace Vendor\Pinelab\Services;

use Vendor\Pinelab\Contracts\GatewayInterface;
use Vendor\Pinelab\Http\Client;
use Vendor\Pinelab\Exceptions\PinelabException;

class GatewayService implements GatewayInterface {
    protected $http;
    public function __construct(array $c=[]) { $this->http=new Client($c); }
    public function createPayment(array $d):array {
        if(empty($d['amount'])||empty($d['currency'])||empty($d['customer']))
            throw new PinelabException('Missing fields');
        return $this->http->post('/payments',$d);
    }
    public function fetchPayment(string $id):array {
        return $this->http->get("/payments/$id");
    }
    public function refundPayment(string $id,array $d):array {
        return $this->http->post("/payments/$id/refunds",$d);
    }
}
