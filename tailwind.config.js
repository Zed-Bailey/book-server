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
                "just-black": "#0e100f",
                "surface-white" : "#fffce1"
            }
        },
    },
    plugins: [],
}
