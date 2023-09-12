<?php

namespace App\Tests;

use App\Entity\Visite;
use PHPUnit\Framework\TestCase;

class VisiteTest extends TestCase
{
    public function testSomething(): void
    {
        $this->assertTrue(true);
    }

    public function testGetDatecreationString() {
        $visite = new Visite();
        $visite->setDatecreation(new \DateTime("2022-04-14"));
        $this->assertEquals("14/04/2022", $visite->getDatecreationString());
    }
}
