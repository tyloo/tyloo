@servers(['web' => 'tyloo@tyloo.fr'])

@task('deploy', ['on' => 'web'])
    cd /var/www/tyloo.fr
    git pull origin master
    composer install
    php artisan sitemap
@endtask
