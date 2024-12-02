import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'primary': '#ff0000', // Rojo
                'secondary': '#0000ff', // Azul
                red: {
                  600: '#D32F2F',
                  700: '#C62828',
                },
                blue: {
                  600: '#1976D2',
                  700: '#1565C0',
                },
                yellow: {
                  600: '#E1B900',
                },
                green: {
                  600: '#A1D8B8',
                },
                beige: {
                  300: '#D0A77E',
                },
              },
        },
    },

    plugins: [forms],
};
