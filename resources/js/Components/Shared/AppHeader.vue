<script setup>
import ButtonLink from "@/Components/Shared/ButtonLink.vue";
import AppLogo from "./AppLogo.vue";
import { Link } from "@inertiajs/vue3";
</script>

<template>
  <header
    class="border-b border-blue-400 bg-gradient-to-r from-sky-600 via-cyan-400 via-20% to-blue-500 pb-4"
  >
    <section class="mx-24 flex place-items-center justify-between pt-2">
      <Link :href="route('home.index')">
        <AppLogo class="text-5xl" />
      </Link>

      <section v-if="!$page.props.auth.user" class="flex space-x-4">
        <ButtonLink :href="route('login')" button="secondary" class="h-10 w-24">
          Login
        </ButtonLink>

        <ButtonLink :href="route('register')" class="h-10 w-24">
          Register
        </ButtonLink>
      </section>

      <section v-else>
        <ButtonLink
          button="danger"
          :href="route('logout')"
          method="post"
          class="h-10 w-24"
        >
          Logout
        </ButtonLink>
      </section>
    </section>
  </header>
</template>
