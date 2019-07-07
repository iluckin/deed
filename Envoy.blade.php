@servers(['web' => 'a02'])

@setup
    $now = new DateTime();
    $environment = isset($env) ? $env : "testing";
@endsetup

@task('deploy')
    cd /data/sites/deed
    git pull
    composer install --no-dev
@endtask
