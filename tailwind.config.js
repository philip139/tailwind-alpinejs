module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        container: {
            center: true,
            padding: '65px',
        },
        extend: {
            height: {
                '108': '108px',
            },
            maxHeight: {
                '75': '75px',
            },
            boxShadow: {
                'navBottom': '0 0 20px rgb(0 0 0 / 15%)',
            },
            margin: {
                '100': '100px'
            }
        },
    },
    plugins: [
        require("daisyui"),
    ],
}