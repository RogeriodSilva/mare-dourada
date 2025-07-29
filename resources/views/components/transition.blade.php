@props([
    'transition' => $transition ?? 'fade',
])

@switch($transition)
    @case('fade')
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    @break

    @case('slider')
        @if ($direction == 'right')
            x-transition:enter="transform ease-out duration-300"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transform ease-in duration-100"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
        @elseif ($direction == 'left')
            x-transition:enter="transform ease-out duration-300"
            x-transition:enter-start="translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transform ease-in duration-100"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full"
        @endif
    @break

@endswitch
