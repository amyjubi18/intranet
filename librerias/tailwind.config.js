/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [],
  theme: {
    extend: {
      Animation:{
        fadeIn:"fadeIn",
        fadeOut: "fadeOut",
        scaleIn:"fadeIn",
        scaleOut: "fadeOut",
      },
      Keyframes: {
        fadeIn:{
          "0%":{opacity: 0} ,
          "100%": {opacity: 1},
        },
        fadeOut:{
          "0%":{opacity: 1} ,
          "100%": {opacity: 0},
        },
        scaleIn:{
          "0%":{transform: scale(0)} ,
          "100%": {transform: scale(1)},
        },
        scaleOut:{
          "0%":{transform: scale(1)} ,
          "100%": {transform: scale(0)},
        },
      },
    },
  },
  plugins: [],
}
