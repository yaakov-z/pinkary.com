@props(['disabled' => false])

<input
    @disabled($disabled)
    {!! $attributes->merge(['class' => 'dark:text-white text-black dark:caret-white caret-black focus:border-pink-500 dark:border-slate-800 border-slate-300 dark:bg-slate-900/50 bg-slate-50/20 backdrop-blur-sm dark:focus:ring-slate-900 focus:ring-slate-100 rounded-lg shadow-sm sm:text-sm']) !!}
/>
