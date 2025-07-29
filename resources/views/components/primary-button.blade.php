<button {{ $attributes->merge([
    'class' => 'bg-[#024873] uppercase px-4 py-2 text-sm rounded f-raleway text-[#FAF9F6] cursor-pointer hover:bg-[#87CBF5] transition ease-in-out duration-300',
]) }}>{{ $slot }}</button>
