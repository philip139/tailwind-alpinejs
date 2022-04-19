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
                'topshadow': '0 0 20px rgb(0 0 0 / 15%)',

            },
            margin: {
                '100': '100px'
            },
            fontFamily: {
                'Eureka': 'EurekaSansRegular',
            },
            colors: {
                'baige': '#fbecc7',
                'redwood': {
                    DEFAULT: '#5B1E0E',
                    '50': '#E1613F',
                    '100': '#DF522D',
                    '200': '#C5411E',
                    '300': '#A23519',
                    '400': '#7E2A13',
                    '500': '#5B1E0E',
                    '600': '#2A0E07',
                    '700': '#000000',
                    '800': '#000000',
                    '900': '#000000'
                },
                'iron': {
                    DEFAULT: '#E6E7E8',
                    '50': '#FFFFFF',
                    '100': '#FFFFFF',
                    '200': '#FFFFFF',
                    '300': '#FFFFFF',
                    '400': '#FBFBFC',
                    '500': '#E6E7E8',
                    '600': '#C9CBCD',
                    '700': '#ACAFB2',
                    '800': '#8E9397',
                    '900': '#72777C'
                },
                'scarpa-flow': {
                    DEFAULT: '#5A5A5B',
                    '50': '#B6B6B7',
                    '100': '#ACACAD',
                    '200': '#979798',
                    '300': '#838384',
                    '400': '#6E6E70',
                    '500': '#5A5A5B',
                    '600': '#3E3E3F',
                    '700': '#222223',
                    '800': '#060606',
                    '900': '#000000'
                },
                'tundora': {
                    DEFAULT: '#4A4A4A',
                    '50': '#A6A6A6',
                    '100': '#9C9C9C',
                    '200': '#878787',
                    '300': '#737373',
                    '400': '#5E5E5E',
                    '500': '#4A4A4A',
                    '600': '#2E2E2E',
                    '700': '#121212',
                    '800': '#000000',
                    '900': '#000000'
                },

            },
            fontSize: {
                '25': '25px',
            }
        },
    },
    plugins: [
        require("daisyui"),
    ],
}