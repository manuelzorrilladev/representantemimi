<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    href: String,
    as: String,
});
</script>

<template>
    <div>
        <button v-if="as == 'button'" type="submit" class="block w-full px-4 py-2 text-start text-sm leading-5 text-custom-light hover:bg-custom-light hover:text-custom-red focus:outline-none focus:bg-custom-light  transition duration-150 ease-in-out bg-custom-red ">
            <slot />
        </button>

        <a v-else-if="as =='a'" :href="href" class="block px-4 py-2 text-sm leading-5 text-custom-light hover:bg-custom-light hover:text-custom-red focus:outline-none focus:bg-custom-light  transition duration-150 ease-in-out bg-custom-red ">
            <slot />
        </a>

        <Link v-else :href="href" class="block px-4 py-2 text-sm leading-5 text-custom-light hover:bg-custom-light hover:text-custom-red focus:outline-none focus:bg-custom-light  transition duration-150 ease-in-out bg-custom-red ">
            <slot />
        </Link>
    </div>
</template>
