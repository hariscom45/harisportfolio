<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  $projects = [
    [
            'category' => 'Internet of Things',
            'title' => 'IoT-Based EdgeBeat Monitoring System',
            'images' => [
                'images/project/EdgeBeat1.png',
                'images/project/EdgeBeat2.png',
            ],
            'description' => 'Sistem monitoring kesehatan lansia berbasis Internet of Things (IoT) yang dirancang untuk mengukur dan menampilkan suhu tubuh, detak jantung, serta kadar oksigen dalam darah (SpO₂) menggunakan sensor yang terintegrasi dengan mikrokontroler.',
            'tech' => ['IoT', 'ESP32', 'Arduino IDE'],
            'icon' => 'bi-heart-pulse',
            'link' => '#',
        ],
        [
            'category' => 'Web Development',
            'title' => 'Company Profile Website',
            'images' => [
                'images/project/Company1.png',
                'images/project/Company2.png',
            ],
            'description' => 'Website company profile yang dirancang untuk menyajikan informasi perusahaan secara digital, meliputi profil perusahaan, layanan, dan informasi lainnya. Website dilengkapi antarmuka responsif untuk memberikan pengalaman pengguna yang optimal pada berbagai perangkat.',
            'tech' => ['Laravel', 'HTML', 'CSS', 'JavaScript', 'PHP'],
            'icon' => 'bi-window',
            'link' => '#',
        ],
        [
            'category' => 'Robotics & IoT',
            'title' => 'UWB-Based Robot Follower',
            'images' => [
                'images/project/robot1.png',
                'images/project/robot2.png',
            ],
            'description' => 'Robot pengantar barang otomatis yang mampu mengikuti pergerakan pengguna menggunakan teknologi Ultra-Wideband (UWB) untuk mendeteksi posisi dan jarak. Sistem memanfaatkan ESP32 sebagai perangkat komunikasi UWB dan LattePanda untuk memproses data navigasi serta mengendalikan pergerakan robot.',
            'tech' => ['ESP32', 'UWB', 'LattePanda', 'Arduino IDE'],
            'icon' => 'bi-robot',
            'link' => '#',
        ],
        [
            'category' => 'Web Development',
            'title' => 'Learning Center Management System',
            'images' => [
                'images/project/learning1.png',
                'images/project/learning2.png',
            ],
            'description' => 'Aplikasi berbasis web untuk mengelola kegiatan pelatihan dan pembelajaran karyawan secara digital. Sistem menyediakan fitur pengelolaan materi pelatihan, instruktur, peserta, sesi pembelajaran, serta evaluasi melalui pre-test dan post-test.',
            'tech' => ['CodeIgniter 3', 'PHP', 'MySQL', 'JavaScript'],
            'icon' => 'bi-mortarboard',
            'link' => '#',
        ],
        [
            'category' => 'Web Development',
            'title' => 'AuthLap - Laptop Borrowing Management System',
            'images' => [
                'images/project/authlap1.png',
                'images/project/authlap2.png',
            ],
            'description' => 'Aplikasi berbasis web untuk mengelola proses peminjaman dan penggunaan laptop oleh karyawan perusahaan. Sistem menyediakan fitur pengajuan peminjaman, persetujuan berjenjang oleh pihak terkait, pengelolaan data laptop, serta monitoring status pengajuan dan peminjaman.',
            'tech' => ['CodeIgniter 3', 'PHP', 'MySQL', 'JavaScript'],
            'icon' => 'bi-laptop',
            'link' => '#',
        ],
        [
            'category' => 'IoT & Machine Learning',
            'title' => 'IoT-Based Aquaponic HydroSmart Monitoring System with KNN',
            'images' => [
                'images/project/HydroSmart1.png',
                'images/project/HydroSmart2.png',
                'images/project/HydroSmart3.png',
            ],
            'description' => 'Sistem monitoring aquaponik berbasis Internet of Things (IoT) untuk memantau suhu air, suhu udara, dan kelembapan secara berkala. Data sensor diintegrasikan dengan aplikasi web dan algoritma K-Nearest Neighbors (KNN) untuk memprediksi tingkat optimalitas kondisi lingkungan bagi pertumbuhan tanaman.',
            'tech' => ['ESP8266', 'Laravel', 'Firebase', 'KNN', 'IoT'],
            'icon' => 'bi-moisture',
            'link' => '#',
        ],
        [
            'category' => 'Internet of Things & Automation',
            'title' => 'SeaGrow - Smart IoT Monitoring & Automation',
            'images' => [
                'images/project/seagrow.png',
            ],
            'description' => 'Sistem monitoring dan pengendalian lingkungan berbasis Internet of Things (IoT) yang mampu memantau suhu udara, kelembapan, dan kadar pH. Sistem dilengkapi mekanisme otomatisasi pompa untuk membantu menstabilkan kadar pH dan menjaga kondisi lingkungan sesuai parameter yang ditentukan.',
            'tech' => ['IoT', 'Microcontroller', 'Sensors', 'Automation'],
            'icon' => 'bi-droplet-half',
            'link' => '#',
        ],
        [
            'category' => 'Robotics & Embedded Systems',
            'title' => 'Automatic Cardboard Sorting Robot Arm',
            'images' => [
                'images/project/robot.png',
                'images/project/robot.mp4',
                 ],
            'description' => 'Sistem pemilahan kardus otomatis berdasarkan ukuran menggunakan robot lengan dan conveyor yang dikendalikan oleh ESP32. Sensor ultrasonik digunakan untuk mendeteksi ukuran kardus, kemudian robot lengan memindahkan kardus sesuai kategorinya. Hasil pemilahan ditampilkan melalui OLED dan dikirim ke Firebase untuk monitoring secara real-time.',
            'tech' => ['ESP32', 'Robot Arm', 'Firebase', 'Ultrasonic Sensor', 'Arduino IDE'],
            'icon' => 'bi-gear-wide-connected',
            'link' => '#',
    ],
];
    $experiences = [
        ['company' => 'PT Yamaha Electronics Manufacturing Indonesia', 'role' => 'Software Development Intern', 'period' => 'Aug 2025 - Dec 2025'],
        ['company' => 'PT WinnieCode Garuda Teknologi', 'role' => 'Laravel Development Intern', 'period' => 'Feb 2025 - Jul 2025'],
        ['company' => 'Indobot Academy', 'role' => 'Firmware Engineer & Project Manager', 'period' => 'Sep 2024 - Dec 2024'],
        ['company' => 'PT Masrur and Son', 'role' => 'Front End Development Intern', 'period' => 'Jan 2024 - Jul 2024'],

    ];

    $skills = [
        [
            'title' => 'Web Development',
            'icon' => 'bi-code-slash',
            'items' => [
                ['name' => 'Laravel', 'icon' => 'devicon-laravel-original'],
                ['name' => 'PHP', 'icon' => 'devicon-php-plain'],
                ['name' => 'CodeIgniter 4', 'icon' => 'devicon-codeigniter-plain'],
                ['name' => 'JavaScript', 'icon' => 'devicon-javascript-plain'],
                ['name' => 'HTML5', 'icon' => 'devicon-html5-plain'],
                ['name' => 'CSS3', 'icon' => 'devicon-css3-plain'],
                ['name' => 'Bootstrap', 'icon' => 'devicon-bootstrap-plain'],
            ],
        ],
        [
            'title' => 'IoT & Embedded Systems',
            'icon' => 'bi-cpu',
            'items' => [
                ['name' => 'ESP32', 'icon' => 'devicon-esp32-plain'],
                ['name' => 'ESP8266', 'icon' => 'bi-wifi'],
                ['name' => 'Arduino', 'icon' => 'devicon-arduino-plain'],
                ['name' => 'C', 'icon' => 'devicon-c-plain'],
                ['name' => 'C++', 'icon' => 'devicon-cplusplus-plain'],
                ['name' => 'Arduino IDE', 'icon' => 'devicon-arduino-plain'],
                ['name' => 'Sensors & Actuators', 'icon' => 'bi-cpu'],
            ],
        ],
        [
            'title' => 'Database, Tools & Productivity',
            'icon' => 'bi-grid-1x2',
            'items' => [
                ['name' => 'MySQL', 'icon' => 'devicon-mysql-plain'],
                ['name' => 'Git', 'icon' => 'devicon-git-plain'],
                ['name' => 'GitHub', 'icon' => 'devicon-github-original'],
                ['name' => 'VS Code', 'icon' => 'devicon-vscode-plain'],
                ['name' => 'Vite', 'icon' => 'devicon-vitejs-plain'],
                ['name' => 'Microsoft Office', 'icon' => 'devicon-microsoftoffice-plain'],
                ['name' => 'Canva', 'icon' => 'devicon-canva-original'],
            ],
        ],
    ];

    return view('home', compact('projects', 'experiences', 'skills'));
});
