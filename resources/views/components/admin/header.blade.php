<header class="w-full h-24 bg-white flex items-center justify-between px-6 fixed top-0 lg:pl-[19.5rem]"
    x-data="{ isOpenProfileMenu: false }">
    <button class="lg:hidden" @click="isOpenMobileMenu = true">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-12" viewBox="0 0 24 24"
            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
            <path d="M4 11h12v2H4zm0-5h16v2H4zm0 12h7.235v-2H4z"></path>
        </svg>
    </button>
    <h1 class="text-3xl font-extrabold hidden lg:block">
        {{ $slot }}
    </h1>
    <div class="flex items-center gap-4 cursor-pointer relative" @click="isOpenProfileMenu = !isOpenProfileMenu">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
            <path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path>
        </svg>
        <img class="w-12 h-12 rounded-full object-cover"
            src="https://w0.peakpx.com/wallpaper/498/757/HD-wallpaper-cristiano-ronaldo-face-closeup-cristiano-ronaldo-face-closeup-football-smile-suit.jpg">
    </div>
    <div class="absolute bg-white top-28 right-6 p-4 shadow-xl rounded-xl w-60" x-show="isOpenProfileMenu"
        x-transition:enter="transition ease-out duration-100 transform" x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75 transform"
        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
        @click.outside="isOpenProfileMenu = false">
        <h1 class="font-semibold text-lg">Cristiano Ronaldo</h1>
        <h2>Admin</h2>
        <div class="w-full h-0.5 bg-slate-100 my-4"></div>
        <div class="flex flex-col gap-4">
            <a href="#"
                class="bg-white border-slate-100 border-2 font-semibold hover:bg-slate-100 px-3 py-2.5 rounded-xl flex gap-2">Profil</a>
            <a href="/"
                class="bg-red-500 font-semibold text-white px-3 py-2.5 rounded-xl flex gap-2 hover:bg-red-600 focus:outline-2 focus:outline-red-400 focus:ring-4 focus:ring-red-400">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    style="fill: white;transform: ;msFilter:;">
                    <path d="M16 13v-2H7V8l-5 4 5 4v-3z"></path>
                    <path
                        d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z">
                    </path>
                </svg>
                Keluar
            </a>
        </div>
    </div>
</header>