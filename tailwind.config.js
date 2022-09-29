/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    '**/**/*.htm',
  ],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Robot\\ Flex', 'system-ui',],
      },
      colors: {
        'brand-blue': '#0c7399',
        'brand-green': '#95c74c',
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
  ],
}