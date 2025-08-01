/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./src/**/*.{html,js}", // Inside /src folder
        "./*.html",             // Top-level HTML files
        "./public/**/*.html",   // Optional: HTML files in /public if you're using that
    ],
    theme: {
        extend: {},
    },
    plugins: [],
}
