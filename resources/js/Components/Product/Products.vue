<script setup>
import Product from "@/Components/Product/Product.vue";

const props = defineProps({
  products: { type: Array },
});
</script>

<template>
  <div>
    <article v-for="product in products" :key="product.slug">
      <Transition
        appear
        enter-from-class="scale-105 opacity-0"
        enter-to-class="scale-100 opacity-100"
        enter-active-class="transition ease-in delay-75"
      >
        <Product :product="product" />
      </Transition>
    </article>
  </div>
</template>
