<?php

namespace ITera\LaravelPassword\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class MakePassword extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:password 
        {password? : The password to encrypt (if you don\'t want the password to appear in the bash history, keep empty, an interactive shell will pop up.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Encrypt a given phrase / password';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if ($this->argument('password')) {
            $password = $this->argument('password');
        } else {
            $password = $this->secret('Password / phrase to encrypt ');
        }

        if ($this->option('verbose')) {
            $this->line('Before encryption : "' . $password . '"');
            $this->line('After encryption : "' . Hash::make($password) . '"');
        } else {
            $this->line(Hash::make($password));
        }

        return Hash::make($password);
    }
}
