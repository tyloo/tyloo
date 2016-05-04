<?php

namespace App\Console\Commands;

use App\Post;
use App\Work;
use Illuminate\Console\Command;
use samdark\sitemap\Sitemap;

class SitemapCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates the Sitemap';

    /**
     * @var Sitemap
     */
    protected $sitemap;

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $posts = Post::all(['slug', 'updated_at']);
        $works = Work::all(['slug', 'updated_at']);
        $this->sitemap = new Sitemap(public_path('sitemap.xml'));

        $this->comment('Starting generating the Sitemap...');

        // Home
        $this->addItem(config('app.url').'/', 0.9);
        // Resume
        $this->addItem(config('app.url').'/resume', 0.8);
        // Blog index
        $this->addItem(config('app.url').'/blog', 0.8);
        // Works index
        $this->addItem(config('app.url').'/works', 0.8);

        // @codeCoverageIgnoreStart
        // Blog posts
        foreach ($posts as $post) {
            $this->addItem(config('app.url').'/blog/'.$post->slug, 0.7);
        }
        // Works items
        foreach ($works as $work) {
            $this->addItem(config('app.url').'/works/'.$work->slug, 0.7);
        }
        // @codeCoverageIgnoreEnd

        $this->sitemap->write();

        $this->comment('Sitemap generated successfully!');
    }

    protected function addItem($url, $strength)
    {
        $this->sitemap->addItem($url, time(), Sitemap::DAILY, $strength);
        $this->info('"'.$url.'/" added to the sitemap!');
    }
}
