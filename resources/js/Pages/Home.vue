<script setup>
import { Head } from "@inertiajs/vue3";
import HomeMain from "@/Components/Shared/HomeMain.vue";
import { provide } from "vue";

const props = defineProps({
  categories: { type: Array },
  auth: { type: Object },
});

provide("categories", props.categories);
</script>

<template>
  <Head>
    <title>Home</title>
  </Head>

  <HomeMain :user="auth.user" />
</template>
