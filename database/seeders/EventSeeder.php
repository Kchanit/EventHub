<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Expense;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

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
        $event->attendees_limit = '100';
        // $event->image_url = 'https://s3-ap-southeast-1.amazonaws.com/tm-img-poster-event/586d3de00b4411ee911101117567899b.png?format=basic&resize=w425,h610';
        // $imagePath = Storage::putFile('public/event_images', storage_path('app/public/image1.png'));
        $event->image_url = 'event_images/image1.png';
        $event->user_id = '1';
        $event->description = 'Brewtopia Bangkok 2023 is a beer festival that will be held in Bangkok, Thailand. The festival will feature more than 100 beers from around the world, including local craft beers and international brands. There will also be food stalls, live music, and other entertainment.';
        $event->date = '2023-09-03';
        $event->event_status = 'PUBLISHED';
        $event->save();

        $event = new Event();
        $event->title = 'LE SSERAFIM TOUR FLAME RISES IN BANGKOK';
        $event->location = 'Thunder Dome, Bangkok';
        $event->attendees_limit = '1000';
        // $event->image_url = 'https://p-u.popcdn.net/event_details/posters/000/015/695/large/2f4b41db65c10947730f2a64eb916bfd4b6230a8.png?1689753720';
        // $imagePath = Storage::putFile('public/event_images', storage_path('app/public/image2.png'));
        $event->image_url = 'event_images/image2.png';
        $event->user_id = '2';
        $event->description = 'LE SSERAFIM TOUR FLAME RISES IN BANGKOK is a concert that will be held in Bangkok, Thailand. The concert will feature the band LE SSERAFIM, who are known for their energetic performances and catchy songs. They have been touring around Asia since 2015, and this will be their first time performing in Thailand.';
        $event->date = '2023-10-04';
        $event->event_status = 'PUBLISHED';
        $event->save();

        $event = new Event();
        $event->title = 'THE LORD OF THE RINGS - THE FELLOWSHIP OF THE RING';
        $event->location = 'Prince Mahidol Hall, Mahidol University';
        $event->attendees_limit = '10';
        // $event->image_url = 'https://p-u.popcdn.net/event_details/posters/000/015/721/large/a034421d54902df5c3723de0ac24bf8b8b3a6077.jpg?1690230019';
        // $imagePath = Storage::putFile('public/event_images', storage_path('app/public/image3.jpg'));
        $event->image_url = 'event_images/image3.jpg';
        $event->user_id = '3';
        $event->description = 'THE LORD OF THE RINGS - THE FELLOWSHIP OF THE RING is a concert that will be held in Bangkok, Thailand. The concert will feature the music from the film, which was composed by Howard Shore. The music is performed by a live orchestra and choir, with the film projected on a large screen behind them.';
        $event->date = '2023-11-05';
        $event->event_status = 'PUBLISHED';
        $event->save();

        Event::factory(10)->create();
        $users = User::where('id', '>', 4)->get();
        Event::where('id', '=', 3)->each(function ($event) use ($users) {
            $event->attendees()->attach(
                $users->random(10)->pluck('id')->toArray()
            );
        });
        Event::where('id', '>', 3)->each(function ($event) use ($users) {
            $event->attendees()->attach(
                $users->random(rand(5, 15))->pluck('id')->toArray()
            );
        });

        Event::all()->each(function ($event) {
            $event->expenses()->createMany([
                [
                    'title' => 'Food',
                    'amount' => 1000,
                    'quantity' => 1,
                    'total' => 1000,
                    'note' => 'Food for the event',
                    'date' => '2023-09-03',
                    'created_by' => $event->user_id,
                ],
                [
                    'title' => 'Venue',
                    'amount' => 5000,
                    'quantity' => 1,
                    'total' => 5000,
                    'note' => 'Venue for the event',
                    'date' => '2023-09-03',
                    'created_by' => $event->user_id,
                ],
                [
                    'title' => 'Music',
                    'amount' => 2000,
                    'quantity' => 1,
                    'total' => 2000,
                    'note' => 'Music for the event',
                    'date' => '2023-09-03',
                    'created_by' => $event->user_id,
                ],
            ]);
        });
    }
}
