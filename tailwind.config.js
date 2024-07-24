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
      fontSize: {
        'xs': '.75rem',     // ukuran ekstra kecil
        'sm': '.875rem',    // ukuran kecil
        'base': '1rem',     // ukuran dasar (biasanya 16px)
        'lg': '1.125rem',   // ukuran besar
        'xl': '1.25rem',    // ukuran sangat besar
        '2xl': '1.5rem',    // ukuran sangat besar
        '3xl': '1.875rem',  // ukuran sangat besar
        '4xl': '2.25rem',   // ukuran sangat besar
        '5xl': '3rem',      // ukuran sangat besar
        '6xl': '4rem',      // ukuran sangat besar
        '7xl': '5rem',      // ukuran sangat besar
        '8xl': '6rem',      // ukuran sangat besar
        '9xl': '8rem',      // ukuran sangat besar
      },
    },
  },
  plugins: [],
}