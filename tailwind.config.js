/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                'primary': '#D8EFD3',
                'secondary': '#95D2B3',
                'third': '#55AD9B',
                'fourth': '#F1F8E8',
            }
        },
    },
    plugins: [require("flowbite/plugin")],
};
