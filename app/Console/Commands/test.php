<?php

namespace App\Console\Commands;

use App\Models\User;
use Flasher\Prime\Translation\Messages;
use Illuminate\Console\Command;

class test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
       $users= User::pluke('name')->toArray();
       foreach($users as $user){
          print_r(($user));
       }
    }
}
