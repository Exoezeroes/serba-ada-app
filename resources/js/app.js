import "./bootstrap";
import "../css/app.css";

import { createApp, h } from "vue";
import { createInertiaApp, Link } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { ZiggyVue } from "../../vendor/tightenco/ziggy/dist/vue.m";
import AppLayout from "./Components/Shared/AppLayout.vue";

const appName = "SerbaAda";

createInertiaApp({
    title: (title) => (title ? `${appName}: ${title}` : appName),

    resolve: (name) => {
        const page = resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob("./Pages/**/*.vue")
        );

        page.then((module) => {
            module.default.layout = module.default.layout || AppLayout
        });

        return page;
    },

    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .component("Link", Link)
            .mount(el);
    },

    progress: {
        color: "#4B5563",
    },
});
