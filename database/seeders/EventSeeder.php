<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Task;
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
        $event->start_date = '2023-09-03';
        $event->end_date = '2023-09-05';
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
        $event->start_date = '2023-10-04';
        $event->event_status = 'PUBLISHED';
        $event->save();


        // full attended event
        $event = new Event();
        $event->title = 'THE LORD OF THE RINGS - THE FELLOWSHIP OF THE RING';
        $event->location = 'Prince Mahidol Hall, Mahidol University';
        $event->attendees_limit = '10';
        // $event->image_url = 'https://p-u.popcdn.net/event_details/posters/000/015/721/large/a034421d54902df5c3723de0ac24bf8b8b3a6077.jpg?1690230019';
        // $imagePath = Storage::putFile('public/event_images', storage_path('app/public/image3.jpg'));
        $event->image_url = 'event_images/image3.jpg';
        $event->user_id = '3';
        $event->description = 'THE LORD OF THE RINGS - THE FELLOWSHIP OF THE RING is a concert that will be held in Bangkok, Thailand. The concert will feature the music from the film, which was composed by Howard Shore. The music is performed by a live orchestra and choir, with the film projected on a large screen behind them.';
        $event->start_date = '2023-11-05';
        $event->event_status = 'PUBLISHED';
        $event->save();


        // ready events
        $event = new Event();
        $event->title = 'Tech Conference 2023';
        $event->location = 'Innovation Center, Silicon Valley';
        $event->attendees_limit = '10';
        $event->image_url = 'event_images/image4.jpg';
        $event->user_id = '1';
        $event->description = 'Join us at the Tech Conference 2023 to explore the latest trends in technology and innovation.';
        $event->start_date = '2023-09-15';
        $event->end_date = '2023-09-17';
        $event->event_status = 'PUBLISHED';
        $event->save();

        $event = new Event();
        $event->title = 'Art Exhibition: Colors of Expression';
        $event->location = 'City Art Gallery, New York';
        $event->attendees_limit = '20';
        $event->image_url = 'event_images/image5.jpg';
        $event->user_id = '2';
        $event->description = 'Experience a visual journey of artistic expression at our exhibition showcasing a vibrant array of colors and creativity.';
        $event->start_date = '2023-10-20';
        $event->end_date = '2023-10-25';
        $event->event_status = 'PUBLISHED';
        $event->save();

        $event = new Event();
        $event->title = 'Fitness Festival: Active Life';
        $event->location = 'Central Park, London';
        $event->image_url = 'event_images/image6.jpg';
        $event->attendees_limit = '50';
        $event->user_id = '2';
        $event->description = 'Get moving and join us at the Fitness Festival for a day of wellness, workouts, and healthy living tips.';
        $event->start_date = '2023-11-08';
        $event->event_status = 'PUBLISHED';
        $event->save();

        $event = new Event();
        $event->title = 'Culinary Delights: International Food Fair';
        $event->location = 'Grand Plaza, Paris';
        $event->attendees_limit = '30';
        $event->image_url = 'event_images/image7.jpg';
        $event->user_id = '2';
        $event->description = 'Embark on a gastronomic journey around the world with a diverse selection of culinary creations at the International Food Fair.';
        $event->start_date = '2023-12-05';
        $event->end_date = '2023-12-07';
        $event->event_status = 'PUBLISHED';
        $event->save();

        // pending events
        $event = new Event();
        $event->title = 'Music Festival: Harmony Sounds';
        $event->location = 'Sunset Park, Los Angeles';
        $event->attendees_limit = '25';
        $event->image_url = 'event_images/image8.jpg';
        $event->user_id = '2';
        $event->description = 'Experience the magic of live music at the Harmony Sounds Music Festival featuring a diverse lineup of artists and genres.';
        $event->start_date = '2023-09-23';
        $event->event_status = 'PENDING';
        $event->save();

        $event = new Event();
        $event->title = 'Fashion Show: Urban Elegance';
        $event->location = 'Metropolitan Hall, Paris';
        $event->attendees_limit = '30';
        $event->image_url = 'event_images/image9.jpg';
        $event->user_id = '2';
        $event->description = 'Witness a stunning display of urban-inspired fashion at the Urban Elegance Fashion Show, where style meets sophistication.';
        $event->start_date = '2023-09-05';
        $event->event_status = 'PENDING';
        $event->save();

        $event = new Event();
        $event->title = 'Tech Symposium: Future Innovations';
        $event->location = 'Tech Hub, Singapore';
        $event->attendees_limit = '30';
        $event->image_url = 'event_images/image9.jpg';
        $event->user_id = '2';
        $event->description = 'Delve into discussions on future innovations and emerging technologies at the Tech Symposium, where experts share insights and visions.';
        $event->start_date = '2023-09-09';
        $event->event_status = 'PENDING';
        $event->save();

        $event = new Event();
        $event->title = 'Science Fair: Innovations Unveiled';
        $event->location = 'Science Museum, Tokyo';
        $event->attendees_limit = '20';
        $event->image_url = 'event_images/image10.jpg';
        $event->user_id = '2';
        $event->description = 'Explore groundbreaking scientific discoveries and innovations at the Science Fair, where knowledge meets curiosity.';
        $event->start_date = '2023-09-11';
        $event->event_status = 'PENDING';
        $event->save();

        // Drafted events
        $event = new Event();
        $event->title = 'Health and Wellness Expo';
        $event->location = 'Convention Center, Toronto';
        $event->attendees_limit = '50';
        $event->image_url = 'event_images/image11.jpg';
        $event->user_id = '2';
        $event->description = 'Discover holistic well-being at the Health and Wellness Expo, featuring expert speakers, fitness workshops, and natural products.';
        $event->start_date = '2023-10-01';
        $event->end_date = '2023-10-07';
        $event->event_status = 'DRAFTED';
        $event->save();

        $event = new Event();
        $event->title = 'Literary Festival: Words & Imagination';
        $event->location = 'Library Hall, Dublin';
        $event->attendees_limit = '40';
        $event->image_url = 'event_images/image12.jpg';
        $event->user_id = '2';
        $event->description = 'Celebrate the world of literature at the Literary Festival, where renowned authors, poets, and storytellers share their creative journeys.';
        $event->start_date = '2023-09-20';
        $event->end_date = '2023-09-23';
        $event->event_status = 'DRAFTED';
        $event->save();
        

        Event::factory(10)->create();
        $users = User::where('id', '>', 4)->get();
        // full attendees
        Event::where('id', '=', 3)->each(function ($event) use ($users) {
            $event->attendees()->attach(
                $users->random(10)->pluck('id')->toArray()
            );
        });
        //no attendees
        Event::where('id', '=', 4)->each(function ($event) use ($users) {
            $event->attendees()->detach();
        });
        // random attendees
        Event::where('id', '>', 4)->each(function ($event) use ($users) {
            $event->attendees()->attach(
                $users->random(rand(5, 15))->pluck('id')->toArray()
            );
        });


        // Event::all()->each(function ($event) {
        //     $event->expenses()->createMany([
        //         [
        //             'title' => 'Food',
        //             'amount' => 1000,
        //             'quantity' => 1,
        //             'total' => 1000,
        //             'note' => 'Food for the event',
        //             'date' => '2023-09-03',
        //             'created_by' => $event->user_id,
        //         ],
        //         [
        //             'title' => 'Venue',
        //             'amount' => 5000,
        //             'quantity' => 1,
        //             'total' => 5000,
        //             'note' => 'Venue for the event',
        //             'date' => '2023-09-03',
        //             'created_by' => $event->user_id,
        //         ],
        //         [
        //             'title' => 'Music',
        //             'amount' => 2000,
        //             'quantity' => 1,
        //             'total' => 2000,
        //             'note' => 'Music for the event',
        //             'date' => '2023-09-03',
        //             'created_by' => $event->user_id,
        //         ],
        //         [
        //             'title' => 'Props',
        //             'amount' => 35,
        //             'quantity' => 25,
        //             'total' => 875,
        //             'note' => 'Props for cheering',
        //             'date' => '2023-08-12',
        //             'created_by' => $event->user_id,
        //         ],
        //         [
        //             'title' => 'Papers and Foam',
        //             'amount' => 48,
        //             'quantity' => 10,
        //             'total' => 480,
        //             'note' => 'For crafting games',
        //             'date' => '2023-07-24',
        //             'created_by' => $event->user_id,
        //         ]
        //     ]);
       

        // $event->tasks()->createMany([
        //     [
        //         'title' => 'Craft props',
        //         'brief' => '4 staffs required',
        //         'assignee_id' => 1,
        //         'status' => 'To do',
        //         'priority' => 'Medium',
        //         'date' => '2023-09-03',
        //         'created_by' => $event->user_id,
        //     ],
        //     [
        //         'title' => 'Permissions',
        //         'brief' => 'Waiting for officer permissions',
        //         'assignee_id' => 2,
        //         'status' => 'In Progress',
        //         'priority' => 'Urgent',
        //         'date' => '2023-08-05',
        //         'created_by' => $event->user_id,
        //     ],
        //     [
        //         'title' => 'MC Works',
        //         'brief' => 'Draft the speech',
        //         'assignee_id' => 1,
        //         'status' => 'Done',
        //         'priority' => 'High',
        //         'date' => '2023-07-13',
        //         'created_by' => $event->user_id,
        //     ],
        //     [
        //         'title' => 'Rehearsal queue',
        //         'brief' => 'practice queue',
        //         'assignee_id' => 2,
        //         'status' => 'Cancelled',
        //         'priority' => 'Low',
        //         'date' => '2023-07-28',
        //         'created_by' => $event->user_id,
        //     ],
        // ]);
    //  });
    }
}
