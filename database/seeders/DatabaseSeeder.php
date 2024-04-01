<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EventCategorie;
use Carbon\Carbon;
use App\Models\Event;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\User::factory(10)->create();
        // \App\Models\Event::factory(10)->create();
        // \App\Models\Attendee::factory(10)->create();
        // \App\Models\EventCategorie::factory(10)->create();
        $categories = [
            [
                'CategoryName' => 'Business & Seminars',
                'CategoryDescription' => 'Events related to business seminars and conferences.',
                'CategoryImage' => 'business.jpg', // Assuming you have image file names stored in your public directory
                'CategoryStatus' => 'active', // Assuming you have a status field that can be 'active' or 'inactive'
            ],
            [
                'CategoryName' => 'Food & Drink',
                'CategoryDescription' => 'Events related to food and drink festivals, tastings, etc.',
                'CategoryImage' => 'food.jpg',
                'CategoryStatus' => 'active',
            ],
            [
                'CategoryName' => 'Music & Concerts',
                'CategoryDescription' => 'Events related to music concerts, festivals, etc.',
                'CategoryImage' => 'music.jpg',
                'CategoryStatus' => 'active',
            ],
            [
                'CategoryName' => 'Sports & Fitness',
                'CategoryDescription' => 'Events related to sports competitions, fitness workshops, etc.',
                'CategoryImage' => 'sports.jpg',
                'CategoryStatus' => 'active',
            ],
            [
                'CategoryName' => 'Science & Tech',
                'CategoryDescription' => 'Events related to science and technology conferences, workshops, etc.',
                'CategoryImage' => 'tech.jpg',
                'CategoryStatus' => 'active',
            ],
            [
                'CategoryName' => 'Travel & Trekking',
                'CategoryDescription' => 'Events related to travel destinations, trekking adventures, etc.',
                'CategoryImage' => 'travel.jpg',
                'CategoryStatus' => 'active',
            ],
            [
                'CategoryName' => 'Charity & Non-profit',
                'CategoryDescription' => 'Events related to charity and non-profit fundraisers, awareness programs, etc.',
                'CategoryImage' => 'charity.jpg',
                'CategoryStatus' => 'active',
            ],
            [
                'CategoryName' => 'Education & Classes',
                'CategoryDescription' => 'Events related to educational seminars, workshops, classes, etc.',
                'CategoryImage' => 'education.jpg',
                'CategoryStatus' => 'active',
            ],
            [
                'CategoryName' => 'Yoga & Health',
                'CategoryDescription' => 'Events related to yoga retreats, health and wellness workshops, etc.',
                'CategoryImage' => 'yoga.jpg',
                'CategoryStatus' => 'active',
            ],
        ];
        $events = [
            // Business & Seminars
            [
                'Title' => 'Business Conference 2024',
                'Description' => 'A conference for entrepreneurs and business professionals.',
                'Category' => 'Business & Seminars',
                'Location' => 'New York, USA',
                'StartDateTime' => Carbon::parse('2024-05-15 09:00:00'),
                'EndDateTime' => Carbon::parse('2024-05-16 17:00:00'),
                'MaxAttendees' => 200,
                'RegistrationDeadline' => Carbon::parse('2024-05-10 23:59:59'),
                'RegistrationFee' => 100.00,
                'Status' => 'published',
            ],
            // Food & Drink
            [
                'Title' => 'Food Festival 2024',
                'Description' => 'A festival celebrating various cuisines and culinary delights.',
                'Category' => 'Food & Drink',
                'Location' => 'Paris, France',
                'StartDateTime' => Carbon::parse('2024-06-20 10:00:00'),
                'EndDateTime' => Carbon::parse('2024-06-22 22:00:00'),
                'MaxAttendees' => 500,
                'RegistrationDeadline' => Carbon::parse('2024-06-15 23:59:59'),
                'RegistrationFee' => 50.00,
                'Status' => 'published',
            ],
            // Music & Concerts
            [
                'Title' => 'Rock Concert 2024',
                'Description' => 'A rock concert featuring top bands from around the world.',
                'Category' => 'Music & Concerts',
                'Location' => 'London, UK',
                'StartDateTime' => Carbon::parse('2024-07-10 18:00:00'),
                'EndDateTime' => Carbon::parse('2024-07-10 23:00:00'),
                'MaxAttendees' => 1000,
                'RegistrationDeadline' => Carbon::parse('2024-07-05 23:59:59'),
                'RegistrationFee' => 75.00,
                'Status' => 'published',
            ],
            // Sports & Fitness
            [
                'Title' => 'Marathon Race 2024',
                'Description' => 'A marathon race for fitness enthusiasts and athletes.',
                'Category' => 'Sports & Fitness',
                'Location' => 'Los Angeles, USA',
                'StartDateTime' => Carbon::parse('2024-08-15 07:00:00'),
                'EndDateTime' => Carbon::parse('2024-08-15 12:00:00'),
                'MaxAttendees' => 1000,
                'RegistrationDeadline' => Carbon::parse('2024-08-10 23:59:59'),
                'RegistrationFee' => 50.00,
                'Status' => 'published',
            ],
            // Science & Tech
            [
                'Title' => 'Tech Summit 2024',
                'Description' => 'A summit showcasing the latest advancements in technology.',
                'Category' => 'Science & Tech',
                'Location' => 'San Francisco, USA',
                'StartDateTime' => Carbon::parse('2024-09-20 09:00:00'),
                'EndDateTime' => Carbon::parse('2024-09-22 17:00:00'),
                'MaxAttendees' => 300,
                'RegistrationDeadline' => Carbon::parse('2024-09-15 23:59:59'),
                'RegistrationFee' => 150.00,
                'Status' => 'published',
            ],
            [
                'Title' => 'Startup Pitch Competition',
                'Description' => 'An event where startup founders pitch their ideas to investors.',
                'Category' => 'Business & Seminars',
                'Location' => 'San Francisco, USA',
                'StartDateTime' => Carbon::parse('2024-10-10 10:00:00'),
                'EndDateTime' => Carbon::parse('2024-10-10 18:00:00'),
                'MaxAttendees' => 50,
                'RegistrationDeadline' => Carbon::parse('2024-10-05 23:59:59'),
                'RegistrationFee' => 20.00,
                'Status' => 'published',
            ],
            // Food & Drink
            [
                'Title' => 'Wine Tasting Event',
                'Description' => 'A wine tasting event featuring wines from around the world.',
                'Category' => 'Food & Drink',
                'Location' => 'Napa Valley, USA',
                'StartDateTime' => Carbon::parse('2024-11-15 14:00:00'),
                'EndDateTime' => Carbon::parse('2024-11-15 18:00:00'),
                'MaxAttendees' => 100,
                'RegistrationDeadline' => Carbon::parse('2024-11-10 23:59:59'),
                'RegistrationFee' => 30.00,
                'Status' => 'published',
            ],
            // Music & Concerts
            [
                'Title' => 'Electronic Dance Music Festival',
                'Description' => 'A music festival featuring top EDM artists and DJs.',
                'Category' => 'Music & Concerts',
                'Location' => 'Miami, USA',
                'StartDateTime' => Carbon::parse('2024-12-05 20:00:00'),
                'EndDateTime' => Carbon::parse('2024-12-07 02:00:00'),
                'MaxAttendees' => 2000,
                'RegistrationDeadline' => Carbon::parse('2024-11-30 23:59:59'),
                'RegistrationFee' => 60.00,
                'Status' => 'published',
            ],
            // Sports & Fitness
            [
                'Title' => 'Fitness Expo',
                'Description' => 'An expo showcasing the latest fitness equipment and trends.',
                'Category' => 'Sports & Fitness',
                'Location' => 'Chicago, USA',
                'StartDateTime' => Carbon::parse('2025-01-20 09:00:00'),
                'EndDateTime' => Carbon::parse('2025-01-20 17:00:00'),
                'MaxAttendees' => 300,
                'RegistrationDeadline' => Carbon::parse('2025-01-15 23:59:59'),
                'RegistrationFee' => 25.00,
                'Status' => 'published',
            ],
            // Science & Tech
            [
                'Title' => 'Artificial Intelligence Symposium',
                'Description' => 'A symposium discussing the latest advancements in AI technology.',
                'Category' => 'Science & Tech',
                'Location' => 'Tokyo, Japan',
                'StartDateTime' => Carbon::parse('2025-02-15 10:00:00'),
                'EndDateTime' => Carbon::parse('2025-02-16 17:00:00'),
                'MaxAttendees' => 150,
                'RegistrationDeadline' => Carbon::parse('2025-02-10 23:59:59'),
                'RegistrationFee' => 100.00,
                'Status' => 'published',
            ],
            // Travel & Trekking
            [
                'Title' => 'Hiking Expedition: Everest Base Camp',
                'Description' => 'An expedition to trek to the Everest Base Camp.',
                'Category' => 'Travel & Trekking',
                'Location' => 'Kathmandu, Nepal',
                'StartDateTime' => Carbon::parse('2025-03-10 06:00:00'),
                'EndDateTime' => Carbon::parse('2025-03-20 18:00:00'),
                'MaxAttendees' => 20,
                'RegistrationDeadline' => Carbon::parse('2025-02-28 23:59:59'),
                'RegistrationFee' => 500.00,
                'Status' => 'published',
            ],
            // Charity & Non-profit
            [
                'Title' => 'Fundraising Gala Dinner',
                'Description' => 'A gala dinner to raise funds for a local charity organization.',
                'Category' => 'Charity & Non-profit',
                'Location' => 'London, UK',
                'StartDateTime' => Carbon::parse('2025-04-25 19:00:00'),
                'EndDateTime' => Carbon::parse('2025-04-25 23:00:00'),
                'MaxAttendees' => 150,
                'RegistrationDeadline' => Carbon::parse('2025-04-20 23:59:59'),
                'RegistrationFee' => 75.00,
                'Status' => 'published',
            ],
            // Education & Classes
            [
                'Title' => 'Photography Workshop',
                'Description' => 'A workshop to learn photography techniques and skills.',
                'Category' => 'Education & Classes',
                'Location' => 'Sydney, Australia',
                'StartDateTime' => Carbon::parse('2025-05-10 10:00:00'),
                'EndDateTime' => Carbon::parse('2025-05-10 16:00:00'),
                'MaxAttendees' => 30,
                'RegistrationDeadline' => Carbon::parse('2025-05-05 23:59:59'),
                'RegistrationFee' => 50.00,
                'Status' => 'published',
            ],
            // Yoga & Health
            [
                'Title' => 'Mindfulness Retreat',
                'Description' => 'A retreat focused on mindfulness practices for mental well-being.',
                'Category' => 'Yoga & Health',
                'Location' => 'Bali, Indonesia',
                'StartDateTime' => Carbon::parse('2025-06-20 09:00:00'),
                'EndDateTime' => Carbon::parse('2025-06-25 17:00:00'),
                'MaxAttendees' => 50,
                'RegistrationDeadline' => Carbon::parse('2025-06-10 23:59:59'),
                'RegistrationFee' => 200.00,
                'Status' => 'published',
            ],
        ];
        // Inserting dummy categories into the database
        foreach ($categories as $category) {
            EventCategorie::create($category);
        }
        // Inserting dummy events into the database
        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
