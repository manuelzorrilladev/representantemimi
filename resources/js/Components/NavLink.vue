<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: String,
    active: Boolean,
});


</script>

<template>
    <div>

        <Link :href="href" class=" border bg-custom-red border-custom-red duration-200 hover:bg-custom-light hover:text-custom-red text-xl lg:text-3xl w-full text-center py-2 md:py-2 lg:py-6 hover:shadow-[5px_5px_0px_0px_#d54d37]">
            <slot />
        </Link>
    </div>
</template>
