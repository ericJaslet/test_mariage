<?php

namespace App\Tests\Func;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;

class ThemeFuncTest extends WebTestCase
{
    public function testGetThemes(): void
    {
        $client = self::createClient();
        $client->request(Request::METHOD_GET, '/api/themes?page=1');

        dd($client->getResponse());
    }
}