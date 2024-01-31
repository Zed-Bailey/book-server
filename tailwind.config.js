/** @type {import('tailwindcss').Config} */
export default {
    // purge: [
    //     './vendor/wire-elements/modal/resources/views/*.blade.php',
    //     './storage/framework/views/*.php',
    // ],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",

    ],
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                "just-black": "#0e100f",
                "just-black-surface": "#d2d4ba",
                "surface-white" : "#fffce1"
            }
        },
    },
    // options: {
    //     safelist: [
    //         'sm:max-w-2xl'
    //     ]
    // },
    plugins: [],
}
