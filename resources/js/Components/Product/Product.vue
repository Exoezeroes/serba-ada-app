<script setup>
import { Link } from "@inertiajs/vue3";
import GradientBorder from "../Style/GradientBorder.vue";
import Currency from "../Util/Currency.vue";
import { ref } from "vue";

const props = defineProps({
  product: { type: Object },
});

const isLoaded = ref(false);
</script>

<template>
  <GradientBorder class="h-fit">
    <Link :href="`/product/${product.slug}`" preserve-scroll>
      <figure
        class="flex h-full flex-col justify-between rounded bg-gray-800 px-2 pt-2 transition duration-100 ease-in-out hover:bg-gray-900"
      >
        <section class="aspect-square w-full">
          <div v-if="!isLoaded" class="h-full rounded bg-gray-600/50" />
          <img
            v-show="isLoaded"
            @load="isLoaded = true"
            class="aspect-square rounded object-contain"
            :src="
              product.img_path
                ? product.img_path
                : 'https://github.com/Exoezeroes/serba-ada/blob/assets/400x400.jpg?raw=true'
            "
            alt="400x400"
          />
        </section>

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
