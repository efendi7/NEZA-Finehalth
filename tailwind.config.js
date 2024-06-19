// tailwind.config.js

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./public/**/*.{html,js}",
    ],
    theme: {
        extend: {
            colors: {
                customTurquoise: "#13DEDE",
            },
        },
    },
    plugins: [],
};
