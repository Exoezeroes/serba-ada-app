<script setup>
import { useForm } from "@inertiajs/vue3";

const form = useForm({
  name: "",
});

const submit = () => {
  form.post("/");
};
</script>

<script>
import AppLayout from "@/Components/Shared/AppLayout.vue";

export default {
  layout: AppLayout,
};
</script>

<template>
  <article class="grid place-items-center pt-8">
    <section class="w-1/3">
      <section
        class="border-b border-gray-300 pb-2 text-2xl font-semibold text-white"
      >
        Tambah Kategori
      </section>

      <form @submit.prevent="submit" class="max-w-1/2">
        <div class="mb-4 mt-6">
          <label
            class="mb-2 block text-xs font-bold uppercase text-gray-200"
            for="name"
          >
            Kategori
          </label>

          <input
            v-model="form.name"
            class="w-full rounded-md border text-black border-gray-400 p-2"
            type="text"
            name="name"
            id="name"
            required
          />
        </div>

        <div>
          <button
            type="submit"
            class="rounded bg-blue-500 px-4 py-2 font-semibold text-white hover:bg-blue-400"
          >
            Tambah
          </button>
        </div>
      </form>
    </section>
  </article>
</template>
