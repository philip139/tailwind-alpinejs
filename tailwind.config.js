module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {

        extend: {
            height: {
                '21': '90px',
            }
        },
    },
    plugins: [
        require("daisyui"),
    ],
}