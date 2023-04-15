<script setup>
import HomeMain from "@/Components/Home/HomeMain.vue";
import { Head } from "@inertiajs/vue3";
import { provide } from "vue";

const props = defineProps({
  categories: { type: Array },
  auth: { type: Object },
});

provide("categories", props.categories);
</script>

<script>
import AppLayout from "@/Components/App/AppLayout.vue";

export default {
  layout: AppLayout,
};
</script>

<template>
  <Head>
    <title>Home</title>
  </Head>

  <HomeMain :user="auth.user" />
</template>
