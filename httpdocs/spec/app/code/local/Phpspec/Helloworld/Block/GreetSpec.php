<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class Phpspec_Helloworld_Block_GreetSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Phpspec_Helloworld_Block_Greet');
    }

    function let(\Phpspec_Helloworld_Adapter_State $adapter)
    {
        $this->beConstructedWith(array('state_adapter' => $adapter));
    }

    function it_should_greet_non_logged_in_users_with_a_generic_message($adapter)
    {
        $adapter->getUserState()->willReturn(false);
        $this->greet()->shouldReturn('Hello guest, Please register with us for special offers');
    }

    function it_should_greet_logged_in_users_with_a_message($adapter)
    {
        $adapter->getUserState()->willReturn(true);
        $this->greet()->shouldReturn('Hello registered user');
    }
}
