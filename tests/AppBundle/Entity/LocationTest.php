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
        // assert that your calculator added the numbers correctly!
        $this->assertEquals(10.2, $result);
    }
}
?>