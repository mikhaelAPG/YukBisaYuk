<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParticipateDonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('participate_donation')->insert(
            [
                'idDonation' => 1,
                'idParticipant' => 2,
                'comment' => 'Help me from Cancer'
            ]
        );
    }
}
