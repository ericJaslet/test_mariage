<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

use App\Entity\Theme;

class ThemeTest extends TestCase
{
    private Theme $theme;

    public function setUp():void
    {
        $this->theme = new Theme;
    }

    public function testIsTheme()
    {
        $this->assertInstanceOf(Theme::class, $this->theme);
    }

}
