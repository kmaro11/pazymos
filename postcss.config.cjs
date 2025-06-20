module.exports = {
  content: ["./src/**/*.{html,js,scss}"],
  plugins: {
    tailwindcss: {},
    autoprefixer: {},
  },
  extend: {
    colors: {
      green: {
        DEFAULT: '#204D51',
      }
    },
  },
}