<script setup>
import { Head } from "@inertiajs/vue3";
import Categories from "@/Components/Category/Categories.vue";
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

  <main class="pt-8">
    <article class="grid place-items-center">
      <section>
        <div v-if="auth.user">
          <h1 class="text-5xl font-bold">
            Selamat datang,
            <span
              v-if="auth.user"
              class="text-blue-400"
              v-text="auth.user.name"
            />!
          </h1>
        </div>
        <h1 v-else class="text-5xl font-bold">Selamat datang!</h1>
        <h2 class="text-center text-lg text-gray-400">Mau cari apa?</h2>
      </section>

      <Categories :class="'mt-8 grid w-5/6 grid-cols-4 gap-4'" />
    </article>
  </main>
</template>
