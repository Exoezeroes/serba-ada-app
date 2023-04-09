<script setup>
import { inject } from "vue";
import Category from "./Category.vue";

const categories = inject("categories");
</script>

<template>
  <section>
    <article v-for="category in categories" :key="category.id">
      <Category :name="category.name" />
    </article>
  </section>
</template>
