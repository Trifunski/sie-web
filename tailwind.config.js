/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    colors: {
      "primary": "#CCDBDC",
      "secondary": "#9AD1D4",
      "tertiary": "#80CED7",
      "quaternary": "#007EA7",
      "quinary": "#003249",
      "white": "#ffffff",
      "black": "#000000",
    }
  },
  plugins: [],
}

