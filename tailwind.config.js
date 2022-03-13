const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './App/Models/Idea.php'
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
                22: '5.5rem',
                44: '11rem',
                70: '17.5rem',
                76: '19rem',
                104: '26rem',
                175: '43.75rem'
            },
            maxWidth: {
                custom: '68.5rem',
            },
            colors: {
                'x-red': '#f25779',
                'x-pink': '#ed9390',
                'x-grey': '#5d576b',
                'x-blue': '#407076',
                'x-blue-hover': '#223c3f',
                'x-light-pink': '#fededc',
                'x-blush': '#f3e2e7',
                'x-yellow': '#f9ca71',
                'x-bg': '#fefaf3',
                'x-green': '#5a9367',
                'x-purple': '#ab81de'
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
