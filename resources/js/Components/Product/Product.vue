<script setup>
import { Link } from "@inertiajs/vue3";
import GradientBorder from "../Style/GradientBorder.vue";
import Currency from "../Util/Currency.vue";

const props = defineProps({
  product: { type: Object },
});
</script>

<template>
  <GradientBorder class="h-fit">
    <Link as="button" :href="`/product/${product.slug}`" preserve-scroll>
      <figure
        class="flex h-full flex-col justify-between rounded bg-gray-800 px-2 pt-2 transition duration-100 ease-in-out hover:bg-gray-900"
      >
        <img
          class="aspect-square rounded object-contain"
          :src="
            product.img_path
              ? product.img_path
              : '/storage/category/400x400.jpg'
          "
          alt="400x400"
        />
        <figcaption class="py-1 font-semibold">
          <span class="line-clamp-1" v-text="product.title" />
          <span class="text-lg font-extrabold text-indigo-400">
            <Currency :value="product.price" />
          </span>
        </figcaption>
      </figure>
    </Link>
  </GradientBorder>
</template>
