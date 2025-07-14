/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
export default{
    content:[
        "./reources/**/*.blade.php",
        "./resource/**/*.js",
        "./resources/**/*.vue",
    ],
    theme:{
        extend:{
           fontFamily: {
            sans: ['InterVariable', ...defaultTheme.fontFamily.sans],
            }, 
        },
    },
    plugin:[],
};
