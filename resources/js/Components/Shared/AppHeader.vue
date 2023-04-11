<script setup>
import { Link } from "@inertiajs/vue3";
import ButtonLink from "@/Components/Shared/ButtonLink.vue";
import AppLogo from "./AppLogo.vue";
</script>

<template>
  <header
    class="border-b border-blue-400 bg-gradient-to-r from-sky-600 via-20% via-cyan-400 to-blue-500 pb-4"
  >
    <section class="mx-24 flex place-items-center justify-between pt-2">
      <Link :href="route('home.index')">
        <AppLogo class="text-5xl" />
      </Link>

      <section v-if="!$page.props.auth.user" class="flex space-x-4">
        <ButtonLink :href="route('login')" button="secondary">
          Login
        </ButtonLink>

        <ButtonLink :href="route('register')"> Register </ButtonLink>
      </section>

      <section v-else>
        <ButtonLink :href="route('logout')" method="post" button="danger">
          Logout
        </ButtonLink>
      </section>
    </section>
  </header>
</template>
