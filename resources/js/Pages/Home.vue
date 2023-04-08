<script setup>
import { Head } from "@inertiajs/vue3";
</script>

<script>
import AppLayout from "@/Components/Shared/AppLayout.vue";

export default {
    layout: AppLayout,
};
</script>

<template>
    <Head>
        <title>Home</title>
    </Head>

    <main>
        <article>
            <div class="grid place-items-center">
                <h1 class="text-3xl font-bold">Welcome!</h1>
                <h2 class="text-lg text-gray-400">
                    What would you like to buy?
                </h2>
            </div>
        </article>
    </main>
</template>
