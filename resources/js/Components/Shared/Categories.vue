<script setup>
import { inject } from "vue";
import Category from "./Category.vue";

const categories = inject("categories");
</script>

<template>
  <section>
    <article v-for="category, index in categories" :key="index">
      <Category :category="category" />
    </article>
  </section>
</template>
