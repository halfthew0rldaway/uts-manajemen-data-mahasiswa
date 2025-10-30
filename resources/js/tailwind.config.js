// tailwind.config.js

import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

const colors = require('tailwindcss/colors'); // Import palet warna tailwind

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                // Jadikan 'Inter' sebagai font default
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // Buat palet warna 'zinc' sebagai pengganti 'gray'
                zinc: colors.zinc,
                // Tentukan warna utama (primary)
                primary: colors.indigo,
            }
        },
    },

    plugins: [forms],
};