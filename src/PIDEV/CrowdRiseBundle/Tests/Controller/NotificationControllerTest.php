<?php

namespace PIDEV\CrowdRiseBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class NotificationControllerTest extends WebTestCase
{
    public function testCreatenotification()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/createNotification');
    }

    public function testListnotification()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/listNotification');
    }

}
