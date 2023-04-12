<script setup>
const props = defineProps({
  category: { type: Object },
});
</script>

<script>
import AppLayout from "@/Components/Shared/AppLayout.vue";
import ButtonLink from "@/Components/Shared/ButtonLink.vue";
import Category from "@/Components/Shared/Category.vue";

export default {
  layout: AppLayout,
  components: { Category, ButtonLink },
};

const back = () => {
  window.history.back();
};
</script>

<template>
  <main class="flex pt-8">
    <section class="mx-32 self-end">
      <ButtonLink @click.prevent="back" button="secondary">
        Kembali
      </ButtonLink>
    </section>
    <article class="flex flex-col">
      <section>
        <h1 class="text-5xl font-bold" v-text="category.name" />
        <h2 class="text-lg text-gray-400" v-text="category.description" />
      </section>
    </article>
  </main>
</template>
