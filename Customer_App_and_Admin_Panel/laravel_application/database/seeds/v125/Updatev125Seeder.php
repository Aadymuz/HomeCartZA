<?php
/*
 * File name: Updatev125Seeder.php
 * Last modified: 2022.01.05 at 22:25:54
 * Author: SmarterVision - https://codecanyon.net/user/smartervision
 * Copyright (c) 2022
 */

use Illuminate\Database\Seeder;

class Updatev125Seeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AppSettingsTableV124Seeder::class);
    }
}
