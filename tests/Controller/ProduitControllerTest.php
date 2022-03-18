<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProduitControllerTest extends WebTestCase
{
    public function testRoutePageAccueil(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Liste des produits');
    }
    public function testRouteListeProduits(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/produit');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Liste des produits');
    }
    public function testRouteAfficherProduit(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/produit/1');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Fiche produit : produit1');
    }
}
