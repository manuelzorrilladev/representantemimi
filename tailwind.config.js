import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Montserrat", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'custom-red': '#d44d37',
                'custom-light': '#ffffff',
                'custom-golden':'#c0a357',
                'custom-purple':'#c980ab',
                'custom-gray':'#9b9fb4',
                'custom-gray-2':'#f4f4f4'
            },
            animation: {
                'slide-left': 'slide-left 8s  infinite ',
                'spin-slow': 'spinner 5s alternate infinite',
              },
              keyframes: {
                'slide-left': {
                 
                  '0%': {transform: 'translateX(0)'},
                  '100%': {transform: 'translateX(-50%)'}
                },
                'spinner':{
                  '0%': {transform: 'rotate(0deg)' },
                  '100%': {transform: 'rotate(360deg)' }
                }
              },
        },
    },
   

    plugins: [forms, typography],
};