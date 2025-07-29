<section x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show" x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)"
    x-show="show" x-transition:enter="transition transform ease-out duration-500"
    x-transition:enter-start="translate-y-10 opacity-0" x-transition:enter-end="translate-y-0 opacity-100"
    x-transition:leave="transition transform ease-in duration-500" x-transition:leave-start="opacity-100 translate-x-0"
    x-transition:leave-end="opacity-0 translate-x-full" class="absolute top-15 right-0 text-center overflow-hidden">

    <section class="max-w-[400px] flex flex-col gap-y-2 rounded min-w-[300px] bg-white p-4">

        <h1 class="text-lg text-left">{{ $title }}</h1>
        <p class="text-justify text-sm">{{ $message }}</p>

        <!-- Barra de tempo -->
        <div class="absolute bottom-0 left-0 h-1 bg-gray-200 w-full overflow-hidden rounded-b">
            <div class="h-full bg-blue-500 origin-left" x-init="$el.style.width = '100%';
            $el.style.transition = 'width 5s linear';
            setTimeout(() => $el.style.width = '0%', 10)"></div>
        </div>
    </section>


</section>
