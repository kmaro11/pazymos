module.exports = {
  content: [
    './src/templates/**/*.html',
    './src/js/**/*.{js,ts}',
  ],
  theme: {
    extend: {
      colors: {
        black: {
          DEFAULT: '#000000',
          '100': '#0E0126',
        },
        green: {
          DEFAULT: '#204D51',
          '100': '#B4F6D0',
        },
        gray: {
          DEFAULT: '#CBD3E2',
          '100': '#FDFCFA',
          '200': '#3B4250',
          '300': '#F6F6F6',
        },
        blue: "#ADCFFF"
      },
      backgroundImage: {
        'gradient-custom': 'linear-gradient(180deg, #F3F2F0 0%, #FDFCFA 100%)',
      },
      boxShadow: {
        'card': '0px 4px 16px 0px rgba(181, 178, 172, 0.25)',
        'large-card': '0px 4px 40px 0px rgba(181, 178, 172, 0.16)',
      },
    },
  },
  plugins: [],
}; 
