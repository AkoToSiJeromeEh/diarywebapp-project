module.exports = {
  content: ["./index.html", "./static/**/*.{html,js,php}" , "./pages/**/*.{html,js,php}" ,"./src/**/*.{html,js,php}"],
  theme: {
    extend: {
      backgroundImage: {
        "landing-pattern": "url('../../public/landing-bg.jpg')",
        "login-pattern": "url('../../public/login-bg.jpg')",
        "pages-pattern": "url('../../public/bg-5.jpg')",
      },
      backgroundColor: {
        'black-hsl': 'rgba(0, 0, 0, 0.47)'
      },
      colors: {
        primary: {
          darkviolet: "#5C469C",
        },
        secondary: {
          lightviolet: "#D4ADFC",
        },
        accent: {
          white: "#FFFFFF",
        },
      },
      screens : {

        'small' : '500px'
      }
    },
  },
  plugins: [],
};
