<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Oppo Mobile',
                'price' => '20000',
                'description' => 'A budget-friendly smartphone with 8GB RAM, a large HD display, fast charging support, and a reliable multi-camera setup — great for everyday browsing, social media, and casual gaming.',
                'category' => 'mobile',
                'gallery' => 'https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png'
            ],
            [
                'name' => 'Samsung TV',
                'price' => '10000',
                'description' => 'A vibrant smart TV with crisp full-HD picture quality, built-in streaming apps, and multiple HDMI ports — perfect for movie nights and everyday entertainment.',
                'category' => 'tv',
                'gallery' => 'https://tse1.mm.bing.net/th/id/OIP.u10XKPhTk59nswaOskJS0AHaE8?pid=Api&P=0&h=220'
            ],
            [
                'name' => 'LG TV',
                'price' => '15000',
                'description' => 'A sleek smart LED TV offering sharp visuals, smooth motion handling, and an intuitive smart interface with access to popular streaming platforms.',
                'category' => 'tv',
                'gallery' => 'https://4.imimg.com/data4/PM/KH/MY-34794816/lcd-500x500.png'
            ],
            [
                'name' => 'Panasonic Fridge',
                'price' => '10000',
                'description' => 'An energy-efficient refrigerator with spacious storage, adjustable shelving, and reliable cooling technology to keep groceries fresh for longer.',
                'category' => 'fridge',
                'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTFx-2-wTOcfr5at01ojZWduXEm5cZ-sRYPJA&usqp=CAU'
            ],
            [
                'name' => 'Sony WH-1000XM5 Headphones',
                'price' => 89999,
                'description' => 'Industry-leading noise-canceling wireless headphones with premium sound quality, 30-hour battery life, and adaptive ambient sound control for immersive listening anywhere.',
                'category' => 'Headphones',
                'gallery' => 'https://tse1.mm.bing.net/th/id/OIP.6mxvtD4DVM3J2cxc-ypAgAHaHa?pid=Api&P=0&h=220'
            ],
            [
                'name' => 'Xiaomi Smart Air Fryer Pro',
                'price' => 32999,
                'description' => 'A 6.5L smart air fryer with app control, voice assistant integration, and rapid hot-air circulation for oil-free, healthier cooking with minimal cleanup.',
                'category' => 'Kitchen',
                'gallery' => 'https://tse4.mm.bing.net/th/id/OIP.Vw5YtAv1i5_Y2XpQFSVHAAHaJs?pid=Api&P=0&h=220'
            ],
            [
                'name' => 'Dell XPS 13 (2025 Model)',
                'price' => 299000,
                'description' => 'An ultra-thin, premium laptop featuring Intel Evo certification, a stunning OLED display, all-day battery life, and a lightweight aluminum chassis built for productivity on the go.',
                'category' => 'Laptop',
                'gallery' => 'https://tse4.mm.bing.net/th/id/OIP.VpqDv69Zd5zyixIVGsq06AHaGM?pid=Api&P=0&h=220'
            ],
            [
                'name' => 'Samsung 65" Neo QLED 8K TV',
                'price' => 670000,
                'description' => 'A stunning 65-inch 8K Smart TV with Quantum HDR, AI-powered upscaling, and cinema-grade contrast — designed to turn any living room into a home theater.',
                'category' => 'TV',
                'gallery' => 'https://tse3.mm.bing.net/th/id/OIP.gVOys0ZhwAJFsIwo_-n8DwHaF6?pid=Api&P=0&h=220'
            ],
            [
                'name' => 'Apple Watch Series 10',
                'price' => 124999,
                'description' => 'A health-focused smartwatch with advanced blood sugar tracking, ECG monitoring, always-on retina display, and seamless integration with the Apple ecosystem.',
                'category' => 'Smartwatch',
                'gallery' => 'https://tse4.mm.bing.net/th/id/OIP.e5xZhqO0mYZ8_7Ii7tiRpgHaHa?rs=1&pid=ImgDetMain&o=7&rm=3'
            ],
            [
                'name' => 'Logitech MX Master 4 Mouse',
                'price' => 19999,
                'description' => 'An ergonomic productivity mouse with customizable buttons, ultra-fast scrolling, and seamless multi-device switching — built for professionals who multitask across computers.',
                'category' => 'Accessories',
                'gallery' => 'https://tse4.mm.bing.net/th/id/OIP.3h6EJLl4Q8GBMEq1Ss-V3QHaFm?pid=Api&P=0&h=220'
            ],
            [
                'name' => 'Anker 20000mAh Power Bank',
                'price' => 7999,
                'description' => 'A high-capacity 20000mAh power bank with USB-C Power Delivery and fast-charging support, capable of charging phones, tablets, and laptops multiple times on a single charge.',
                'category' => 'Accessories',
                'gallery' => 'https://tse4.mm.bing.net/th/id/OIP.dF6wgRjyG4kfmhsVGBzWCAHaEP?pid=Api&h=220&P=0'
            ],
            [
                'name' => 'Amazon Echo Dot (5th Gen)',
                'price' => 11999,
                'description' => 'A compact smart speaker with improved bass, crisp audio, and built-in Alexa — perfect for controlling smart home devices, playing music, and getting quick answers hands-free.',
                'category' => 'Smart Home',
                'gallery' => 'https://m.media-amazon.com/images/G/35/kindle/journeys/Mvq9IW0GZYhQQxsK3yOI2P3mAwEpOFjw7I006Eo32BTY3D/Y2YwZDUxOWQt._CB608570751_.jpg'
            ],
            [
                'name' => 'Apple iPhone 16 Pro',
                'price' => 459999,
                'description' => 'The latest iPhone powered by the A18 Pro chip, featuring a titanium design, pro-grade camera system, and industry-leading performance for gaming, photography, and productivity.',
                'category' => 'Mobile',
                'gallery' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'name' => 'Samsung Galaxy S25 Ultra',
                'price' => 399999,
                'description' => 'A flagship Android smartphone with an AI-enhanced camera system, S-Pen support, a dazzling AMOLED display, and top-tier performance for power users.',
                'category' => 'Mobile',
                'gallery' => 'https://images.unsplash.com/photo-1598327105666-5b89351aff97?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'name' => 'HP Pavilion 15',
                'price' => 185000,
                'description' => 'A versatile 15.6-inch laptop powered by an Intel Core i7 processor, offering smooth multitasking, a full-HD display, and reliable performance for work and study.',
                'category' => 'Laptop',
                'gallery' => 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'name' => 'MacBook Air M4',
                'price' => 420000,
                'description' => 'Apple\'s ultra-portable MacBook Air powered by the M4 chip, delivering blazing-fast performance, silent fanless operation, and all-day battery life in a featherlight design.',
                'category' => 'Laptop',
                'gallery' => 'https://th.bing.com/th/id/OIP.Zu4UlfnziQSpd2a79GVQZAHaEK?o=7rm=3&rs=1&pid=ImgDetMain&o=7&rm=3'
            ],
            [
                'name' => 'Canon EOS R50',
                'price' => 215000,
                'description' => 'A compact mirrorless camera with 4K video recording, fast autofocus, and an intuitive interface — ideal for content creators and photography enthusiasts stepping up from smartphones.',
                'category' => 'Camera',
                'gallery' => 'https://images.unsplash.com/photo-1516035069371-29a1b244cc32?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'name' => 'Nikon Z6 II',
                'price' => 365000,
                'description' => 'A professional-grade mirrorless camera with dual processors, exceptional low-light performance, and rugged weather-sealed build — built for serious photographers and videographers.',
                'category' => 'Camera',
                'gallery' => 'https://cdn.mos.cms.futurecdn.net/JN4id4eQ79r4c4JzHVNtH5.jpg'
            ],
            [
                'name' => 'Sony PlayStation 5',
                'price' => 175000,
                'description' => 'A next-generation gaming console delivering ultra-fast load times, stunning 4K graphics, and immersive haptic feedback through the DualSense controller.',
                'category' => 'Gaming',
                'gallery' => 'https://images.unsplash.com/photo-1606813907291-d86efa9b94db?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'name' => 'Xbox Series X',
                'price' => 170000,
                'description' => 'A powerful 4K gaming console offering ray-tracing visuals, ultra-fast SSD loading, and access to a massive library of games through Xbox Game Pass.',
                'category' => 'Gaming',
                'gallery' => 'https://images.unsplash.com/photo-1621259182978-fbf93132d53d?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'name' => 'JBL Flip 6',
                'price' => 32000,
                'description' => 'A portable, waterproof Bluetooth speaker delivering punchy bass and clear sound — compact enough to bring along for parties, beach trips, or outdoor adventures.',
                'category' => 'Speaker',
                'gallery' => 'https://images.unsplash.com/photo-1589003077984-894e133dabab?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'name' => 'Bose SoundLink Flex',
                'price' => 45000,
                'description' => 'A premium portable Bluetooth speaker with rich, room-filling sound, rugged waterproof design, and long battery life for music on the move.',
                'category' => 'Speaker',
                'gallery' => 'https://images.unsplash.com/photo-1546435770-a3e426bf472b?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'name' => 'Apple AirPods Pro 2',
                'price' => 68000,
                'description' => 'Premium wireless earbuds with active noise cancellation, adaptive transparency mode, and spatial audio for an immersive, high-fidelity listening experience.',
                'category' => 'Headphones',
                'gallery' => 'https://images.unsplash.com/photo-1606220588913-b3aacb4d2f46?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'name' => 'Samsung Galaxy Buds 3',
                'price' => 42000,
                'description' => 'Premium wireless earbuds with crisp audio, active noise cancellation, and a comfortable secure fit — ideal for calls, workouts, and everyday listening.',
                'category' => 'Headphones',
                'gallery' => 'https://images.unsplash.com/photo-1588423771073-b8903fbb85b5?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'name' => 'Dyson V15 Vacuum',
                'price' => 189000,
                'description' => 'A powerful cordless vacuum cleaner with laser dust detection, intelligent suction adjustment, and long-lasting battery life for deep, effortless home cleaning.',
                'category' => 'Home Appliances',
                'gallery' => 'https://images.unsplash.com/photo-1581578731548-c64695cc6952?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'name' => 'Philips Air Purifier',
                'price' => 78000,
                'description' => 'A smart air purifier with HEPA filtration, real-time air quality monitoring, and quiet operation — helping keep indoor air clean and fresh around the clock.',
                'category' => 'Home Appliances',
                'gallery' => 'https://images.unsplash.com/photo-1582719471384-894fbb16e074?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'name' => 'Fitbit Charge 6',
                'price' => 49999,
                'description' => 'A sleek fitness tracker with continuous heart-rate monitoring, sleep tracking, built-in GPS, and multi-day battery life — a reliable companion for an active lifestyle.',
                'category' => 'Wearables',
                'gallery' => 'https://images.unsplash.com/photo-1579586337278-3befd40fd17a?auto=format&fit=crop&w=600&q=80'
            ],
        ]);
    }
}
