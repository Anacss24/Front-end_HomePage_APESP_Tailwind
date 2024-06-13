/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        gov: '#1351b4',
        servico: '#ededed',
        acesso: '#444444'
      }
    }
  },

  plugins: [],
}

