<?php
class Phpspec_Helloworld_Adapter_State
{
    public function getUserState()
    {
        if(Mage::getSingleton('customer/session')->IsLoggedIn()){
            return true;
        } else {
            return false;
        }
    }
}
