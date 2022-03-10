const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            spacing: {
                70: '17.5rem',
                175: '43.75rem'
            },
            maxWidth: {
                custom: '62.5rem',
            },
            colors: {
                'x-red': '#f1dede',
                'x-pink': '#ed9390',
                'x-grey': '#5d576b',
                'x-blue': '#407076',
                'x-blue-hover': '#39646a',
                'x-light-pink': '#fe938c',
                'x-blush': '#f3e2e7',
                'x-yellow': '#fad389',
                'x-green': '#5a9367'
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
