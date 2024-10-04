<x-layout>
    <x-slot:title>Indeks KAMI</x-slot:title>

    {{-- Display --}}
    <div class="flex justify-center">
        <main class="max-w-5xl w-full p-6">
            <x-buttons.back-button></x-buttons.back.button>
                <h1 class="text-3xl font-bold">Tentang Indeks KAMI</h1>
                <p class="mt-2">Indeks KAMI adalah alat evaluasi untuk menganalisa tingkat kesiapan pengamanan
                    informasi di suatu
                    organisasi. Alat evaluasi ini tidak ditujukan untuk menganalisa kelayakan atau efektifitas bentuk
                    pengamanan yang ada, melainkan sebagai perangkat untuk memberikan gambaran kondisi kesiapan
                    (kelengkapan dan kematangan) kerangka kerja keamanan informasi kepada pimpinan Instansi/Perusahaan.
                    Evaluasi dilakukan terhadap berbagai area yang menjadi target penerapan keamanan informasi dengan
                    ruang lingkup pembahasan yang juga memenuhi semua aspek keamanan yang didefinisikan oleh standar
                    ISO/IEC 27001:2013.
                </p>
                <br>
                <h1 class="text-3xl font-bold">Petunjuk Penggunaan Alat Evaluasi Indeks Keamanan Informasi (Indeks KAMI)
                </h1>
                <p class="mt-2">Alat evaluasi Indeks KAMI ini dapat digunakan oleh organisasi dengan skala nasional,
                    maupun yang berukuran kecil. Penggunaan di Instansi pemerintah dapat dilakukan di tingkat pusat
                    maupun satuan kerja yang ada di tingkatan Direktorat Jenderal, Badan, Pusat atau Direktorat untuk
                    mendapatkan gambaran mengenai kematangan program kerja keamanan informasi yang dijalankannya.
                    Evaluasi ini dianjurkan untuk dilakukan oleh pejabat yang secara langsung bertanggungjawab dan
                    berwenang untuk mengelola keamanan informasi di seluruh cakupan instansinya.
                </p>
                <br>
                <a class="px-4 py-2 bg-slate-100 flex gap-2 w-fit rounded-xl font-bold focus:ring-2 focus:ring-slate-200 items-center"
                    href="#">
                    Unduh Dokumen Pengantar Indeks KAMI
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24"
                        style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                        <path d="M19 9h-4V3H9v6H5l7 8zM4 19h16v2H4z"></path>
                    </svg>
                </a>

                <section class="mt-6">
                    <div class="flex gap-4 flex-col">
                        <div class="flex gap-4">
                            <input class="bg-slate-100 px-4 py-2 rounded-xl focus:outline-2 focus:outline-yellow-300"
                                type="text" name="username" placeholder="Nama Pengguna">
                            <input class="bg-slate-100 px-4 py-2 rounded-xl focus:outline-2 focus:outline-yellow-300"
                                type="text" name="password" placeholder="Sandi">
                        </div>
                        <a class="px-4 py-2 font-bold rounded-xl w-fit bg-primary focus:ring-4 focus:ring-light-secondary"
                            href="#">Masuk</a>
                    </div>
                </section>
        </main>
    </div>
</x-layout>
