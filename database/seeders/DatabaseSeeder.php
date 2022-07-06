<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('logs')->insert([
            'params' => '{"mobileMode": true, "toSearch":{"url":"example.com","name":"Example"},"geolocation":{"display":"United Kingdom","language":{"lang":"en-GB", "accept-language":"en-GB,en-US;q=0.8,en;q=0.6"},"timezone":0,"mobile":{"android":50,"ios":50},"countryCode":"gb","region":"all","city":"all"}}',
            'position' => 1,
            'ended_at' => now(),
            'ended_at_date' => Carbon::create('01-01-2018')
        ]);

        DB::table('logs')->insert([
            'params' => '{"mobileMode": true, "toSearch":{"url":"example2.com","name":"Example"},"geolocation":{"display":"Belgium","language":{"lang":"en-GB", "accept-language":"en-GB,en-US;q=0.8,en;q=0.6"},"timezone":0,"mobile":{"android":50,"ios":50},"countryCode":"gb","region":"all","city":"all"}}',
            'position' => 1,
            'ended_at' => now(),
            'ended_at_date' => Carbon::create('01-01-2018')
        ]);

        DB::table('logs')->insert([
            'params' => '{"mobileMode": true, "toSearch":{"url":"example3.com","name":"Example"},"geolocation":{"display":"United Kingdom","language":{"lang":"en-GB", "accept-language":"en-GB,en-US;q=0.8,en;q=0.6"},"timezone":0,"mobile":{"android":50,"ios":50},"countryCode":"gb","region":"all","city":"all"}}',
            'position' => 1,
            'ended_at' => now(),
            'ended_at_date' => Carbon::create('01-01-2018')
        ]);

        DB::table('logs')->insert([
            'params' => '{"mobileMode": true, "toSearch":{"url":"example4.com","name":"Example"},"geolocation":{"display":"United Kingdom","language":{"lang":"en-GB", "accept-language":"en-GB,en-US;q=0.8,en;q=0.6"},"timezone":0,"mobile":{"android":50,"ios":50},"countryCode":"gb","region":"all","city":"all"}}',
            'position' => 1,
            'ended_at' => now(),
            'ended_at_date' => Carbon::create('01-02-2018')
        ]);

        DB::table('logs')->insert([
            'params' => '{"mobileMode": true, "toSearch":{"url":"example5.com","name":"Example"},"geolocation":{"display":"Belgium","language":{"lang":"en-GB", "accept-language":"en-GB,en-US;q=0.8,en;q=0.6"},"timezone":0,"mobile":{"android":50,"ios":50},"countryCode":"gb","region":"all","city":"all"}}',
            'position' => 1,
            'ended_at' => now(),
            'ended_at_date' => Carbon::create('04-04-2021')
        ]);

        DB::table('logs')->insert([
            'params' => '{"mobileMode": true, "toSearch":{"url":"example6.com","name":"Example"},"geolocation":{"display":"China","language":{"lang":"en-GB", "accept-language":"en-GB,en-US;q=0.8,en;q=0.6"},"timezone":0,"mobile":{"android":50,"ios":50},"countryCode":"gb","region":"all","city":"all"}}',
            'position' => 1,
            'ended_at' => now(),
            'ended_at_date' => Carbon::create('01-01-2021')
        ]);
    }
}
