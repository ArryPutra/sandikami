<header class="px-6 h-24 flex items-center justify-between fixed top-0 w-full bg-primary z-10" x-data="{
    isOpenMenuLayanan: false,
    isOpenMenuMonev: false,
    isOpenMenuTataKelola: false,

    isOpenMobileMenu: false
}">
    <div class="flex items-center gap-4">
        <img class="w-10" src="/images/logo-prov-kalsel.png" alt="logo-prov-kalsel">
        <div>
            <h1 class="text-3xl font-extrabold text-black">
                SANDIKAMI
            </h1>
            <p class="text-sm">Bidang Persandian dan Keamanan Informasi</p>
        </div>
    </div>

    <nav class="gap-6 relative flex max-lg:absolute max-lg:flex-col max-lg:bg-secondary max-lg:w-full max-lg:left-0 max-lg:p-6 max-lg:shadow-xl max-lg:top-24"
        x-show="isOpenMobileMenu" x-init="isOpenMobileMenu = window.matchMedia('(min-width: 1024px)').matches;
        
        window.matchMedia('(min-width: 1024px)').addEventListener('change', (e) => {
            isOpenMobileMenu = e.matches;
        });">
        {{-- Menu: Beranda --}}
        <a href="/" class="text-lg font-semibold">Beranda</a>
        {{-- Menu: Berita --}}
        <a href="berita" class="text-lg font-semibold">Berita</a>
        {{-- Menu: Profil --}}
        <a href="profil" class="text-lg font-semibold">Profil</a>
        {{-- Menu Layanan --}}
        <a class="text-lg font-semibold flex items-center gap-1 cursor-pointer"
            @click="isOpenMenuLayanan = !isOpenMenuLayanan">
            Layanan
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                <path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path>
            </svg>
            <div class="bg-white lg:shadow-xl rounded-xl lg:absolute left-0 top-20 w-full flex flex-col gap-4 px-4 lg:pb-4 max-lg:-mt-6 max-lg:bg-transparent"
                x-show="isOpenMenuLayanan" @click.outside="isOpenMenuLayanan = false"
                x-transition:enter="transition ease-out duration-100 transform"
                x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75 transform"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
                <a href="tte" class="lg:hover:bg-slate-50 lg:p-3 rounded-xl">
                    <p class="font-semibold hover:underline">Tanda Tangan Elektronik (TTE)</p>
                    <p class="text-slate-500 hidden lg:block">Tulisan identitas diri seseorang sebagai keabsahan/sah
                        tidaknya sebuah dokumen.</p>
                </a>
                <a href="csirt" class="lg:hover:bg-slate-50 lg:p-3 rounded-xl">
                    <p class="font-semibold hover:underline">CSIRT</p>
                    <p class="text-slate-500 hidden lg:block">Menyediakan layanan dan dukungan kepada organisasi untuk
                        mencegah, mengelola dan menanggapi insiden keamanan informasi.</p>
                </a>
            </div>
        </a>
        {{-- Menu Monev --}}
        <a class="text-lg font-semibold flex items-center gap-1 cursor-pointer"
            @click="isOpenMenuMonev = !isOpenMenuMonev">
            Monev
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                <path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path>
            </svg>
            <div class="bg-white lg:shadow-xl rounded-xl lg:absolute left-0 top-20 w-full flex flex-col gap-4 px-4 lg:pb-4 max-lg:bg-transparent max-lg:-mt-6"
                x-show="isOpenMenuMonev" @click.outside="isOpenMenuMonev = false"
                x-transition:enter="transition ease-out duration-100 transform"
                x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75 transform"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
                <a href="indeks-kami" class="lg:hover:bg-slate-50 lg:p-3 rounded-xl">
                    <p class="font-semibold hover:underline">Indeks KAMI</p>
                    <p class="text-slate-500 hidden lg:block">Alat evaluasi untuk menganalisa tingkat kesiapan
                        pengamanan informasi di suatu organisasi.</p>
                </a>
                <a href="csm" class="lg:hover:bg-slate-50 lg:p-3 rounded-xl">
                    <p class="font-semibold hover:underline">Cyber Security Maturity (CSM)</p>
                    <p class="text-slate-500 hidden lg:block">Tingkat kematangan suatu organisasi dalam menerapkan
                        langkah-langkah keamanan siber secara efektif.</p>
                </a>
                <a href="evaperpal" class="lg:hover:bg-slate-50 lg:p-3 rounded-xl">
                    <p class="font-semibold hover:underline">Evaluasi Pelaksanaan Paminfo (EVAPERPAL)</p>
                    <p class="text-slate-500 hidden lg:block">Bentuk evaluasi yang digunakan oleh kepolisian, khususnya
                        di Indonesia, untuk menilai efektivitas pelaksanaan Paminfo (Pengamanan Informasi).</p>
                </a>
            </div>
        </a>
        {{-- Menu Tata Kelola --}}
        <a class="text-lg font-semibold flex items-center gap-1 cursor-pointer"
            @click="isOpenMenuTataKelola = !isOpenMenuTataKelola">
            Tata Kelola
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                <path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path>
            </svg>
            <div class="bg-white lg:shadow-xl rounded-xl lg:absolute left-0 top-20 w-full flex flex-col gap-4 px-4 lg:pb-4 max-lg:bg-transparent max-lg:-mt-6"
                x-show="isOpenMenuTataKelola" @click.outside="isOpenMenuTataKelola = false"
                x-transition:enter="transition ease-out duration-100 transform"
                x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75 transform"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
                <a href="smki" class="hover:bg-slate-50 lg:p-3 rounded-xl">
                    <p class="font-semibold hover:underline max-lg:font-medium">SMKI</p>
                    <p class="text-slate-500 hidden lg:block">Jelaskan ...</p>
                </a>
            </div>
        </a>
    </nav>

    <button class="lg:hidden" @click="isOpenMobileMenu = !isOpenMobileMenu">
        <svg x-show="!isOpenMobileMenu" xmlns="http://www.w3.org/2000/svg" class="w-12" viewBox="0 0 24 24"
            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
            <path d="M4 6h16v2H4zm4 5h12v2H8zm5 5h7v2h-7z"></path>
        </svg>
        <svg x-show="isOpenMobileMenu" xmlns="http://www.w3.org/2000/svg" class="w-12" viewBox="0 0 24 24"
            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
            <path
                d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
            </path>
        </svg>
    </button>

</header>
