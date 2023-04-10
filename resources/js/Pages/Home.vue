<script setup>
import { Head } from "@inertiajs/vue3";
import HomeMain from "@/Components/Shared/HomeMain.vue";
import { provide } from "vue";

const props = defineProps({
  categories: { type: Array },
  user: { type: Object },
});

provide("categories", props.categories);
provide("user", props.user);
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
