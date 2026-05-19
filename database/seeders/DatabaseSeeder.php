<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Setting;
use App\Models\Service;
use App\Models\Client;
use App\Models\Testimonial;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin User
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);

        // Settings
        $settings = [
            ['key' => 'hero_pretitle', 'value' => "Hello, I'm Shiela Mae"],
            ['key' => 'hero_title', 'value' => "Senior UI Prototype Designer bridging the gap between static design and interactive reality."],
            ['key' => 'about_page_title', 'value' => "Hi, I’m Shiela Mae"],
            ['key' => 'about_page_intro_title', 'value' => "Bridging the gap between static design and interactive reality."],
            ['key' => 'about_page_intro_text', 'value' => "I am a specialist in high-fidelity prototyping and user-centric design, focused on turning complex visions into interactive digital experiences."],
            ['key' => 'services_page_title', 'value' => "Specialized UI Prototyping"],
            ['key' => 'services_page_intro_title', 'value' => "Turning designs into interactive realities."],
            ['key' => 'services_page_intro_text', 'value' => "I provide specialized prototyping services that bridge the gap between design and development, ensuring a smooth and efficient product lifecycle."],
            ['key' => 'contact_page_intro_title', 'value' => "Let’s build something amazing together."],
            ['key' => 'contact_page_intro_text', 'value' => "I am currently open to new projects, freelance collaborations, or full-time opportunities. If you have a vision you want to bring to life through interactive design, feel free to reach out!"],
            ['key' => 'contact_cta_text', 'value' => "I am always looking for new challenges and exciting projects to collaborate on. Whether you are looking to build a high-fidelity prototype from scratch, refine an existing user interface, or just want to chat about the latest in design technology, my inbox is always open. Let’s turn your vision into an interactive reality."],
            ['key' => 'contact_email', 'value' => "hello@shielamae.com"],
            ['key' => 'contact_phone', 'value' => "+63 900 000 0000"],
            ['key' => 'footer_text', 'value' => "Senior UI Prototype Designer specializing in high-fidelity interactive experiences that bridge the gap between design and development."],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }

        // Services
        $services = [
            [
                'title' => 'Interactive Prototyping',
                'description' => 'Transforming static designs into fully functional, high-fidelity prototypes using Figma and Protopie.',
                'features' => ['High-Fidelity', 'Figma', 'Protopie']
            ],
            [
                'title' => 'UI/UX Design',
                'description' => 'Crafting beautiful, user-centric interfaces that prioritize accessibility and modern aesthetics.',
                'features' => ['Accessibility', 'Modern UI', 'UX Research']
            ],
            [
                'title' => 'Interaction Design',
                'description' => 'Designing seamless transitions and micro-interactions that bring digital products to life.',
                'features' => ['Micro-interactions', 'Motion Design', 'User Delight']
            ],
            [
                'title' => 'Design Systems',
                'description' => 'Building scalable component libraries to ensure visual consistency across entire platforms.',
                'features' => ['Scalability', 'Consistency', 'Component Library']
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }

        // Clients
        $clients = ['flash', 'rise', 'cactus', 'pinpoint', 'proline', 'vision', 'volume', 'hitech', 'terra', 'chain'];
        foreach ($clients as $client) {
            Client::create([
                'name' => ucfirst($client),
                'logo' => "assets/images/clients/{$client}.svg"
            ]);
        }

        // Testimonials
        $testimonials = [
            [
                'author' => 'Sarah Jenkins',
                'company' => 'Product Manager at TechFlow',
                'quote' => 'Shiela’s prototypes were a game-changer for our stakeholders. She didn’t just design screens; she designed an experience.',
                'avatar' => 'assets/images/avatars/user-01.jpg'
            ],
            [
                'author' => 'Mark Chen',
                'company' => 'Lead Developer at Creative Pulse',
                'quote' => 'Working with Shiela is a breeze. Her handoffs are incredibly detailed, making the transition from prototype to code seamless.',
                'avatar' => 'assets/images/avatars/user-04.jpg'
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }

        // Posts
        Post::create([
            'title' => 'Why High-Fidelity Prototypes are the Secret to Faster Development',
            'slug' => 'high-fidelity-prototypes-secret-faster-development',
            'excerpt' => 'How creating interactive prototypes early can save hundreds of hours in the coding phase by aligning stakeholders and developers.',
            'content' => 'Full content about high-fidelity prototyping benefits...',
            'featured_image' => 'https://scontent.fmnl3-2.fna.fbcdn.net/v/t39.30808-6/626010574_2793697690962385_5789464887881614912_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeGf_p8iSPHkSy3tdXu7ksE9w2Ky163TxofDYrLXrdPGh9YpOMKv1iHGz2GDcjtGqkGE7cR-YxlfJS2HruVzMhs6&_nc_ohc=eDDEQREx_HgQ7kNvwFkhkHm&_nc_oc=AdrZlZtCm1_oVH8HXCaC9fPYx6hfTSAWHZPmkW8rWLSXWtYQsXruEhVvd8_xAzpjAEY&_nc_zt=23&_nc_ht=scontent.fmnl3-2.fna&_nc_gid=e7OHUb-VjBySP1u4kpDniQ&_nc_ss=7b2a8&oh=00_Af5N42H_E_4NG9-taRioFUCBlO6hwips3RQaHA38M92ulA&oe=6A1207F0',
            'publish_date' => now(),
        ]);

        Post::create([
            'title' => 'Mastering Micro-Interactions: Small Details, Big Impact',
            'slug' => 'mastering-micro-interactions',
            'excerpt' => 'Exploring how subtle animations and transitions can turn a good user interface into an unforgettable user experience.',
            'content' => 'Full content about micro-interactions...',
            'featured_image' => 'https://scontent.fmnl3-2.fna.fbcdn.net/v/t39.30808-6/626010574_2793697690962385_5789464887881614912_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeGf_p8iSPHkSy3tdXu7ksE9w2Ky163TxofDYrLXrdPGh9YpOMKv1iHGz2GDcjtGqkGE7cR-YxlfJS2HruVzMhs6&_nc_ohc=eDDEQREx_HgQ7kNvwFkhkHm&_nc_oc=AdrZlZtCm1_oVH8HXCaC9fPYx6hfTSAWHZPmkW8rWLSXWtYQsXruEhVvd8_xAzpjAEY&_nc_zt=23&_nc_ht=scontent.fmnl3-2.fna&_nc_gid=e7OHUb-VjBySP1u4kpDniQ&_nc_ss=7b2a8&oh=00_Af5N42H_E_4NG9-taRioFUCBlO6hwips3RQaHA38M92ulA&oe=6A1207F0',
            'publish_date' => now(),
        ]);

        Post::create([
            'title' => 'Design Systems in Figma: Building for Scalability',
            'slug' => 'design-systems-figma-scalability',
            'excerpt' => 'A guide on how I structure my component libraries to ensure consistency and efficiency across large-scale design projects.',
            'content' => 'Full content about design systems...',
            'featured_image' => 'https://scontent.fmnl3-2.fna.fbcdn.net/v/t39.30808-6/626010574_2793697690962385_5789464887881614912_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeGf_p8iSPHkSy3tdXu7ksE9w2Ky163TxofDYrLXrdPGh9YpOMKv1iHGz2GDcjtGqkGE7cR-YxlfJS2HruVzMhs6&_nc_ohc=eDDEQREx_HgQ7kNvwFkhkHm&_nc_oc=AdrZlZtCm1_oVH8HXCaC9fPYx6hfTSAWHZPmkW8rWLSXWtYQsXruEhVvd8_xAzpjAEY&_nc_zt=23&_nc_ht=scontent.fmnl3-2.fna&_nc_gid=e7OHUb-VjBySP1u4kpDniQ&_nc_ss=7b2a8&oh=00_Af5N42H_E_4NG9-taRioFUCBlO6hwips3RQaHA38M92ulA&oe=6A1207F0',
            'publish_date' => now(),
        ]);
    }
}
