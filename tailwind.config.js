/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme');

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      dropShadow: {
        'soft': '0px 4px 40px rgba(181, 178, 172, 0.16)',
    },  
      colors: {
        black: {
          DEFAULT: '#000000',
          '100': '#0E0126',
        },
        green: {
          DEFAULT: '#204D51',
          '100': '#B4F6D0',
          '200': '#F5FA9B',
        },
        gray: {
          DEFAULT: '#CBD3E2',
          '100': '#FDFCFA',
          '200': '#3B4250',
          '300': '#F6F6F6',
          '400': '#F3F2F0',
        },
        blue: {
          DEFAULT: "#ADCFFF",
          '100': "#E6F1FF",
        }
      },
      backgroundImage: {
        'gradient-custom': 'linear-gradient(180deg, #F3F2F0 0%, #FDFCFA 100%)',
      },
      boxShadow: {
        'card': '0px 4px 16px 0px rgba(181, 178, 172, 0.25)',
        'large-card': '0px 4px 40px 0px rgba(181, 178, 172, 0.16)',
        'soft': '0px 10px 30px 0px rgba(0, 0, 0, 0.06)',
        'circle': '0px 4px 8px 0px rgba(66, 71, 76, 0.06), 0px 0px 1px 0px rgba(66, 71, 76, 0.48)',
      },
      fontFamily: {
        sans: ['Helvetica Neue', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  plugins: [],
} 
