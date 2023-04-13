<script setup>
import ButtonLink from "@/Components/Style/ButtonLink.vue";
import Products from "@/Components/Product/Products.vue";

const props = defineProps({
  category: { type: Object },
  products: { type: Array },
});

const back = () => {
  window.history.back();
};
</script>

<script>
import AppLayout from "@/Components/App/AppLayout.vue";

export default {
  layout: AppLayout,
};
</script>

<template>
  <main class="pt-8">
    <div class="flex">
      <section class="mx-32 self-end">
        <ButtonLink @click.prevent="back" button="secondary">
          Kembali
        </ButtonLink>
      </section>

      <section class="flex flex-col">
        <h1 class="text-5xl font-bold" v-text="category.title" />
        <h2 class="text-lg text-gray-400" v-text="category.description" />
      </section>
    </div>

    <div class="grid place-items-center">
      <Products
        :products="products"
        class="mt-6 grid w-5/6 grid-cols-6 gap-2"
      />
    </div>
  </main>
</template>
