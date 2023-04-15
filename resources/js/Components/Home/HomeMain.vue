<script setup>
import Categories from "@/Components/Category/Categories.vue";

const props = defineProps({
  user: { type: Object },
});
</script>

<template>
  <main class="pt-8">
    <article class="grid place-items-center">
      <!-- Welcome Message -->
      <section>
        <div v-if="user">
          <h1 class="text-5xl font-bold">
            Selamat datang,
            <span
              class="text-blue-400"
              v-text="user.name"
            />!
          </h1>
        </div>
        <h1 v-else class="text-5xl font-bold">Selamat datang!</h1>
        <h2 class="text-center text-lg text-gray-400">Mau cari apa?</h2>
      </section>

      <!-- Categories -->
      <Categories :class="'mt-8 grid w-5/6 grid-cols-4 gap-4'" />
    </article>
  </main>
</template>
