<script setup>
import { Teleport } from "vue";

defineProps({
  show: { type: Boolean },
});
</script>

<template>
  <Teleport to="body">
    <article v-if="show" class="fixed z-[9998] bg-black/50">
      <section>
        <slot />
      </section>
    </article>
  </Teleport>
</template>

<style>

</style>
