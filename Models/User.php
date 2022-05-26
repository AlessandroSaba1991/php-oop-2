<?php
class User{
    public $name;
    public $lastname;
    public $email;
    public $payment_method_avaible;
    public $expire_payment_method_month;
    public $expire_payment_method_year;
    public $is_registered;

    /**
     * @param expire_payment_method_month - MESE SCRITTO IN LETTERE
     * 
     */
    public function __construct(String $name, String $lastname, String $email,String $expire_payment_method_month,Int $expire_payment_method_year, Bool $is_registered) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->expire_payment_method_month = $expire_payment_method_month;
        $this->expire_payment_method_year = $expire_payment_method_year;
        $this->is_registered = $is_registered;
    }
    public function checkPayment()
    {
        $today = strtotime("now");
        $expire = strtotime("31 $this->expire_payment_method_month $this->expire_payment_method_year");
        if($expire>$today){
            $this->payment_method_avaible=true;
            echo "Expired: $this->expire_payment_method_month/$this->expire_payment_method_year.It's Regular Method";
        } else {
            $this->payment_method_avaible=false;
            echo "Expired: $this->expire_payment_method_month/$this->expire_payment_method_year. Payment Expired";
        }

    }
}