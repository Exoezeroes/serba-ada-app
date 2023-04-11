<script setup>
const props = defineProps({
  category: { type: Object },
});
</script>

<script>
import AppLayout from "@/Components/Shared/AppLayout.vue";
import Category from "@/Components/Shared/Category.vue";

export default {
  layout: AppLayout,
  components: { Category },
};
</script>

<template>
  <main class="pt-8">
    <article class="grid place-items-center">
      <section>
        <h1 class="text-5xl font-bold" v-text="category.name" />
        <h2 class="text-center text-lg text-gray-400">Description</h2>
      </section>

      <Transition appear
        appear-from-class="opacity-0"
        appear-to-class="opacity-100"
        appear-active-class="transition ease-in delay-50"
      >
        <div class="mt-8 w-5/6">
          <Category
            :category="category"
            class="w-36 place-self-start text-sm"
          />
        </div>
      </Transition>
    </article>
  </main>
</template>
