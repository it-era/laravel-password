<?php

namespace ITera\LaravelPassword\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CallMakePassword extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'call:make:password';

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
        $this->line(' exitcode : ' . \Artisan::call('make:password', ['password' => 'toto']));
        $this->line(' return : ' . \Artisan::output());
    }
}
