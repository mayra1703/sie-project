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
        gridColumnStart: {
          '13': '13',
          '14': '14',
          '15': '15',
          '16': '16',
          '17': '17',
      },
        gridColumnEnd: {
          '13': '13',
          '14': '14',
          '15': '15',
          '16': '16',
          '17': '17',
      },
      gridColumn: {
        'span-16': 'span 16 / span 16',
      },
  plugins: [
    require('flowbite/plugin')
  ],
}
}
}
