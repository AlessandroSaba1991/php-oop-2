<?php
class User{
    protected $name;
    protected $lastname;
    protected $email;
    protected $payment_method;
    public $expire_payment_method;
    public $is_registered;

    /**
     * @param expire_payment_method_month - MESE SCRITTO IN LETTERE
     * 
     */
    public function __construct(String $name, String $lastname, String $email, String $payment_method,String $expire_payment_method_month,Int $expire_payment_method_year, Bool $is_registered) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->payment_method = $payment_method;
        $this->expire_payment_method_month = $expire_payment_method_month;
        $this->expire_payment_method_year = $expire_payment_method_year;
        $this->is_registered = $is_registered;
    }
    public function checkPayment()
    {
        $today = strtotime("now");
        $expire = strtotime("31 $this->expire_payment_method_month $this->expire_payment_method_year");
        if($expire>$today){
            echo "Regular Payment";
        } else {
            echo "Payment Expired";
        }

    }
}