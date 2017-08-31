<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostControllerTest extends WebTestCase
{
    public function testDetails()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/post/{id}');
    }

}
