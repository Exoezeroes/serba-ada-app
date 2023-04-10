<script setup>
import Modal from "./Modal.vue";
import Categories from "./Categories.vue";
import { reactive } from "vue";
import { inject } from "vue";

const user = inject("user");

const modal = reactive({ show: false });

function toggleModal() {
  modal.show = !modal.show;
}
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
            class="border-b border-gray-300 text-2xl font-semibold text-gray-800"
          >
            Tambah Kategori
          </section>
        </Modal>

        <Categories class="grid grid-cols-4 gap-4 pt-2" />
      </section>
    </article>
  </main>
</template>
