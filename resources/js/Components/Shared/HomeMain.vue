<script setup>
import Modal from "./Modal.vue";
import Categories from "./Categories.vue";
import { reactive, inject } from "vue";
import { useForm, router } from "@inertiajs/vue3";

const user = inject("user");

const modal = reactive({ show: false });

const toggleModal = () => {
  modal.show = !modal.show;
};

const form = useForm({
  name: "",
});

const submit = () => {
  form.post("/", {
    onSuccess: () => { router.get('/') }
  });
};
</script>

<template>
  <main class="pt-8">
    <article class="grid place-items-center">
      <section class="pb-4">
        <h1 class="text-5xl font-bold">Selamat datang!</h1>
        <h2 class="text-center text-lg text-gray-400">Mau cari apa?</h2>
      </section>
      <section class="flex w-5/6 flex-col">
        <button
          v-if="user"
          @click="toggleModal"
          class="my-4 h-10 w-fit place-self-end rounded-md bg-green-500 px-4 font-semibold transition duration-75 ease-in-out hover:bg-green-600 active:bg-green-700"
          preserve-scroll
        >
          Tambah Kategori
        </button>

        <Modal v-model:show="modal.show" @close="toggleModal">
          <section
            class="border-b border-gray-300 pb-2 text-2xl font-semibold text-gray-800"
          >
            Tambah Kategori
          </section>

          <form @submit.prevent="submit" class="max-w-1/2">
            <div class="mb-4 mt-6">
              <label
                class="mb-2 block text-xs font-bold uppercase text-gray-700"
                for="name"
              >
                Kategori
              </label>

              <input
                v-model="form.name"
                class="w-full rounded-md border border-gray-400 p-2"
                type="text"
                name="name"
                id="name"
                required
              />
            </div>

            <div>
              <button
                type="submit"
                class="rounded bg-blue-500 px-4 py-2 text-white hover:bg-blue-400"
              >
                Tambah
              </button>
            </div>
          </form>
        </Modal>

        <Categories class="grid grid-cols-4 gap-4 pt-2" />
      </section>
    </article>
  </main>
</template>
