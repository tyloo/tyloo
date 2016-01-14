@servers(['web' => 'tyloo@tyloo.fr'])

@task('deploy', ['on' => 'web'])
    cd /var/www/tyloo.fr
    git pull origin master
    composer install --no-dev -o
    php artisan sitemap
@endtask
