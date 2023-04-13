<script setup>
import { inject } from "vue";
import Category from "./Category.vue";

const categories = inject("categories");
</script>

<template>
  <div>
    <article v-for="(category, index) in categories" :key="index">
      <Transition appear
        enter-from-class="scale-75 opacity-0"
        enter-to-class="scale-100 opacity-100"
        enter-active-class="transition ease-in delay-75">
        <Category :category="category" class="text-2xl" />
      </Transition>
    </article>
  </div>
</template>
