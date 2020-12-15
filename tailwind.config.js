const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './resources/**/*.php',
        './src/App/View/Components/*.php',
    ],
    theme: {
        colors: {
            black: colors.black,
            white: colors.white,
            amber: colors.amber,
            blue: colors.blue,
            cyan: colors.cyan,
            emerald: colors.emerald,
            fuchsia: colors.fuchsia,
            green: colors.green,
            indigo: colors.indigo,
            lightBlue: colors.lightBlue,
            lime: colors.lime,
            orange: colors.orange,
            pink: colors.pink,
            purple: colors.purple,
            red: colors.red,
            rose: colors.rose,
            teal: colors.teal,
            violet: colors.violet,
            yellow: colors.yellow,
            gray: colors.gray,
            blueGray: colors.blueGray,
            coolGray: colors.coolGray,
            trueGray: colors.trueGray,
            warmGray: colors.warmGray,
        },
        extend: {},
    },
    variants: {},
    plugins: [],
}
