<?php
namespace Tests\AppBundle\Entity;

use AppBundle\Entity\Location;
use PHPUnit\Framework\TestCase;

class LocationTest extends TestCase
{
    public function testLatitude()
    {
        $loc = new Location();
        $loc->setLatitude(10.2);
        $result = $loc ->getLatitude();
        $this->assertEquals(10.2, $result);
    }


    public function testLongitude()
    {
        $loc = new Location();
        $loc->setLatitude(80.45);
        $result = $loc ->getLatitude();
        $this->assertEquals(80.45, $result);
    }

    public function testWebaddress()
    {
        $loc = new Location();
        $loc->setWebaddress("www.loc.com");
        $result = $loc ->getLatitude();
        $this->assertEquals("www.loc.com", $result);
    }


    public function testEmail()
    {
        $loc = new Location();
        $loc->setEmail("location.gmail.com");
        $result = $loc ->getLatitude();        
        $this->assertEquals("location.gmail.com", $result);
    }

    public function testName()
    {
        $loc = new Location();
        $loc->setName("location");
        $result = $loc ->getLatitude();
        $this->assertEquals("location", $result);
    }

}
?>