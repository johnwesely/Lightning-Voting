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
            fontSize: {
                'xxs': ['.625rem', { lineHeight: '1rem'}]
            },
            spacing: {
                70: '17.5rem',
                175: '43.75rem',
                44: '11rem'
            },
            maxWidth: {
                custom: '62.5rem',
            },
            colors: {
                'x-red': '#ef2e58',
                'x-pink': '#ed9390',
                'x-grey': '#5d576b',
                'x-blue': '#407076',
                'x-blue-hover': '#39646a',
                'x-light-pink': '#fe938c',
                'x-blush': '#f3e2e7',
                'x-yellow': '#fad389',
                'x-green': '#5a9367'
            },
            boxShadow: {
                'card': '4px 4px 15px 0 rgba(36, 37, 38, 0.08)',
                'dialog': '3px 4px 15px 0 rgba(36, 37, 38, 0.22)'
            }
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/line-clamp')
    ],
};
