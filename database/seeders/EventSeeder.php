<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $event = new Event();
        $event->title = 'Brewtopia Bangkok 2023';
        $event->location = 'Sermsuk Warehouse, Bangkok';
        $event->participants = '100';
        $event->image_url = 'https://s3-ap-southeast-1.amazonaws.com/tm-img-poster-event/586d3de00b4411ee911101117567899b.png?format=basic&resize=w425,h610';
        $event->user_id = '2';
        $event->save();

        $event = new Event();
        $event->title = 'LE SSERAFIM TOUR FLAME RISES IN BANGKOK';
        $event->location = 'Thunder Dome, Bangkok';
        $event->participants = '1000';
        $event->image_url = 'https://p-u.popcdn.net/event_details/posters/000/015/695/large/2f4b41db65c10947730f2a64eb916bfd4b6230a8.png?1689753720';
        $event->user_id = '2';
        $event->save();

        $event = new Event();
        $event->title = 'THE LORD OF THE RINGS - THE FELLOWSHIP OF THE RING';
        $event->location = 'Prince Mahidol Hall, Mahidol University';
        $event->participants = '200';
        $event->image_url = 'https://p-u.popcdn.net/event_details/posters/000/015/721/large/a034421d54902df5c3723de0ac24bf8b8b3a6077.jpg?1690230019';
        $event->user_id = '3';
        $event->save();
    }
}
