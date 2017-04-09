<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use PDO;

class Setup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'espreso:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Guide you through the process of configuring your copy of Espreso';

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
        echo "      :::::::::: ::::::::  :::::::::  :::::::::  :::::::::: ::::::::   :::::::: \n";
        echo "     :+:       :+:    :+: :+:    :+: :+:    :+: :+:       :+:    :+: :+:    :+: \n";
        echo "    +:+       +:+        +:+    +:+ +:+    +:+ +:+       +:+        +:+    +:+  \n";
        echo "   +#++:++#  +#++:++#++ +#++:++#+  +#++:++#:  +#++:++#  +#++:++#++ +#+    +:+   \n";
        echo "  +#+              +#+ +#+        +#+    +#+ +#+              +#+ +#+    +#+    \n";
        echo " #+#       #+#    #+# #+#        #+#    #+# #+#       #+#    #+# #+#    #+#     \n";
        echo "########## ########  ###        ###    ### ########## ########   ########       \n";
        echo "Housekeeping - " . config('app.version') . "\n\n";

        $this->comment('Welcome to the Espreso Housekeeping setup command');
        $this->comment('This little command will guide you through the configuration of your copy of Espreso and will prompt you to create the first Super User');

        if($this->confirm('Do you want to continue the setup process?'))
        {
            echo "\n\n";
            sleep(1);
            $this->comment('First step - SETUP DATABASE');
            $db_host = $this->ask('Database host? Can take the form of an IP address, FQDN, host alias...');
            $db_port = $this->ask('MySQL server port? If you don\'t know, type 3306');
            $db_user = $this->ask('Database user?');
            $db_password = $this->ask('Database password?');
            $db_name = $this->ask('Database name?');

            try
            {
                $test_db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
            }
            catch(\PDOException $e)
            {
                $this->error('[ERROR] An error occured while configuring the database:');
                $this->error($e->getMessage());
                exit();
            }

            $this->comment('[SUCCESS] Database connection has been established successfully...');
            sleep(1);

            $this->comment('[INFO] Creating new .env file in Espreso storage...');
            Storage::put('.env', 'APP_ENV=production');
            $this->comment('[INFO] Generating Espreso encryption key for password hashing...');

            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < 32; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            Storage::append('.env', 'APP_KEY=' . $randomString);

            $this->comment('[INFO] Setting Espreso debug mode to false...');
            Storage::append('.env', 'APP_DEBUG=false');

            $this->comment('[INFO] Setting Espreso logging level to debug...');
            Storage::append('.env', 'APP_LOG_LEVEL=debug');

            $app_url = $this->ask('Espreso URL? Enter the fully qualified domain name (FQDN) that will house your installation of Espreso');
            Storage::append('.env', 'APP_URL=' . $app_url);
            Storage::append('.env', '');

            $this->comment('[DATABASE] Setting database driver to mysql...');
            Storage::append('.env', 'DB_CONNECTION=mysql');

            $this->comment('[INFO] Appending all database credentials to .env file...');
            Storage::append('.env', 'DB_HOST=' . $db_host);
            Storage::append('.env', 'DB_PORT=' . $db_port);
            Storage::append('.env', 'DB_DATABASE=' . $db_name);
            Storage::append('.env', 'DB_USERNAME=' . $db_user);
            Storage::append('.env', 'DB_PASSWORD=' . $db_password);
            Storage::append('.env', '');

            $this->comment('[DRIVERS] Setting broadcast to log...');
            Storage::append('.env', 'BROADCAST_DRIVER=log');
            $this->comment('[DRIVERS] Setting cache to file...');
            Storage::append('.env', 'CACHE_DRIVER=file');
            $this->comment('[DRIVERS] Setting session to file...');
            Storage::append('.env', 'SESSION_DRIVER=file');
            $this->comment('[DRIVERS] Setting queueing to sync...');
            Storage::append('.env', 'QUEUE_DRIVER=sync');
        }

        return true;
    }
}
