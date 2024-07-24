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
        birubps: '#043277',
        birunavbar: '#174A7C',
        biru: '#0093DD',
        orange: '#EB891B',
        hijau: '#68B92E',
        silver: '#F5F7FA',
        white: '#FFFFFF',
        error: '#E53835',
        success: '#2E7D31',
      },
    },
  },
  plugins: [],
}