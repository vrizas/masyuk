const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('daisyui'),
    ],

    daisyui: {
        themes: [
          {
            'mytheme': { 
                'primary' : '#fcc915',
                'primary-focus' : '#f4a304',
                'primary-content' : '#2a2e37',
                'secondary': '#f000b8',
                'secondary-focus': '#bd0091',
                'secondary-content': '#ffffff',
                'accent': '#37cdbe',
                'accent-focus': '#2aa79b',
                'accent-content': '#ffffff',
                'neutral': '#3d4451',
                'neutral-focus': '#2a2e37',
                'neutral-content': '#ffffff',
                'base-100': '#fdfffe',
                'base-200': '#f8f7f7',
                'base-300': '#c1c1c1',
                'base-content': '#1f2937',
                'info': '#2094f3',
                'success': '#009485',
                'warning': '#ff9900',
                'error': '#ff5724',
            },
          },
        ],
      },
  
};
