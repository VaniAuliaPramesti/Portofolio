<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - [Nama Anda]</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons CDN for simple icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        /* Menggunakan font Inter sebagai font utama */
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Style tambahan untuk efek glassmorphism pada navbar */
        .glassmorphism {
            background: rgba(15, 23, 42, 0.8);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body class="bg-slate-900 text-slate-300">

    <!-- ===== Header / Navbar ===== -->
    <header id="header" class="glassmorphism fixed top-0 left-0 w-full z-50 transition-all duration-300">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo / Nama -->
                <div class="flex-shrink-0">
                    <a href="#hero" class="text-2xl font-bold text-white">
                        [Nama Anda]
                    </a>
                </div>
                
                <!-- Navigasi Desktop -->
                <nav class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="#tentang" class="text-slate-300 hover:bg-slate-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Tentang Saya</a>
                        <a href="#proyek" class="text-slate-300 hover:bg-slate-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Proyek</a>
                        <a href="#keahlian" class="text-slate-300 hover:bg-slate-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Keahlian</a>
                        <a href="#kontak" class="text-slate-300 hover:bg-slate-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Kontak</a>
                    </div>
                </nav>

                <!-- Tombol Menu Mobile -->
                <div class="-mr-2 flex md:hidden">
                    <button id="mobile-menu-button" type="button" class="bg-slate-800 inline-flex items-center justify-center p-2 rounded-md text-slate-400 hover:text-white hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-slate-800 focus:ring-white">
                        <span class="sr-only">Buka menu utama</span>
                        <i data-lucide="menu"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Menu Mobile (muncul saat tombol di klik) -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#tentang" class="text-slate-300 hover:bg-slate-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Tentang Saya</a>
                <a href="#proyek" class="text-slate-300 hover:bg-slate-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Proyek</a>
                <a href="#keahlian" class="text-slate-300 hover:bg-slate-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Keahlian</a>
                <a href="#kontak" class="text-slate-300 hover:bg-slate-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Kontak</a>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 sm:px-6 lg:px-8 pt-20">
        
        <!-- ===== Bagian Hero ===== -->
        <section id="hero" class="min-h-screen flex items-center justify-center text-center">
            <div class="max-w-3xl">
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-white leading-tight mb-4">
                    Halo, Saya [Nama Anda]
                </h1>
                <p class="text-xl sm:text-2xl text-cyan-400 font-semibold mb-8">
                    Seorang [Jabatan Anda, misal: Web Developer, UI/UX Designer, dll]
                </p>
                <p class="text-lg text-slate-400 mb-10">
                    Selamat datang di portofolio digital saya. Saya bersemangat dalam menciptakan solusi digital yang fungsional, menarik, dan bermanfaat bagi pengguna.
                </p>
                <a href="#kontak" class="bg-cyan-500 text-white font-bold py-3 px-8 rounded-full hover:bg-cyan-600 transition duration-300 text-lg">
                    Hubungi Saya
                </a>
            </div>
        </section>

        <!-- ===== Bagian Tentang Saya ===== -->
        <section id="tentang" class="py-24">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-6">Tentang Saya</h2>
                <div class="w-24 h-1 bg-cyan-500 mx-auto mb-12"></div>
                <p class="text-lg text-slate-400 leading-relaxed">
                    [Tulis deskripsi tentang diri Anda di sini. Jelaskan latar belakang, passion, dan apa yang membuat Anda unik. Ceritakan sedikit tentang perjalanan karir Anda dan tujuan profesional Anda. Buatlah semenarik mungkin!]
                </p>
                <p class="text-lg text-slate-400 leading-relaxed mt-4">
                    Saya percaya bahwa teknologi dapat memecahkan masalah nyata. Dengan keahlian saya di bidang [sebutkan bidang utama Anda], saya selalu berusaha untuk belajar hal baru dan berkolaborasi dalam proyek-proyek yang menantang.
                </p>
            </div>
        </section>

        <!-- ===== Bagian Proyek ===== -->
        <section id="proyek" class="py-24">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl sm:text-4xl font-bold text-white text-center mb-6">Proyek Unggulan</h2>
                <div class="w-24 h-1 bg-cyan-500 mx-auto mb-12"></div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <!-- Contoh Proyek 1 -->
                    <div class="bg-slate-800 rounded-lg overflow-hidden shadow-lg transform hover:-translate-y-2 transition-transform duration-300">
                        <img src="https://placehold.co/600x400/1e293b/94a3b8?text=Gambar+Proyek+1" alt="Gambar Proyek 1" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-white mb-2">Nama Proyek 1</h3>
                            <p class="text-slate-400 mb-4">Deskripsi singkat tentang proyek ini, tantangan yang dihadapi, dan solusi yang diberikan.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-cyan-900 text-cyan-300 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">HTML</span>
                                <span class="bg-cyan-900 text-cyan-300 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">CSS</span>
                                <span class="bg-cyan-900 text-cyan-300 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">JavaScript</span>
                            </div>
                            <div class="flex justify-end gap-4 mt-4">
                                <a href="#" class="text-cyan-400 hover:text-white flex items-center gap-2"><i data-lucide="github"></i> Kode</a>
                                <a href="#" class="text-cyan-400 hover:text-white flex items-center gap-2"><i data-lucide="external-link"></i> Demo</a>
                            </div>
                        </div>
                    </div>

                    <!-- Contoh Proyek 2 -->
                    <div class="bg-slate-800 rounded-lg overflow-hidden shadow-lg transform hover:-translate-y-2 transition-transform duration-300">
                        <img src="https://placehold.co/600x400/1e293b/94a3b8?text=Gambar+Proyek+2" alt="Gambar Proyek 2" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-white mb-2">Nama Proyek 2</h3>
                            <p class="text-slate-400 mb-4">Deskripsi singkat tentang proyek ini, tantangan yang dihadapi, dan solusi yang diberikan.</p>
                             <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-cyan-900 text-cyan-300 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">React</span>
                                <span class="bg-cyan-900 text-cyan-300 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">Node.js</span>
                            </div>
                            <div class="flex justify-end gap-4 mt-4">
                                <a href="#" class="text-cyan-400 hover:text-white flex items-center gap-2"><i data-lucide="github"></i> Kode</a>
                                <a href="#" class="text-cyan-400 hover:text-white flex items-center gap-2"><i data-lucide="external-link"></i> Demo</a>
                            </div>
                        </div>
                    </div>

                    <!-- Contoh Proyek 3 -->
                    <div class="bg-slate-800 rounded-lg overflow-hidden shadow-lg transform hover:-translate-y-2 transition-transform duration-300">
                        <img src="https://placehold.co/600x400/1e293b/94a3b8?text=Gambar+Proyek+3" alt="Gambar Proyek 3" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-white mb-2">Nama Proyek 3</h3>
                            <p class="text-slate-400 mb-4">Deskripsi singkat tentang proyek ini, tantangan yang dihadapi, dan solusi yang diberikan.</p>
                             <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-cyan-900 text-cyan-300 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">Figma</span>
                                <span class="bg-cyan-900 text-cyan-300 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">UI/UX</span>
                            </div>
                            <div class="flex justify-end gap-4 mt-4">
                                <a href="#" class="text-cyan-400 hover:text-white flex items-center gap-2"><i data-lucide="figma"></i> Desain</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== Bagian Keahlian ===== -->
        <section id="keahlian" class="py-24 bg-slate-950/50">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-6">Keahlian Teknis</h2>
                <div class="w-24 h-1 bg-cyan-500 mx-auto mb-12"></div>
                <div class="flex flex-wrap justify-center items-center gap-4">
                    <span class="bg-slate-700 text-white text-lg font-medium px-6 py-3 rounded-lg">HTML5</span>
                    <span class="bg-slate-700 text-white text-lg font-medium px-6 py-3 rounded-lg">CSS3 & Tailwind</span>
                    <span class="bg-slate-700 text-white text-lg font-medium px-6 py-3 rounded-lg">JavaScript (ES6+)</span>
                    <span class="bg-slate-700 text-white text-lg font-medium px-6 py-3 rounded-lg">React.js</span>
                    <span class="bg-slate-700 text-white text-lg font-medium px-6 py-3 rounded-lg">Node.js</span>
                    <span class="bg-slate-700 text-white text-lg font-medium px-6 py-3 rounded-lg">Git & GitHub</span>
                    <span class="bg-slate-700 text-white text-lg font-medium px-6 py-3 rounded-lg">Figma</span>
                    <span class="bg-slate-700 text-white text-lg font-medium px-6 py-3 rounded-lg">[Keahlian Lain]</span>
                </div>
            </div>
        </section>


        <!-- ===== Bagian Kontak ===== -->
        <section id="kontak" class="py-24">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-6">Tertarik Bekerja Sama?</h2>
                <div class="w-24 h-1 bg-cyan-500 mx-auto mb-12"></div>
                <p class="text-lg text-slate-400 mb-8">
                    Saya selalu terbuka untuk diskusi, kolaborasi, atau sekadar bertukar pikiran. Jangan ragu untuk menghubungi saya melalui email atau media sosial.
                </p>
                <a href="mailto:email.anda@contoh.com" class="inline-block bg-cyan-500 text-white font-bold text-lg py-3 px-8 rounded-full hover:bg-cyan-600 transition duration-300">
                    Kirim Email
                </a>
                <div class="flex justify-center gap-8 mt-10">
                    <a href="https://github.com/[username-anda]" target="_blank" class="text-slate-400 hover:text-white transition-colors duration-300">
                        <i data-lucide="github" class="w-8 h-8"></i>
                    </a>
                    <a href="https://linkedin.com/in/[username-anda]" target="_blank" class="text-slate-400 hover:text-white transition-colors duration-300">
                        <i data-lucide="linkedin" class="w-8 h-8"></i>
                    </a>
                    <a href="https://instagram.com/[username-anda]" target="_blank" class="text-slate-400 hover:text-white transition-colors duration-300">
                        <i data-lucide="instagram" class="w-8 h-8"></i>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- ===== Footer ===== -->
    <footer class="border-t border-slate-800">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-6 text-center text-slate-500">
            <p>&copy; <span id="year"></span> [Nama Anda]. Dibuat dengan penuh semangat.</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi Lucide Icons
            lucide.createIcons();

            // Set tahun sekarang di footer
            document.getElementById('year').textContent = new Date().getFullYear();

            // Handle klik tombol menu mobile
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
            
            // Tutup menu mobile saat link di klik
            const mobileLinks = mobileMenu.querySelectorAll('a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                });
            });
        });
    </script>
</body>
</html>
