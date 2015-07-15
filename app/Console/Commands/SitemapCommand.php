<?php

namespace App\Console\Commands;

use App\Post;
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
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $posts = $this->getPosts();
        $sitemap = new Sitemap(public_path('sitemap.xml'));

        $sitemap->addItem(config('app.url') . '/', time(), Sitemap::DAILY, 0.9);
        $sitemap->addItem(config('app.url') . '/resume', time(), Sitemap::DAILY, 0.8);
        $sitemap->addItem(config('app.url') . '/blog', time(), Sitemap::DAILY, 0.8);
        // @codeCoverageIgnoreStart
        foreach($posts['blog'] as $post) {
            $sitemap->addItem(config('app.url') . '/blog/' . $post->slug, $post->updated_at->timestamp, Sitemap::DAILY, 0.7);
        }
        // @codeCoverageIgnoreEnd
        $sitemap->addItem(config('app.url') . '/works', time(), Sitemap::DAILY, 0.8);
        // @codeCoverageIgnoreStart
        foreach($posts['work'] as $post) {
            $sitemap->addItem(config('app.url') . '/works/' . $post->slug, $post->updated_at->timestamp, Sitemap::DAILY, 0.7);
        }
        // @codeCoverageIgnoreEnd
        $sitemap->addItem(config('app.url') . '/contact', time(), Sitemap::DAILY, 0.3);

        $sitemap->write();

        $this->comment('Sitemap generated successfully!');
    }

    /**
     * @return array
     */
    public function getPosts()
    {
        $posts['blog'] = Post::where('type', 'blog')->get(['slug', 'updated_at']);
        $posts['work'] = Post::where('type', 'work')->get(['slug', 'updated_at']);

        return $posts;
    }
}
