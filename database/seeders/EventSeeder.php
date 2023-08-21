<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Task;
use App\Models\Expense;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
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
        $event->image_url = 'event_images/image1.jpg';
        $event->user_id = '2';
        $event->description = 'Introducing Brew Crew, the premier international craft and culture community at Brewtopia the first-ever international craft & culture festival in Thailand, where beverages, food, and music harmoniously unite.  Join us in embracing the true essence of Brewtopia as more than just a festival – it\'s a vibrant community that celebrates the love of all things brew.  Let\'s raise our glasses and be part of the legendary Brew Crew experience! ';
        $event->start_date = '2023-09-03';
        $event->end_date = '2023-09-05';
        $event->event_status = 'PUBLISHED';
        $event->save();

        $event = new Event();
        $event->title = 'LE SSERAFIM TOUR FLAME RISES IN BANGKOK';
        $event->location = 'Thunder Dome, Bangkok';
        $event->attendees_limit = '1000';
        $event->image_url = 'event_images/image2.jpg';
        $event->user_id = '2';
        $event->description = 'LE SSERAFIM TOUR FLAME RISES IN BANGKOK is a concert that will be held in Bangkok, Thailand. The concert will feature the band LE SSERAFIM, who are known for their energetic performances and catchy songs. They have been touring around Asia since 2015, and this will be their first time performing in Thailand.';
        $event->start_date = '2023-09-04';
        $event->event_status = 'PUBLISHED';
        $event->save();

        // full attended event
        $event = new Event();
        $event->title = 'THE LORD OF THE RINGS - THE FELLOWSHIP OF THE RING';
        $event->location = 'Prince Mahidol Hall, Mahidol University';
        $event->attendees_limit = '10';
        $event->image_url = 'event_images/image3.jpg';
        $event->user_id = '3';
        $event->description = 'For the first time in Thailand, prepare yourself for an extraordinary journey into the heart of Middle-earth! Join the brave hobbits from the Shire, accompanied by their valiant allies, as they strive to protect the One Ring from the clutches of the ominous Dark Lord of Mordor. Experience an immersive musical extravaganza, brought to life by the talented Thailand Philharmonic Orchestra with over 100 musicians performing on an array of rare instruments. This is complemented by a majestic choir of 150 voices, all contributing to a breathtaking symphony that spans over 3 hours (with intermissions).';
        $event->start_date = '2023-11-05';
        $event->event_status = 'PUBLISHED';
        $event->save();

        // ready events
        $event = new Event();
        $event->title = 'Tech Conference 2023';
        $event->location = 'Innovation Center, Silicon Valley';
        $event->attendees_limit = '10';
        $event->image_url = 'event_images/image4.jpg';
        $event->user_id = '3';
        $event->description = 'RCB Film Cub: Modern Art
RCB Film Club จะพาคุณเดินทางไปพบกับศิลปะสมัยใหม่และความเปลี่ยนแปลงของโลกแห่งศิลปะตั้งแต่ช่วงปลายศตวรรษที่ 19 ผ่านเรื่องราวชีวิตและผลงานของศิลปินผู้มีอิทธิพลต่อการศิลปะมากมายที่ยังคงตราตรึงมาจนถึงปัจจุบัน ไม่ว่าจะเป็น วินเซ็นต์ แวนโก๊ะ (อิมเพรสชันนิสม์), ปาโบล ปิกาโซ (ลัทธิเขียนภาพแบบเหลี่ยม), เดวิด ฮอคนีย์ (ศิลปะป๊อป) และ ยาโยอิ คุซามะ (ศิลปะแอ็บสแตรค)
RCB Film Club will take you on a journey to discover modern art, an artistic movement that emerged in the late 19th century, through the lives and works of influential artists of movement within modern art, such as Vincent Van Gogh (Impressionism), Pablo Picasso (Cubism), David Hockney (Pop Art), and Yayoi Kusama (Abstract).
Venue: RCB Forum, 2nd floor, River City Bangkok
150 THB Tickets available at https://www.ticketmelon.com/rivercitybangkok/movie-program 
FOR ENQUIRIES: rcbexhibition@rivercity.co.th    
.';
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
        $event->description = 'Step into a world where emotions and creativity intertwine, where canvases burst forth with vibrant hues, and where every stroke of a brush unveils a myriad of emotions. Welcome to the mesmerizing realm of the "Colors of Expression" art exhibition – a captivating journey through the kaleidoscope of human feelings translated onto canvas, presented with finesse and mastery.';
        $event->start_date = '2023-10-20';
        $event->end_date = '2023-10-25';
        $event->event_status = 'PUBLISHED';
        $event->save();

        $event = new Event();
        $event->title = 'Fitness Festival: Active Life';
        $event->location = 'Central Park, London';
        $event->image_url = 'event_images/image6.jpg';
        $event->attendees_limit = '50';
        $event->user_id = '1';
        $event->description = 'Fitness Festival: Active Life\' is a vibrant event celebrating wellness and physical activity. Attendees enjoy interactive workouts, expert-led sessions, and wellness workshops, fostering a community of health enthusiasts. Embrace movement, learn about holistic well-being, and discover the latest fitness trends at this dynamic festival.';
        $event->start_date = '2023-11-08';
        $event->event_status = 'PUBLISHED';
        $event->save();

        $event = new Event();
        $event->title = 'Culinary Delights: International Food Fair';
        $event->location = 'Grand Plaza, Paris';
        $event->attendees_limit = '30';
        $event->image_url = 'event_images/image7.jpg';
        $event->user_id = '1';
        $event->description = 'Siam Niramit Phuket 
World Class Culture Entertainment
Discover & Enjoy the Wonders of Thai Culture
Siam Niramit Phuket is the World Class Thai Cultural entertainment attraction. Watch Thailand\'s must-see show which has won both national and international awards. Marvel at the spectacular performances, amazing special effects, sets, and stunning costumes. Siam Niramit Phuket will give you insight into Thailand\'s vibrant history and culture. You can also enjoy the wide selection of delicious dishes and Thai street food.
Tickets: 
1. Show Only (Starts at THB 1,800):
includes: Siam Niramit Show, 100 Year Thai Village, Naga Courtyard
2. Show with Dinner (Starts at THB 2,200): 
Includes: Siam Niramit Show, 100 Year Thai Village, Naga Courtyard + Thai Street Food & International Buffet
**Please select the seating type for the Siam Niramit show (Silver, Gold, Platinum)
We also provide a Hotel/Resort Transfer service (Pick-up and Drop-off service) at THB 350 per person (same price for adult and child) - please contact:
reservationphuket@siamniramit.com
or +66 76 335000 - 1
Other Information
PHUKET ONLY - NOT IN BANGKOK
Open Daily Except Tuesdays
Gate Opens: 5:30 pm – 10:30 pm
Restaurant : 6:00 pm - 8:00 pm
Siam Niramit Show: 8:30pm – 9:50 pm
Child Height under 100cm free of charge
Child Height between 100 to 140 cm eligible for children’s rate
For Transfer Service, Please check hotel\'s list here
';
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
        $event->user_id = '1';
        $event->description = 'Vespa x CROSSPLAY 2023
การโคจรมาเจอกันของ 6 ศิลปินบนเส้นทางสายดนตรีแห่งมิตรภาพ คอนเสิร์ตคู่ 3 ครั้ง 3 คู่ กับเพลงพิเศษที่แรกที่เดียวก่อนใคร
ทุกคู่จัดเต็มให้ทุกคนได้เต็มอิ่มคูณสองตลอดคืน!


EP 1: Dept x YEW 
วันที่ 19 สิงหาคม ณ AMBASSADOR HOTEL, BANGKOK CONVENTION HALL

EP 2: Television off x LANDOKMAI
วันที่ 9 กันยายน ณ THE PEARL BANGKOK (ARI)

EP 3: Zweed n’ Roll x FREEHAND
วันที่ 7 ตุลาคม ณ SHOW DC SECRET SPACE 3FL.


เปิดขายบัตรแล้ววันนี้ที่ Ticketmelon บัตรมีจำนวนจำกัดนะ ลุย!

บัตร Regular (1 EP) ราคา 650 บาท

บัตร Package (3 EPs) ราคา 1,650 บาท

บัตร At Door (1 EP) ราคา 850 บาท

.

พิเศษ!  แอดเพื่อนในไลน์ @fungjai รับส่วนลดทันทีตั้งแต่วันนี้เป็นต้นไป

__

#CROSSPLAY2023 #Fungjai #vespathailand #vivalavespaTH #vespistiTH 

Event Organizer
';
        $event->start_date = '2023-09-23';
        $event->event_status = 'PENDING';
        $event->save();

        $event = new Event();
        $event->title = 'Fashion Show: Urban Elegance';
        $event->location = 'Metropolitan Hall, Paris';
        $event->attendees_limit = '30';
        $event->image_url = 'event_images/image9.jpg';
        $event->user_id = '2';
        $event->description = '
        Fashion Show: Urban Elegance epitomizes modern style with a sophisticated twist. This captivating event showcases a fusion of contemporary trends and timeless class, celebrating the marriage of city chic and refined elegance. Attendees are treated to a runway spectacle featuring cutting-edge designs from renowned fashion houses, highlighting urban-inspired attire that exudes grace and flair. From sleek eveningwear to chic street fashion, \'Fashion Show: Urban Elegance\' offers a glimpse into a world where cosmopolitan vibes meet graceful sophistication.
        
        Details:
        
        Date: 23 September
        Time: 7PM
        Venue: Metropolitan Hall, Paris
        Ticket Prices:
        General Admission: 1,000 Baht
        VIP Access: 1,800 Baht
        Front Row Experience: 2,500 Baht
        ';
        $event->start_date = '2023-09-05';
        $event->event_status = 'PENDING';
        $event->save();

        $event = new Event();
        $event->title = 'Tech Symposium: Future Innovations';
        $event->location = 'Tech Hub, Singapore';
        $event->attendees_limit = '30';
        $event->image_url = 'event_images/image10.jpg';
        $event->user_id = '1';
        $event->description = 'a visionary event that delves into the forefront of technological advancement. Set to take place on 9 September 2023 at Tech Hub, this symposium gathers tech enthusiasts, professionals, and pioneers to explore the next frontier of innovation. Attendees will engage with groundbreaking ideas, witness live demonstrations, and participate in enlightening discussions led by industry leaders. From AI and robotics to sustainable tech solutions, the symposium offers a glimpse into the shape of things to come. Join us at \'Tech Symposium: Future Innovations\' to be part of shaping tomorro\'s technological landscape.';
        $event->start_date = '2023-09-09';
        $event->event_status = 'PENDING';
        $event->save();

        $event = new Event();
        $event->title = 'Science Fair: Innovations Unveiled';
        $event->location = 'Science Museum, Tokyo';
        $event->attendees_limit = '20';
        $event->image_url = 'event_images/image11.jpg';
        $event->user_id = '1';
        $event->description = 'Opens the doors to a world of discovery and creativity. This engaging event is a convergence of curious minds, where innovators and attendees gather to witness the unveiling of groundbreaking concepts. From ingenious experiments to revolutionary breakthroughs, the fair showcases the diversity of scientific inquiry across various disciplines. Embark on a journey of intellectual curiosity and witness the future being shaped at the\'Science Fair: Innovations Unveiled.';
        $event->start_date = '2023-09-11';
        $event->event_status = 'DRAFTED';
        $event->save();

        // Drafted events
        $event = new Event();
        $event->title = 'Health and Wellness Expo';
        $event->location = 'Convention Center, Toronto';
        $event->attendees_limit = '50';
        $event->image_url = 'event_images/image12.png';
        $event->user_id = '1';
        $event->description = 'Join us at the Health and Wellness Expo for a transformative journey towards vitality and balance. Immerse yourself in a world of holistic well-being through expert seminars, interactive workshops, mindful movement, and holistic therapies. Explore the latest in health technology, nourishing nutrition, and self-care practices. Connect with a vibrant community of like-minded individuals and leave with practical tools to enhance your overall health and happiness. Your wellness adventure starts here!';
        $event->start_date = '2023-10-01';
        $event->end_date = '2023-10-07';
        $event->event_status = 'PENDING';
        $event->save();

        $event = new Event();
        $event->title = 'Literary Festival: Words & Imagination';
        $event->location = 'Library Hall, Dublin';
        $event->attendees_limit = '40';
        $event->image_url = 'event_images/image13.jpg';
        $event->user_id = '2';
        $event->description = 'Immerse Yourself in Creativity at the Literary Festival: Words & Imagination. Embark on a captivating literary journey at the "Words & Imagination" Literary Festival, set to take place at the esteemed Library Hall in Dublin from September 20th to 23rd, 2023. This four-day celebration of literature, ideas, and artistic expression promises to be a haven for book enthusiasts, writers, and creative minds.';
        $event->start_date = '2023-09-20';
        $event->end_date = '2023-09-23';
        $event->event_status = 'DRAFTED';
        $event->save();



        $eventImages = [
            'event_images/image14.jpg',
            'event_images/image15.png',
            'event_images/image16.png',
            'event_images/image17.jpg',
            'event_images/image18.jpg',
            'event_images/image19.png',
            'event_images/image20.jpg',
            'event_images/image21.png',
            'event_images/image22.png',
            'event_images/image23.png',
        ];
        $eventStatuses = ['DRAFTED', 'PUBLISHED', 'PENDING'];
        for ($i = 0; $i < 10; $i++) {
            $event = new Event();
            $event->title = fake()->sentence(4);
            $event->location = fake()->city() . ', ' . fake()->country();
            $event->attendees_limit = rand(20, 100);
            $event->image_url = Arr::get($eventImages, $i);
            $event->user_id = rand(1, 3);
            $event->description = fake()->paragraph(3);
            $event->start_date = now()->addDays(rand(1, 30))->format('Y-m-d');
            $event->end_date = now()->addDays(rand(31, 60))->format('Y-m-d');
            $event->event_status = Arr::random($eventStatuses);
            $event->save();
        }

        Event::factory(40)->create();
        $users = User::where('id', '>', 4)->get();
        // full attendees
        Event::where('id', '=', 3)->each(function ($event) use ($users) {
            $event->attendees()->attach(
                $users->random(10)->pluck('id')->toArray()
            );
        });
        // Test Certificate
        Event::where('id', '=', 2)->each(function ($event) use ($users) {
            $event->attendees()->attach(
                $users->where('id', '=', 1)->pluck('id')->toArray()
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
