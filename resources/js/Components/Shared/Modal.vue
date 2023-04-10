<script setup>
import { Teleport } from "vue";

defineProps({
  show: { type: Boolean },
});

const emit = defineEmits(["close"]);

function close() {
  emit("close");
}
</script>

<template>
  <Teleport to="body">
    <div
      v-if="show"
      class="fixed inset-0 z-[9998] grid place-items-center bg-gray-900/75 text-gray-800"
    >
      <article class="w-5/12 bg-white rounded-lg">
        <section class="px-8 py-6">
          <button
            @click="close"
            class="float-right block h-8 w-8 rounded border border-red-900/20 bg-red-600/75 text-2xl font-bold text-white hover:bg-red-400/80"
          >
            &times;
          </button>

          <slot />
        </section>
      </article>
    </div>
  </Teleport>
</template>
