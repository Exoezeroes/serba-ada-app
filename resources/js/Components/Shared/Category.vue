<script setup>
import { Link } from "@inertiajs/vue3";
import GradientBorder from "./GradientBorder.vue";

const props = defineProps({
  category: { type: Object },
});
</script>

<template>
  <GradientBorder>
    <Link :href="route('category.show', category.slug)" preserve-scroll>
      <figure
        class="h-max-[21.5rem] flex h-full flex-col items-center justify-between rounded bg-gray-800 px-2 pt-2 transition duration-100 ease-in-out hover:bg-gray-900"
      >
        <img
          class="aspect-square rounded object-contain"
          :src="category.img_path ? 
            category.img_path : '/storage/category/400x400.jpg'"
          alt="400x400"
        />
        <figcaption class="py-1 font-semibold">
          {{ category.title }}
        </figcaption>
      </figure>
    </Link>
  </GradientBorder>
</template>
