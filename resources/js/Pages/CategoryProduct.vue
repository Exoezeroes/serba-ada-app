<script setup>
import { Link } from "@inertiajs/vue3";

const props = defineProps({
  category: { type: Object },
});
</script>

<script>
import AppLayout from "@/Components/App/AppLayout.vue";
import ButtonLink from "@/Components/Style/ButtonLink.vue";
import Category from "@/Components/Category/Category.vue";
import GradientBorder from "@/Components/Style/GradientBorder.vue";

export default {
  layout: AppLayout,
  components: { Category, ButtonLink, GradientBorder },
};

const back = () => {
  window.history.back();
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
      <article class="mt-6 grid w-5/6 grid-cols-6">
        <GradientBorder>
          <Link :href="route('category.show', category.slug)" preserve-scroll>
            <figure
              class="h-min-[21.5rem] flex h-full flex-col justify-between rounded bg-gray-800 px-2 pt-2 transition duration-100 ease-in-out hover:bg-gray-900"
            >
              <img
                class="aspect-square rounded object-contain"
                :src="
                  category.img_path
                    ? category.img_path
                    : '/storage/category/400x400.jpg'
                "
                alt="400x400"
              />
              <figcaption class="py-1 font-semibold">
                <span
                  class="line-clamp-2 h-12 overflow-ellipsis hover:line-clamp-none hover:h-auto"
                >
                  Kalimat yang sangat panjang sekali sampai tidak terlihat
                  sisanya
                </span>
                <p class="text-lg font-extrabold text-indigo-400">Rp123.000</p>
              </figcaption>
            </figure>
          </Link>
        </GradientBorder>
      </article>
    </div>
  </main>
</template>
