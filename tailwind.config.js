/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'dark-blue': '#001D3D',
        'light-blue': '#003566',
        'light-gold': '#F5CC00',
        'gold': '#CCA000',
        'dark': '#001933',
        'light-gray': '#EFEFEF',
      },
    },
  },
  plugins: [],
}

