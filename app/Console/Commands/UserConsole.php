<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UserConsole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'global:usercrate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create New User';

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
        //
        $name = $this->ask("Enter Name : ");
        $email = $this->ask("Enter Email : ");
        $abhyasiid = $this->ask("Enter Abhyasi Id : ");
        $password = $this->ask("Enter Password : ");

    }
}
