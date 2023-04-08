<script setup>
import BtnLink from "@/Components/Shared/BtnLink.vue";
</script>

<template>
    <header class="mb-8 border-b pb-4">
        <div class="mx-24 mt-2 flex place-items-center justify-between">
            <div id="logo">SerbaAda</div>

            <div v-if="!$page.props.auth.user" class="flex space-x-4">
                <BtnLink :href="route('login')" button="secondary">
                    Login
                </BtnLink>

                <BtnLink :href="route('register')"> Register </BtnLink>
            </div>

            <div v-else>
                <BtnLink :href="route('logout')" method="post">
                    Logout
                </BtnLink>
            </div>
        </div>
    </header>
</template>

<style>
@import url("https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,600&display=swap");

#logo {
    font-family: "Kanit";
    font-size: 3rem;
}
</style>
