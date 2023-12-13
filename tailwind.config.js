/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modiles/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'dark-blue': '#001D3D',
        'light-blue': '#003566',
        'turquese': '#004586',
        'light-gold': '#F5CC00',
        'gold': '#E0B000',
        'dark': '#001933',
        'light-gray': '#EFEFEF',
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

