<script setup>
import Categories from "@/Components/Category/Categories.vue";
import { useForm } from "@inertiajs/vue3";

const form = useForm({
  q: "",
});

const props = defineProps({
  user: { type: Object },
});

const submit = () => {
  form.get(route("product.index"));
};
</script>

<template>
  <main class="mt-8">
    <article class="grid place-items-center">
      <!-- Welcome Message -->
      <section class="text-5xl font-bold">
        <h1 v-if="user">
          Selamat datang,
          <span class="text-blue-400" v-text="user.name" />!
        </h1>

        <h1 v-else>Selamat datang!</h1>
      </section>

      <form
        class="w-96"
        @submit.prevent="submit"
      >
        <div class="flex flex-col place-items-center">
          <label
            for="q"
            class="w-100 mb-1 text-center text-sm font-bold uppercase text-gray-400"
          >
            Mau cari apa?
          </label>

          <input
            class="h-8 w-full rounded-md border-0 bg-gray-700/25 outline outline-1"
            type="text"
            v-model="form.q"
            name="q"
            id="q"
          />
        </div>
      </form>

      <!-- Categories -->
      <Categories class="mt-4 grid w-5/6 grid-cols-4 gap-4" />
    </article>
  </main>
</template>
