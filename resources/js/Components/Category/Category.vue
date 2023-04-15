<script setup>
import { Link } from "@inertiajs/vue3";
import GradientBorder from "../Style/GradientBorder.vue";
import { ref } from "vue";

const props = defineProps({
  category: { type: Object },
});

const isLoaded = ref(false);
</script>

<template>
  <GradientBorder>
    <Link :href="route('category.show', category.slug)" preserve-scroll>
      <figure
        class="flex h-full min-h-[20.125rem] flex-col items-center justify-between rounded bg-gray-800 px-2 pt-2 transition duration-100 ease-in-out hover:bg-gray-900"
      >
        <section class="aspect-square w-full">
          <div v-if="!isLoaded" class="h-full rounded bg-gray-600/50" />
          <img
            v-show="isLoaded"
            @load="isLoaded = true"
            class="aspect-square rounded w-full object-contain"
            :src="
              category.img_path
                ? category.img_path
                : 'https://github.com/Exoezeroes/serba-ada/blob/assets/400x400.jpg?raw=true'
            "
            alt="400x400"
          />
        </section>

        <figcaption class="py-1 font-semibold">
          {{ category.title }}
        </figcaption>
      </figure>
    </Link>
  </GradientBorder>
</template>
