<?php

namespace App\Tests\Repository;

use App\Repository\ThemeRepository;
use App\Entity\Theme;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ThemeRepositoryTest extends KernelTestCase
{
    private $entityManager;

    protected function setUp(): void
    {
        $kernel = self::bootKernel();

        $this->entityManager = $kernel->getContainer()
            ->get('doctrine')
            ->getManager();
    }

    public function testCount()
    {

        $theme = $this->entityManager
            ->getRepository(Theme::class)
            ->count([]);

        $this->assertEquals(10, $theme);
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        // doing this is recommended to avoid memory leaks
        $this->entityManager->close();
        $this->entityManager = null;
    }
}