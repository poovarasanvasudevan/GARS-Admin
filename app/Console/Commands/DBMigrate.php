<?php

namespace App\Console\Commands;

use App\Location;
use App\User;
use DB;
use Illuminate\Console\Command;

class DBMigrate extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'global:migrate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrate from existing db to new Postgres DB';


    private $connection = null;

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

        $locationCount = 0;
        $userCount = 0;
        $artefacttypeCount = 0;


        $this->info("Fetching Location Table...");

        $location = DB::connection("mysql")->select("Select * from archivelocation");
        foreach ($location as $loc) {
            $location = new Location();
            $location->code = $loc->Code;
            $location->description = $loc->Description;
            if ($location->save()) {
                $locationCount++;
            }
        }

        $this->info($locationCount . " Location Records migrated");


        //=======================================================================

        $this->info("Fetching Users Table...");
        $users = DB::connection("mysql")->select("Select * from user");
        foreach ($users as $u) {
            $us = new User();
            $us->location = $u->LocationFk;
            $us->firstname = $u->FirstName;
            $us->middlename = $u->MiddleName;
            $us->lastname = $u->LastName;
            $us->abhyasiid = $u->AbhyasiID;
            $us->email = $u->EmailId;
            $us->password = md5($u->Password);

            if ($us->save()) {
                $userCount++;
            }
        }
    }
}
