@props(['active' => false])

<a {{ $attributes }} class="{{ $active ? 'bg-slate-800' : '' }} px-4 py-3 w-full font-bold rounded-xl flex items-center gap-2 border-2 border-slate-800 hover:bg-slate-800">
    {{ $slot }}
</a>