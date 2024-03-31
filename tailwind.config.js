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
                Roboto:['Roboto', 'sans-serif'],
                GTpro: 'GT Walsheim Pro'
            },
            colors:{
                'custom-blue' : '#3561FF',
                'custom-lgray' : '#9DA3B6',
                'custom-mgray' : '#484F68',
                'custom-dgray':'#212639',
                'custom-vlgray': '#E5ECFF',
                'custom-vvlgary': '#F2F4F7',
                'custom-graish': '#F2F4F7'
            },
            width:{
                'custom-4': '450px',
            }
        },
    },

    plugins: [forms],
};
