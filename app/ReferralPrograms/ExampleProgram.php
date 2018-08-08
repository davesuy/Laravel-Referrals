<?php

namespace App\ReferralPrograms;

use Pdazcom\Referrals\Programs\AbstractProgram;

class ExampleProgram extends AbstractProgram {

    const ROYALTY_PERCENT = 30;

    /**
    *   It can be anything that will allow you to calculate the reward.   
    * 
    *   @param $rewardObject
    */
    public function reward($rewardObject)
    {
        $this->recruitUser->balance = $this->recruitUser->balance + $rewardObject * (self::ROYALTY_PERCENT/100);
        $this->recruitUser->save();

        //echo $this->recruitUser;
    }

}