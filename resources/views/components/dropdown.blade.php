<section x-data="{ open: false, canA: true }" class="relative flex flex-col"

    x-on:mouseenter="open = (typeof hover !== 'undefined') ? true : open"
    x-on:mouseleave="open = (typeof hover !== 'undefined' || typeof focusclose !== 'undefined') ? false : open"
    x-init= "()=>{

        if(typeof active !== 'undefined'){
            open = active
            canA = (typeof canC !== 'undefined') ? canC : true
        }

    }">

    <button x-on:click="open = (canA) ? !open : open" type="button"
        class="w-full text-left cursor-pointer py-2">{{ $trigger }}</button>

    <section x-show="open" class="relative absolute z-50">
        {{ $content }}
    </section>

</section>
