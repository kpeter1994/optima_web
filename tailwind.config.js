import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],
    darkMode: 'class', // or 'media'

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                serif: ['MyImpact', ...defaultTheme.fontFamily.serif],
            },
            colors: {

                'blue-100': '#E0E7FB',
                'blue-200': '#B3C4F5',
                'blue-300': '#86A1EF',
                'blue-400': '#597EE9',
                'blue-500': '#2C5BE3',
                'blue-600': '#1A45C1',
                'blue-700': '#143594',
                'blue-800': '#0E2567',
                'blue-900': '#08153A',

                'green-100': '#CFFCE4',
                'green-200': '#A3F5C9',
                'green-300': '#75F0AE',
                'green-400': '#47EB92',
                'green-500': '#23DC78',
                'green-600': '#00CC5E',
                'green-700': '#089147',
                'green-800': '#05612F',
                'green-900': '#052E18',

                'gray-50': '#EEEFF2',
                'gray-100': '#DFE2E7',
                'gray-200': '#C2C7D0',
                'gray-300': '#A6ADBA',
                'gray-400': '#8992A4',
                'gray-500': '#6D788D',
                'gray-600': '#565F70',
                'gray-700': '#404754',
                'gray-800': '#2A2E37',
                'gray-900': '#222326',

            },


        },
    },

    plugins: [forms],
};
