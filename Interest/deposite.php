<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 2/6/15
 * Time: 2:43 PM
 */

class Deposite {
    public $principal;
    public $interest;
    public $time;

    public function getTotalAmount(){

    $totalAmount=($this->principal*$this->interest*$this->time)/100 + $this->principal;
        return $totalAmount;
}

} 