<script setup>
import AppHeader from "@/Components/App/AppHeader.vue";
import AppFooter from "./AppFooter.vue";
</script>

<template>
  <div class="flex min-h-screen flex-col">
    <AppHeader />

    <div class="mb-8">
      <slot />
    </div>

    <AppFooter />
  </div>
  <a target="_blank" class="fixed right-4 bottom-4" href="https://wa.me/6282191655522?text=Halo%20SerbaAda%2C">
    <img class="rounded-xl w-14 hover:bg-lime-400 hover:outline hover:outline-lime-500" src="https://github.com/Exoezeroes/serba-ada/blob/assets/whatsapp.png?raw=true" />
  </a>
</template>
