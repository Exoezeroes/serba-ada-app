<script setup>
import Products from "@/Components/Product/Products.vue";
import ButtonLink from "@/Components/Style/ButtonLink.vue";
import { Head } from "@inertiajs/vue3";

const props = defineProps({
  products: { type: Object },
  q: { type: String },
});
</script>

<script>
import AppLayout from "@/Components/App/AppLayout.vue";

export default {
  layout: AppLayout,
};
</script>

<template>
  <Head>
    <title>Cari</title>
  </Head>
  <main class="pt-8">
    <div class="grid place-items-center">
      <div class="flex w-5/6 place-items-center">
        <section class="self-end">
          <ButtonLink :href="route('home.index')" button="secondary">
            Kembali
          </ButtonLink>
        </section>
        <h1 class="ml-32 text-5xl font-bold">
          Cari: <span class="text-blue-400">{{ props.q }}</span>
        </h1>
      </div>
      <Products
        :products="products"
        class="mt-6 grid w-5/6 grid-cols-6 gap-2"
      />
    </div>
  </main>
</template>
