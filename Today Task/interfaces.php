<?php

//interface

interface PaymentInterface
{
    public function paymentProcess();
}

interface LoginInterface
{
    public function loginFirst();
}

class Paypal implements PaymentInterface, LoginInterface
{
    public function loginFirst()
    {
    }
    public function payNow()
    {
    }
    public function paymentProcess()
    {
        $this->loginFirst();
        $this->payNow();
    }
}

class Visa implements PaymentInterface
{
    public function payNow()
    {
    }
    public function paymentProcess()
    {
        $this->payNow();
    }
}

class Cash implements PaymentInterface
{
    public function payNow()
    {
    }
    public function paymentProcess()
    {
        $this->payNow();
    }
}

class BuyProduct
{
    public function Pay(PaymentInterface $paymentType)
    {
        $paymentType->paymentProcess();
    }
}

$paymentType = new Cash();
$buyProduct = new BuyProduct();
$buyProduct->Pay($paymentType);
