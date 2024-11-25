<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type" class="inline-flex items-center px-4 py-2 bg-custom-red  rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:shadow-[5px_5px_0px_0px_#d54d37] hover:bg-custom-light hover:text-custom-red border border-custom-red focus:bg-custom-red active:bg-custom-red focus:outline-none focus:ring-2 focus:ring-bg-custom-red focus:ring-offset-2 transition ease-in-out duration-150">
        <slot />
    </button>
</template>
