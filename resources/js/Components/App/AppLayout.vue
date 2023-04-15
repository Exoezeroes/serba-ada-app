<script setup>
import AppHeader from "@/Components/App/AppHeader.vue";
import AppFooter from "./AppFooter.vue";
import { ref } from "vue";

const isLoaded = ref(false);
</script>

<template>
  <div class="flex min-h-screen flex-col">
    <AppHeader />

    <div class="mb-8">
      <slot />
    </div>

    <AppFooter />
  </div>
  <a
    target="_blank"
    class="fixed bottom-4 right-4"
    href="https://wa.me/6282191655522?text=Halo%20SerbaAda%2C"
  >
    <section class="aspect-square w-14">
      <div v-if="!isLoaded" class="h-full rounded-xl bg-gray-600" />
      <img
        v-show="isLoaded"
        @load="isLoaded = true"
        class="w-full rounded-xl hover:bg-lime-400 hover:outline hover:outline-lime-500"
        src="https://github.com/Exoezeroes/serba-ada/blob/assets/whatsapp.png?raw=true"
      />
    </section>
  </a>
</template>
