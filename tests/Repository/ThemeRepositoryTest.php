<?php

namespace App\Tests\Repository;

use App\Repository\ThemeRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ThemeRepositoryTest extends KernelTestCase
{
    public function testCount()
    {
        self::bootkernel();
        $theme = self::$container->get(ThemeRepository::class)->count([]);
        echo("theme = " . $theme);
        $this->assertEquals(1, $theme);
    }
}