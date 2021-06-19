module.exports = {
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {},
        colors: {
          gray: {
            dark: '#171717',
          }
        }
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
