module.exports = {
  purge: ['./*.php', './{config,controller,function,model,view}/**/*.php'],
  darkMode: false, 
  theme: {
    extend: {
      colors: {
        'primary' : '#F6F7D7',
        'secondary' : '#E8EFC0'
      },
      fontFamily :{
        poppins : ["Poppins", "sans-serif"]
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
  ],
}