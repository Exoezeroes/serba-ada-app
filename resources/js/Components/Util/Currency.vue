<script setup>
import { computed } from "vue";

const props = defineProps({
  value: { type: Number },
});

const value = computed(() => {
  // convert number to currency
  return `Rp${props.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")}`;
});
</script>

<template>
  {{ value }}
</template>
