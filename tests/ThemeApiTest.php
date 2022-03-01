<?php

namespace App\Tests;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use App\Entity\Theme;

use Hautelook\AliceBundle\PhpUnit\RefreshDatabaseTrait;

class ThemeApiTest extends ApiTestCase
{
    use RefreshDatabaseTrait;
    
    public function testGetCollection(): void
    {
        $response = static::createClient()->request('GET', '/api/themes');

        $this->assertResponseIsSuccessful(); // 200

        $this->assertResponseHeaderSame('content-type', 'application/ld+json; charset=utf-8');

        $this->assertJsonContains([ // contenu du json /api/...
            "@context"          => "/api/contexts/Theme",
            "@id"               => "/api/themes",
            "@type"             => "hydra:Collection",
            "hydra:member"      => [
              [
                '@id'   => '/api/themes/11',
                "@type" => "Theme"
              ]
            ],
            "hydra:totalItems"  => 10
        ]);

        $this->assertCount(10, $response->toArray()['hydra:member']);

        $this->assertMatchesResourceCollectionJsonSchema(Theme::class);
    }

    public function testCreateTheme()
    {
        $response = static::createClient()->request('POST', '/api/themes', ['json' => [
            "title"     => "api test",
            "content"   => "api test",
            "price"     => 1000,
            "nbPerson"  => 25,
            "menu"      => "string",
            "musics"    => [
                "string"
            ],
            "images"    => [
                "/api/images/11"
            ]
        ]]);

        $this->assertResponseStatusCodeSame(201);

        $this->assertResponseHeaderSame('content-type', 'application/ld+json; charset=utf-8');

        $this->assertMatchesRegularExpression('#^/api/themes/\d+$#', $response->toArray()['@id']);

        // test response
        $this->assertJsonContains([ // contenu du json response /api/...
            "@context"  => "/api/contexts/Theme",
            '@id'       => '/api/themes/21',
            "@type"     => "Theme"
        ]);



        $this->assertMatchesResourceItemJsonSchema(Theme::class);
    }
}