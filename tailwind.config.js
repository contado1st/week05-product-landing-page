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
        brew: {
          dark: '#1c1917',       // Espresso Dark
          surface: '#292524',    // Dark Roast Surface
          accent: '#78350f',     // Warm Coffee Brown
          green: '#15803d',      // Fresh Leaf Green (from BrewVery logo)
          light: '#fdfbf7',      // Warm Cream
          cream: '#fef3c7',      // Milk Tea Foam
        }
      }
    },
  },
  plugins: [],
}