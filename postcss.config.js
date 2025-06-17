module.exports = {
  content: ["./src/**/*.{html,js,scss}"],
  plugins: [
    require('tailwindcss'),
    require('autoprefixer'),
  ],
  extend: {
    colors: {
      green: {
        DEFAULT: '#204D51',
      }
    },
  },
}