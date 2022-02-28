<?php

namespace App\Tests\Func;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ThemeFuncTest extends WebTestCase
{
    public function testGetThemes(): void
    {
        $client = self::createClient();
        $client->request(Request::METHOD_GET, '/api/themes?page=1');

        // dd($client->getResponse());
        $this->assertEquals('true', 'true');
        $response = $client->getResponse();
        $responseContent = $response->getContent();
        $responseDecode = json_decode($responseContent);
        self::assertEquals(Response::HTTP_OK, $response->getStatusCode());
    }
}