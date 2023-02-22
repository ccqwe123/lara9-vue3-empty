/** @type {import('tailwindcss').Config} */
const lineClamp = require('@tailwindcss/line-clamp')

module.exports = {
  mode: "jit",
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js"
  ],
  theme: {
    extend: {
      
    },
  },
  plugins: [
    lineClamp
  ],
}
