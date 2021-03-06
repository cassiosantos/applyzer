<?php
namespace Sergiors\Applyzer;

use Sergiors\Applyzer\Applyzer;
use Sergiors\Applyzer\User;

class ApplyzerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnNameChanged()
    {
        $user = new User();
        $data = [
            'name' => 'James'
        ];
        
        $applyzer = new Applyzer();
        $user = $applyzer->apply($data, $user);
        
        $this->assertEquals('James', $user->getName());
    }
    
    /**
     * @test
     */
    public function shouldReturnLastNameChanged()
    {
        $user = new User();
        $data = [
            'last_name' => 'Jackson'
        ];
        
        $applyzer = new Applyzer();
        $user = $applyzer->apply($data, $user);
        
        $this->assertEquals('Jackson', $user->getLastName());
    }
    
}
