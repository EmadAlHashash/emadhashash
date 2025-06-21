import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/dashboard.css",
                "resources/css/login.css",
                "resources/css/style.css",
                "resources/js/bootstrap.js",
                "resources/js/app.js",
                "resources/js/dashboard.js",
                "resources/js/main.js",

            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
