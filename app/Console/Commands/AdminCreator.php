<?php

namespace App\Console\Commands;

use App\Models\Admin;
use Illuminate\Console\Command;

class AdminCreator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create a admin account.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        while (! $email = $this->ask('email')) {
            if ($email) break;
        }

        while ($password = $this->secret('password')) {
            if ($password) break;
        }

        if (Admin::where(['email' => $email])->exists()) {
            return $this->error('account: ' . $email . ' exists.');
        }

        $admin = Admin::create([
            'email' => $email, 'name' => '圆堂地产-' . mt_rand(1000, 9999), 'password' => bcrypt($password)
        ]);

        $this->info('Done! ');
    }
}
