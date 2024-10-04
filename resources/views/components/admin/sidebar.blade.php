<style>
    aside::-webkit-scrollbar {
        background: transparent
    }
</style>
<aside class="fixed top-0 bg-slate-900 text-white h-full w-72 lg:shadow-xl p-4 transition-all duration-300 overflow-y-scroll lg:left-0"
:class="{ '-left-0': isOpenMobileMenu, '-left-72': !isOpenMobileMenu  }">
    <button class="lg:hidden"
    @click="isOpenMobileMenu = false">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-12" viewBox="0 0 24 24" style="fill: white;transform: ;msFilter:;"><path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path></svg>
    </button>
    <h1 class="font-extrabold text-3xl text-center h-16 items-center justify-center hidden lg:flex">SANDIKAMI</h1>

    <nav class="flex flex-col gap-4 mt-8"
    x-data="{ 
    isOpenMenuLayanan: {{ request()->is('admin/layanan/*') ? 'true' : 'false' }},
    isOpenMenuMonev: {{ request()->is('admin/monev/*') ? 'true' : 'false' }},
    isOpenMenuTataKelola: {{ request()->is('admin/tata-kelola/*') ? 'true' : 'false' }},
    }">
        {{-- Menu: Dashboard --}}
        <x-admin.sidebar-menu href="/admin" :active="request()->is('admin')">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white;transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm7.931 9H13V4.069A8.008 8.008 0 0 1 19.931 11zM4 12c0-4.072 3.061-7.436 7-7.931V12a.996.996 0 0 0 .111.438c.015.03.022.063.041.093l4.202 6.723A7.949 7.949 0 0 1 12 20c-4.411 0-8-3.589-8-8zm13.052 6.196L13.805 13h6.126a7.992 7.992 0 0 1-2.879 5.196z"></path></svg>
            Dashboard
        </x-admin.sidebar-menu>
        {{-- Menu: Kelola Profil --}}
        <x-admin.sidebar-menu href="/admin/kelola-profil" :active="request()->is('admin/kelola-profil')">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white;transform: ;msFilter:;"><path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path></svg>
            Kelola Profil
        </x-admin.sidebar-menu>
        {{-- Menu: Kelola Berita --}}
        <x-admin.sidebar-menu href="/admin/kelola-berita" :active="request()->is('admin/kelola-berita')">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white;transform: ;msFilter:;"><path d="M19.875 3H4.125C2.953 3 2 3.897 2 5v14c0 1.103.953 2 2.125 2h15.75C21.047 21 22 20.103 22 19V5c0-1.103-.953-2-2.125-2zm0 16H4.125c-.057 0-.096-.016-.113-.016-.007 0-.011.002-.012.008L3.988 5.046c.007-.01.052-.046.137-.046h15.75c.079.001.122.028.125.008l.012 13.946c-.007.01-.052.046-.137.046z"></path><path d="M6 7h6v6H6zm7 8H6v2h12v-2h-4zm1-4h4v2h-4zm0-4h4v2h-4z"></path></svg>
            Kelola Berita
        </x-admin.sidebar-menu>
        
        {{-- Menu: Layanan --}}
        <button class="{{ request()->is('admin/layanan/*') ? 'bg-slate-800' : false }} px-4 py-3 border-2 border-slate-800 w-full font-bold rounded-xl hover:bg-slate-800 flex justify-between"
        @click="isOpenMenuLayanan = !isOpenMenuLayanan">
            <div class="flex gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white;transform: ;msFilter:;"><path d="M4 21h9.62a3.995 3.995 0 0 0 3.037-1.397l5.102-5.952a1 1 0 0 0-.442-1.6l-1.968-.656a3.043 3.043 0 0 0-2.823.503l-3.185 2.547-.617-1.235A3.98 3.98 0 0 0 9.146 11H4c-1.103 0-2 .897-2 2v6c0 1.103.897 2 2 2zm0-8h5.146c.763 0 1.448.423 1.789 1.105l.447.895H7v2h6.014a.996.996 0 0 0 .442-.11l.003-.001.004-.002h.003l.002-.001h.004l.001-.001c.009.003.003-.001.003-.001.01 0 .002-.001.002-.001h.001l.002-.001.003-.001.002-.001.002-.001.003-.001.002-.001c.003 0 .001-.001.002-.001l.003-.002.002-.001.002-.001.003-.001.002-.001h.001l.002-.001h.001l.002-.001.002-.001c.009-.001.003-.001.003-.001l.002-.001a.915.915 0 0 0 .11-.078l4.146-3.317c.262-.208.623-.273.94-.167l.557.186-4.133 4.823a2.029 2.029 0 0 1-1.52.688H4v-6zM16 2h-.017c-.163.002-1.006.039-1.983.705-.951-.648-1.774-.7-1.968-.704L12.002 2h-.004c-.801 0-1.555.313-2.119.878C9.313 3.445 9 4.198 9 5s.313 1.555.861 2.104l3.414 3.586a1.006 1.006 0 0 0 1.45-.001l3.396-3.568C18.688 6.555 19 5.802 19 5s-.313-1.555-.878-2.121A2.978 2.978 0 0 0 16.002 2H16zm1 3c0 .267-.104.518-.311.725L14 8.55l-2.707-2.843C11.104 5.518 11 5.267 11 5s.104-.518.294-.708A.977.977 0 0 1 11.979 4c.025.001.502.032 1.067.485.081.065.163.139.247.222l.707.707.707-.707c.084-.083.166-.157.247-.222.529-.425.976-.478 1.052-.484a.987.987 0 0 1 .701.292c.189.189.293.44.293.707z"></path></svg>
                Layanan
            </div>
            <svg class="transition-all duration-300 w-6"
            :class="{ 'rotate-180': isOpenMenuLayanan, 'rotate-0': !isOpenMenuLayanan }"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="fill: white;transform: ;msFilter:;"><path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path></svg>
        </button>
        <div class="ml-12 flex flex-col gap-3"
        x-show="isOpenMenuLayanan">
            {{-- Sub Menu: Indeks KAMI --}}
            <a href="/admin/layanan/tte" class="{{ request()->is('admin/layanan/tte') ? 'bg-slate-800' : false }} font-semibold px-4 py-2 border-2 border-slate-800 w-full rounded-xl hover:bg-slate-800">
                TTE
            </a>
            {{-- Sub Menu: CSIRT --}}
            <a href="csirt" class="font-semibold px-4 py-2 border-2 border-slate-800 w-full rounded-xl hover:bg-slate-800">
                CSIRT
            </a>
        </div>

        {{-- Menu: Monev --}}
        <button class="px-4 py-3 border-2 border-slate-800 w-full font-bold rounded-xl hover:bg-slate-800 flex justify-between"
        @click="isOpenMenuMonev = !isOpenMenuMonev">
            <div class="flex gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white;transform: ;msFilter:;"><path d="M3 3v17a1 1 0 0 0 1 1h17v-2H5V3H3z"></path><path d="M15.293 14.707a.999.999 0 0 0 1.414 0l5-5-1.414-1.414L16 12.586l-2.293-2.293a.999.999 0 0 0-1.414 0l-5 5 1.414 1.414L13 12.414l2.293 2.293z"></path></svg>
                Monev
            </div>
            <svg class="transition-all duration-300 w-6"
            :class="{ 'rotate-180': isOpenMenuMonev, 'rotate-0': !isOpenMenuMonev }"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="fill: white;transform: ;msFilter:;"><path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path></svg>
        </button>
        <div class="ml-12 flex flex-col gap-3"
        x-show="isOpenMenuMonev">
            {{-- Sub Menu: Indeks KAMI --}}
            <a href="indeks-kami" class="font-semibold px-4 py-2 border-2 border-slate-800 w-full rounded-xl hover:bg-slate-800">Indeks KAMI</a>
            {{-- Sub Menu: Cyber Security Maturity (CSM) --}}
            <a href="csm" class="font-semibold px-4 py-2 border-2 border-slate-800 w-full rounded-xl hover:bg-slate-800">CSM</a>
            {{-- Sub Menu: Evaluasi Pelaksanaan Paminfo (EVAPERPAL) --}}
            <a href="evaperpal" class="font-semibold px-4 py-2 border-2 border-slate-800 w-full rounded-xl hover:bg-slate-800">Evaperpal</a>
        </div>

        {{-- Menu: Tata kelola --}}
        <button class="px-4 py-3 border-2 border-slate-800 w-full font-bold rounded-xl hover:bg-slate-800 flex justify-between"
        @click="isOpenMenuTataKelola = !isOpenMenuTataKelola">
            <div class="flex gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white;transform: ;msFilter:;"><path d="M19 3c-1.654 0-3 1.346-3 3 0 .502.136.968.354 1.385l-1.116 1.302A3.976 3.976 0 0 0 13 8c-.739 0-1.425.216-2.02.566L9.566 7.152A3.449 3.449 0 0 0 10 5.5C10 3.57 8.43 2 6.5 2S3 3.57 3 5.5 4.57 9 6.5 9c.601 0 1.158-.166 1.652-.434L9.566 9.98A3.972 3.972 0 0 0 9 12c0 .997.38 1.899.985 2.601l-1.692 1.692.025.025A2.962 2.962 0 0 0 7 16c-1.654 0-3 1.346-3 3s1.346 3 3 3 3-1.346 3-3c0-.476-.121-.919-.318-1.318l.025.025 1.954-1.954c.421.15.867.247 1.339.247 2.206 0 4-1.794 4-4a3.96 3.96 0 0 0-.439-1.785l1.253-1.462c.364.158.764.247 1.186.247 1.654 0 3-1.346 3-3s-1.346-3-3-3zM7 20a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM5 5.5C5 4.673 5.673 4 6.5 4S8 4.673 8 5.5 7.327 7 6.5 7 5 6.327 5 5.5zm8 8.5c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2zm6-7a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"></path></svg>
                Tata Kelola
            </div>
            <svg class="transition-all duration-300 w-6"
            :class="{ 'rotate-180': isOpenMenuTataKelola, 'rotate-0': !isOpenMenuTataKelola }"
            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white;transform: ;msFilter:;"><path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path></svg>
        </button>
        <div class="ml-12 flex flex-col gap-3"
        x-show="isOpenMenuTataKelola">
            {{-- Sub Menu: SMKI --}}
            <a href="indeks-kami" class="font-semibold px-4 py-2 border-2 border-slate-800 w-full rounded-xl hover:bg-slate-800">SMKI</a>
        </div>

    </nav>
</aside>