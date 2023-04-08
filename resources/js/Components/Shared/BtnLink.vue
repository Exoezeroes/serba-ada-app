<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    button: { type: String, default: "primary" },
});
</script>

<template>
    <Link
        href="#"
        as="button"
        class="mx-auto h-10 w-24 rounded-md border-2 py-2 font-semibold"
        :class="{
            'border-blue-600 bg-blue-600 text-white hover:border-blue-900 hover:bg-blue-900':
                button === 'primary',
            'border-blue-600 bg-white text-blue-600 hover:border-blue-400 hover:bg-blue-400 hover:text-white':
                button === 'secondary',
        }"
    >
        <slot />
    </Link>
</template>
