<script setup>
import { Head } from "@inertiajs/vue3";
import Categories from "@/Components/Category/Categories.vue";
import { provide } from "vue";

const props = defineProps({
  categories: { type: Array },
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

  <main class="pt-8">
    <article class="grid place-items-center">
      <section>
        <h1 class="text-5xl font-bold">Selamat datang!</h1>
        <h2 class="text-center text-lg text-gray-400">Mau cari apa?</h2>
      </section>

      <Categories :class="'mt-8 grid w-5/6 grid-cols-4 gap-4'" />
    </article>
  </main>
</template>
