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
                'roboto': '"Roboto", sans-serif', 
            },

            backgroundImage:{
                'menu-icon': "url('/public/images/site-icons/menu.svg')",
                'close-icon': "url('/public/images/site-icons/close.svg')",
                
            },
        },
    },

    plugins: [forms],
};
