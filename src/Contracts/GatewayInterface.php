<?php
namespace Parth\Pinelab\Contracts;

interface GatewayInterface {
    public function createPayment(array $data): array;
    public function fetchPayment(string $paymentId): array;
    public function refundPayment(string $paymentId, array $data): array;
}
