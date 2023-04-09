<script setup>
import Categories from "./Categories.vue";
</script>

<template>
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
