<?php

class User{
    protected $name;
    protected $lastname;
    protected $email;
    protected $payment_method;
    protected $expire_payment_method;
    protected $is_registered;
    public function __construct(String $name, String $lastname, String $email, String $payment_method,Bool $expire_payment_method, Bool $is_registered) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->payment_method = $payment_method;
        $this->expire_payment_method = $expire_payment_method;
        $this->is_registered = $is_registered;

    }
}