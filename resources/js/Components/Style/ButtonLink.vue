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
    class="mx-auto h-10 w-24 rounded-md font-semibold transition duration-75 ease-in-out"
    :class="{
      'bg-green-500 hover:bg-green-600 active:bg-green-700':
        button === 'primary',
      'border-2 border-violet-700 bg-gray-900 text-violet-400 hover:border-0 hover:bg-violet-700 hover:text-white active:bg-violet-900':
        button === 'secondary',
      'bg-red-500 hover:bg-red-600 active:bg-red-700': button === 'danger',
    }"
  >
    <slot />
  </Link>
</template>
