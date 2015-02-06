<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 2/6/15
 * Time: 3:23 PM
 */

class Launchbill {
    public $rice;
    public $vegetables;
    public $fish;
    public $meat;
    public $vat;

    public function getGrossBill(){
        $GrossTotalBill=$this->rice*20 + $this->vegetables*30 +$this->fish*80 +$this->meat*120;
        return $GrossTotalBill;

    }
    public function getPayableBill(){
        $TotalVat=($this->vat/100 *$this->getGrossBill());
        $TotalBill=$this->getGrossBill() + $TotalVat;
        return $TotalBill;

    }


} 