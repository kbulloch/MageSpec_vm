<?php

class Phpspec_Helloworld_Block_Greet extends Mage_Core_Block_Abstract
{
    private $_stateAdapter;

    /**
     * @param array $services
     */

    public function __construct(array $services = array())
    {
        if (isset($services['state_adapter'])) {
            $this->_stateAdapter = $services['state_adapter'];
        }
        if (!$this->_stateAdapter instanceof Phpspec_Helloworld_Adapter_State) {
            $this->_stateAdapter = new Phpspec_Helloworld_Adapter_State();
        }
    }

    public function greet()
    {
        $state = $this->_stateAdapter;

        if ($state->getUserState()) {
            return 'Hello registered user';
        } else {
            return 'Hello guest, Please register with us for special offers';
        }
    }
}
