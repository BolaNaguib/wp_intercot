module.exports = {
  purge: {
    enabled: false,
    content: ['./**/*.php'],
  },
  theme: {
    extend: {
      colors: {
        main: '#47aa9d',
        secondary: '#106eaa',
        orange: '#f1543a',
      },
      fontFamily: {
        body: ['Rubik', 'sans-serif'],
        display: ['Lobster Two', 'cursive'],
        number: ['sans-serif'],
      },
    },
  },
  variants: {
    rotate: ['active', 'group-hover'],
  },
  plugins: [require('@tailwindcss/typography')],
};
