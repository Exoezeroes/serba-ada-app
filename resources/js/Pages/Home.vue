<script setup>
import { Head } from "@inertiajs/vue3";
import HomeMain from "@/Components/Shared/HomeMain.vue";
import { provide } from "vue";

const props = defineProps({
  categories: { type: Array },
});

provide('categories', props.categories)
</script>

<script>
import AppLayout from "@/Components/Shared/AppLayout.vue";

export default {
  layout: AppLayout,
};
</script>

<template>
  <Head>
    <title>Home</title>
  </Head>

  <HomeMain />
</template>
