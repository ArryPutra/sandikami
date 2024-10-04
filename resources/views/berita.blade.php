<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="flex justify-center">
        <main class="max-w-5xl w-full p-6">
            <x-buttons.back-button></x-buttons.back.button>
                <img class="aspect-video object-cover rounded-xl" src="{{ $berita['gambar'] }}">
                <h1 class="text-3xl font-bold mt-4">{{ $berita['judul'] }}</h1>
                <p>{{ $berita['tanggal'] }}</p>
                <h1 class="mt-4">{{ $berita['isi'] }}</h1>
        </main>
    </div>
</x-layout>
