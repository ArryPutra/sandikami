<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- Section: Welcome --}}
    <section
        class="bg-gradient-to-r from-primary to-secondary lg:min-h-screen flex lg:justify-center lg:items-center lg:-mt-14">
        <div class="max-w-5xl flex max-lg:flex-col-reverse p-6">
            <div class="flex flex-col max-lg:mt-6 justify-center">
                <h2 class="text-2xl">Selama Datang di</h2>
                <h1 class="text-3xl font-bold">Website Persandian dan Keamanan Informasi Diskominfo Kalsel</h1>
                <div class="mt-4 flex gap-4">
                    <img class="h-14" src="images/logo-prov-kalsel.png">
                    <img class="h-14" src="images/logo-csirt-kalsel.png">
                    <img class="h-14" src="images/logo-cyber-kalsel.png">
                </div>
                <a href="#kontak"
                    class="w-fit border-2 border-black px-4 py-3 mt-6 flex rounded-xl hover:shadow-xl transition-all">
                    Kontak Kami
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                        <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                    </svg>
                </a>
            </div>
            <img class="w-96 h-96 max-lg:w-64 max-lg:h-64" src="images/illustration-network.png">
        </div>
    </section>
    {{-- Section: Profil --}}
    <section class=" bg-gradient-to-r from-primary to-secondary flex justify-center">
        <div class="max-w-5xl w-full flex items-start p-6 flex-col">
            <h1 class="text-3xl font-bold">Profil SandiKami Diskominfo Kalsel</h1>
            <p class="mt-2">
                Secara umum, urusan persandian dan keamanan informasi di laksanakan Bidang Persandian dan Keamanan
                Informasi Dinas Komunikasi dan Informatika Kalimantan Selatan, dimana meliputi kegiatan pengamanan
                data/informasi yang dilaksanakan dengan menerapkan konsep, teori, seni dan ilmu kripto beserta ilmu
                pendukung lainnya sehingga terjaganya kerahasiaan, keaslian, keutuhan, ketersediaan dan
                kenirsangkalan informasi. Kegiatan urusan persandian dan keamanan informasi pada Pemerintah Daerah
                mengacu pada kebijakan Badan Siber dan Sandi Negara (BSSN).
            </p>
            <a href="#kontak"
                class="w-fit border-2 border-black px-4 py-3 mt-4 flex rounded-xl hover:shadow-xl transition-all">
                Lihat Selengkapnya
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg>
            </a>
        </div>
    </section>
    {{-- Section: Berita --}}
    <section class="bg-gradient-to-b from-light-secondary to-white flex justify-center">
        <div class="max-w-5xl w-full flex items-start p-6 flex-col">
            <h1 class="text-3xl font-bold">Daftar Berita</h1>
            <div class="mt-6 grid md:grid-cols-2 flex-wrap justify-between w-full gap-10">
                @foreach ($berita as $berita)
                    <a href="/berita/{{ $berita['slug'] }}">
                        <div class="w-full">
                            <div class="w-full overflow-hidden rounded-xl">
                                <img class="w-full aspect-video object-cover hover:scale-110 transition-all"
                                    src="{{ $berita['gambar'] }}">
                            </div>
                            <h1 class="font-bold text-2xl mt-2">{{ $berita['judul'] }}</h1>
                            <h2 class="text-sm">{{ $berita['tanggal'] }}</h2>
                            <h2>{{ Str::limit($berita['isi'], 200) }}</h2>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Section: Berita --}}
    <section class="bg-white flex justify-center">
        <div class="max-w-5xl w-full flex items-start p-6 flex-col">
            <h1 class="text-3xl font-bold">Layanan SandiKami</h1>

            <div class="grid lg:grid-cols-2 gap-6 mt-6">

                <div class="bg-gradient-to-r from-white to-light-secondary border-2 border-slate-200 p-4 rounded-xl">
                    <svg class="fill-primary size-10" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path
                            d="M18.404 2.998c-.757-.754-2.077-.751-2.828.005l-1.784 1.791L11.586 7H7a.998.998 0 0 0-.939.658l-4 11c-.133.365-.042.774.232 1.049l2 2a.997.997 0 0 0 1.049.232l11-4A.998.998 0 0 0 17 17v-4.586l2.207-2.207v-.001h.001L21 8.409c.378-.378.586-.881.585-1.415 0-.535-.209-1.038-.588-1.415l-2.593-2.581zm-3.111 8.295A.996.996 0 0 0 15 12v4.3l-9.249 3.363 4.671-4.671c.026.001.052.008.078.008A1.5 1.5 0 1 0 9 13.5c0 .026.007.052.008.078l-4.671 4.671L7.7 9H12c.266 0 .52-.105.707-.293L14.5 6.914 17.086 9.5l-1.793 1.793zm3.206-3.208-2.586-2.586 1.079-1.084 2.593 2.581-1.086 1.089z">
                        </path>
                    </svg>
                    <h1 class="font-bold text-xl mt-2">Tanda Tangan Elektronik (TTE)</h1>
                    <p>
                        Tanda tangan merupakan tanda tulisan identitas diri seseorang sebagai keabsahan/sah tidaknya
                        sebuah dokumen. Di era digital ini, dokumen digital ditandatangani menggunakan Tanda Tangan
                        Elektronik (TTE) tersertifikasi.
                    </p>
                    <a class="flex gap-2 mt-4 border-2 border-slate-200 px-4 py-2 rounded-xl w-fit hover:bg-light-secondary"
                        href="#">
                        Lihat
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            style="transform: ;msFilter:;">
                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                        </svg>
                    </a>
                </div>

                <div class="bg-gradient-to-r from-white to-light-secondary border-2 border-slate-200 p-4 rounded-xl">
                    <svg class="fill-primary size-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        style="transform: ;msFilter:;">
                        <path
                            d="M20.995 6.9a.998.998 0 0 0-.548-.795l-8-4a1 1 0 0 0-.895 0l-8 4a1.002 1.002 0 0 0-.547.795c-.011.107-.961 10.767 8.589 15.014a.987.987 0 0 0 .812 0c9.55-4.247 8.6-14.906 8.589-15.014zM12 19.897C5.231 16.625 4.911 9.642 4.966 7.635L12 4.118l7.029 3.515c.037 1.989-.328 9.018-7.029 12.264z">
                        </path>
                        <path d="m11 12.586-2.293-2.293-1.414 1.414L11 15.414l5.707-5.707-1.414-1.414z"></path>
                    </svg>
                    <h1 class="font-bold text-xl mt-2">CSIRT</h1>
                    <p>
                        Computer Security Insident Response Team (CSIRT) merupakan tim atau entitas dalam suatu lembaga
                        yang menyediakan layanan dan dukungan kepada organisasi untuk mencegah, mengelola dan menanggapi
                        insiden keamanan informasi.
                    </p>
                    <a class="flex gap-2 mt-4 border-2 border-slate-200 px-4 py-2 rounded-xl w-fit hover:bg-light-secondary"
                        href="#">
                        Lihat
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            style="transform: ;msFilter:;">
                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </section>

    {{-- Section: Monitoring dan Evaluasi --}}
    <section class="bg-gradient-to-r from-primary to-secondary flex justify-center">
        <div class="max-w-5xl w-full flex p-6 flex-col">
            <h1 class="text-3xl font-bold text-center">Monitoring dan Evaluasi</h1>
            <p class="text-center mt-2">
                Monitoring dan Evaluasi adalah proses yang digunakan untuk mengawasi pelaksanaan kegiatan serta mengukur
                dan menilai hasil dari implementasi kebijakan, program, atau proyek tertentu. Monitoring berfokus pada
                pengumpulan data secara kontinu untuk memastikan bahwa pelaksanaan kegiatan sesuai dengan rencana yang
                ditetapkan, sementara evaluasi bertujuan untuk menilai efektivitas, efisiensi, dan dampak dari kegiatan
                tersebut.
            </p>

            <div class="flex flex-col gap-6 mt-10">

                <div class="bg-gradient-to-r from-white to-light-secondary p-4 rounded-xl">
                    <div class="flex gap-2 items-center">
                        <svg class="fill-primary size-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            style="transform: ;msFilter:;">
                            <path
                                d="M20.995 6.9a.998.998 0 0 0-.548-.795l-8-4a1 1 0 0 0-.895 0l-8 4a1.002 1.002 0 0 0-.547.795c-.011.107-.961 10.767 8.589 15.014a.987.987 0 0 0 .812 0c9.55-4.247 8.6-14.906 8.589-15.014zM12 19.897C5.231 16.625 4.911 9.642 4.966 7.635L12 4.118l7.029 3.515c.037 1.989-.328 9.018-7.029 12.264z">
                            </path>
                            <path d="m11 12.586-2.293-2.293-1.414 1.414L11 15.414l5.707-5.707-1.414-1.414z"></path>
                        </svg>
                        <h1 class="font-bold text-xl">Indeks KAMI</h1>
                    </div>
                    <p class="mt-2">
                        Indeks KAMI adalah alat evaluasi untuk menganalisa tingkat kesiapan pengamanan informasi di
                        suatu
                        organisasi. Alat evaluasi ini tidak ditujukan untuk menganalisa kelayakan atau efektifitas
                        bentuk
                        pengamanan yang ada, melainkan sebagai perangkat untuk memberikan gambaran kondisi kesiapan
                        (kelengkapan dan kematangan) kerangka kerja keamanan informasi kepada pimpinan
                        Instansi/Perusahaan.
                    </p>
                    <a class="flex gap-2 mt-4 border-2 border-slate-200 px-4 py-2 rounded-xl w-fit hover:bg-light-secondary"
                        href="/indeks-kami">
                        Lihat Selengkapnya
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            style="transform: ;msFilter:;">
                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                        </svg>
                    </a>
                </div>
                <div class="bg-gradient-to-r from-white to-light-secondary p-4 rounded-xl">
                    <div class="flex gap-2 items-center">
                        <svg class="fill-primary size-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            style="transform: ;msFilter:;">
                            <path
                                d="M20.995 6.9a.998.998 0 0 0-.548-.795l-8-4a1 1 0 0 0-.895 0l-8 4a1.002 1.002 0 0 0-.547.795c-.011.107-.961 10.767 8.589 15.014a.987.987 0 0 0 .812 0c9.55-4.247 8.6-14.906 8.589-15.014zM12 19.897C5.231 16.625 4.911 9.642 4.966 7.635L12 4.118l7.029 3.515c.037 1.989-.328 9.018-7.029 12.264z">
                            </path>
                            <path d="m11 12.586-2.293-2.293-1.414 1.414L11 15.414l5.707-5.707-1.414-1.414z"></path>
                        </svg>
                        <h1 class="font-bold text-xl">Cyber Security Maturity (CSM)</h1>
                    </div>
                    <p class="mt-2">
                        Cyber Security Maturity adalah ukuran atau tingkat kematangan suatu organisasi dalam menerapkan
                        langkah-langkah keamanan siber secara efektif. Konsep ini menggambarkan seberapa baik suatu
                        organisasi memitigasi risiko, melindungi data, dan merespons ancaman siber, serta seberapa kuat
                        tata kelola keamanan siber yang diterapkan.
                    </p>
                    <a class="flex gap-2 mt-4 border-2 border-slate-200 px-4 py-2 rounded-xl w-fit hover:bg-light-secondary"
                        href="#">
                        Lihat Selengkapnya
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            style="transform: ;msFilter:;">
                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                        </svg>
                    </a>
                </div>
                <div class="bg-gradient-to-r from-white to-light-secondary p-4 rounded-xl">
                    <div class="flex gap-2 items-center">
                        <svg class="fill-primary size-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            style="transform: ;msFilter:;">
                            <path
                                d="M20.995 6.9a.998.998 0 0 0-.548-.795l-8-4a1 1 0 0 0-.895 0l-8 4a1.002 1.002 0 0 0-.547.795c-.011.107-.961 10.767 8.589 15.014a.987.987 0 0 0 .812 0c9.55-4.247 8.6-14.906 8.589-15.014zM12 19.897C5.231 16.625 4.911 9.642 4.966 7.635L12 4.118l7.029 3.515c.037 1.989-.328 9.018-7.029 12.264z">
                            </path>
                            <path d="m11 12.586-2.293-2.293-1.414 1.414L11 15.414l5.707-5.707-1.414-1.414z"></path>
                        </svg>
                        <h1 class="font-bold text-xl">Evaluasi Pelaksanaan Paminfo (EVAPERPAL)</h1>
                    </div>
                    <p class="mt-2">
                        Evaluasi Pelaksanaan Paminfo (EVAPERPAL) adalah suatu bentuk evaluasi yang digunakan oleh
                        kepolisian, khususnya di Indonesia, untuk menilai efektivitas pelaksanaan Paminfo (Pengamanan
                        Informasi).
                    </p>
                    <a class="flex gap-2 mt-4 border-2 border-slate-200 px-4 py-2 rounded-xl w-fit hover:bg-light-secondary"
                        href="#">
                        Lihat Selengkapnya
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            style="transform: ;msFilter:;">
                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </section>

    {{-- Section: Tata Kelola --}}
    <section class="flex justify-center">
        <div class="max-w-5xl w-full flex p-6 flex-col">
            <h1 class="text-3xl font-bold">Tata Kelola</h1>
            <p class="mt-2">
                Tata Kelola Sandikami adalah kerangka kerja yang dirancang untuk mengelola, mengarahkan, dan mengawasi
                upaya-upaya terkait pengamanan informasi di suatu organisasi. "Sandikami" seringkali mengacu pada
                kebijakan atau aturan yang berhubungan dengan keamanan siber dan pengelolaan informasi sensitif,
                termasuk enkripsi, autentikasi, dan prosedur perlindungan data.
            </p>

            <div class="flex flex-col gap-6 mt-10">

                <div class="bg-gradient-to-r from-white to-light-secondary p-4 rounded-xl border-2 border-slate-200">
                    <div class="flex gap-2 items-center">
                        <svg class="fill-primary size-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            style="transform: ;msFilter:;">
                            <path
                                d="M20.995 6.9a.998.998 0 0 0-.548-.795l-8-4a1 1 0 0 0-.895 0l-8 4a1.002 1.002 0 0 0-.547.795c-.011.107-.961 10.767 8.589 15.014a.987.987 0 0 0 .812 0c9.55-4.247 8.6-14.906 8.589-15.014zM12 19.897C5.231 16.625 4.911 9.642 4.966 7.635L12 4.118l7.029 3.515c.037 1.989-.328 9.018-7.029 12.264z">
                            </path>
                            <path d="m11 12.586-2.293-2.293-1.414 1.414L11 15.414l5.707-5.707-1.414-1.414z"></path>
                        </svg>
                        <h1 class="font-bold text-xl">Sistem Manajemen Keamanan Informasi (SMKI)</h1>
                    </div>
                    <p class="mt-2">
                        Sistem Manajemen Keamanan Informasi (SMKI) atau dalam bahasa Inggris disebut Information
                        Security Management System (ISMS) adalah suatu sistem terstruktur yang digunakan untuk mengelola
                        dan melindungi informasi sensitif di suatu organisasi.
                    </p>
                    <a class="flex gap-2 mt-4 border-2 border-slate-200 px-4 py-2 rounded-xl w-fit hover:bg-light-secondary"
                        href="#">
                        Lihat Selengkapnya
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            style="transform: ;msFilter:;">
                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </section>
</x-layout>
