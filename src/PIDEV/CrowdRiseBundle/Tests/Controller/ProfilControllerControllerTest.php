<?php

namespace PIDEV\CrowdRiseBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProfilControllerControllerTest extends WebTestCase
{
    public function testAffiche()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/afficheProfil');
    }

}
