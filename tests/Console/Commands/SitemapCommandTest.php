<?php

namespace App\Tests\Console\Commands;

use App\Tests\AbstractTestCase;
use DOMDocument;
use Illuminate\Support\Facades\Artisan;
use Mockery;

class SitemapCommandTest extends AbstractTestCase
{
    public function tearDown()
    {
        Mockery::close();
    }

    /** @test */
    public function it_can_generate_a_sitemap()
    {
        // Given
        $mock = Mockery::mock('\App\Console\Commands\SitemapCommand[getPosts, handle]')->makePartial();

        Artisan::call('sitemap');

        // When

        // Then
    }

    public function testWritingFile()
    {
        $fileName = public_path('sitemap.xml');
        $this->assertTrue(file_exists($fileName));
        $this->assertIsValidSitemap($fileName);
        unlink($fileName);
    }

    protected function assertIsValidSitemap($fileName)
    {
        $xml = new DOMDocument();
        $xml->load($fileName);
        $this->assertTrue($xml->schemaValidate(__DIR__.'/sitemap.xsd'));
    }
}
