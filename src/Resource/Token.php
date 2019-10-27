<?php

namespace Paymongo\Resource;

class Token extends Resource
{
    public $number;

    public $exp_month;

    public $exp_year;

    public $cvc;

    public $billing_address_line1;

    public $billing_address_line2;
}