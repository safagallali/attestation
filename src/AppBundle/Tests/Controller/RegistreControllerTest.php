<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RegistreControllerTest extends WebTestCase
{
    public function testRegistre()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/registre');
    }

}
