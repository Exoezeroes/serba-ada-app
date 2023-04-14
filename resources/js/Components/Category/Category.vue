<script setup>
import { Link } from "@inertiajs/vue3";
import GradientBorder from "../Style/GradientBorder.vue";

const props = defineProps({
  category: { type: Object },
});
</script>

<template>
  <GradientBorder>
    <Link :href="route('category.show', category.slug)" preserve-scroll>
      <figure
        class="h-max-[21.5rem] flex h-full min-h-[20.125rem] flex-col items-center justify-between rounded bg-gray-800 px-2 pt-2 transition duration-100 ease-in-out hover:bg-gray-900"
      >
        <img
          class="aspect-square rounded object-contain"
          width="400"
          :src="
            category.img_path
              ? category.img_path
              : 'https://github.com/Exoezeroes/serba-ada/blob/assets/400x400.jpg?raw=true'
          "
          alt="400x400"
        />
        <figcaption class="py-1 font-semibold">
          {{ category.title }}
        </figcaption>
      </figure>
    </Link>
  </GradientBorder>
</template>
