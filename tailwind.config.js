/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {},
    container: {
      center: true,
      // padding: '2rem',
    }
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

