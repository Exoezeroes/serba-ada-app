<script setup>
import Categories from "./Categories.vue";
import ButtonLink from "./ButtonLink.vue";

const props = defineProps({
  user: {type: Object}
})
</script>

<template>
  <main class="pt-8">
    <article class="grid place-items-center">
      <section class="pb-4">
        <h1 class="text-5xl font-bold">Selamat datang!</h1>
        <h2 class="text-center text-lg text-gray-400">Mau cari apa?</h2>
      </section>
      <section class="flex w-5/6 flex-col">
        <ButtonLink
          v-if="user"
          :href="route('category.create')"
          class="mt-4 h-10 w-40 place-self-end"
        >
          Tambah Kategori
        </ButtonLink>

        <Categories class="grid grid-cols-4 gap-4 pt-2" />
      </section>
    </article>
  </main>
</template>
