<script setup>
const props = defineProps({
  products: {type: Object}
});
</script>

<template>
  <div v-for="product, index in products" :key="index">
    {{ index }}
  </div>
</template>