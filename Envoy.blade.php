@servers(['web' => 'a02'])

@setup
    $now = new DateTime();
    $environment = isset($env) ? $env : "testing";
@endsetup

@task('deploy')
    cd /data && ls -la | grep -v '.|..' && git --version
@endtask
