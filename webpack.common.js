const path = require("path");

module.exports = {
  entry: {
    main: "./src/js/main.js",
    home: "./src/js/home.js",
    about: "./src/js/about.js",
    product: "./src/js/product.js",
    "category-product": "./src/js/category-product.js",
    "product-detail": "./src/js/product-detail.js",
    "sign-in": "./src/js/sign-in.js",
    "sign-up": "./src/js/sign-up.js"
  },
  output: {
    path: path.resolve(__dirname, "./public"),
    filename: "js/[name].js",
    clean: {
      dry: true
    }
  },
  module: {
    rules: [
      {
        test: /\.js$/i,
        include: path.resolve(__dirname, "src"),
        use: {
          loader: "babel-loader",
          options: {
            presets: ["@babel/preset-env"]
          }
        }
      },
      {
        test: /\.[s]?css$/,
        include: path.resolve(__dirname, "src"),
        use: ["style-loader", "css-loader", "sass-loader"]
      },
      {
        test: /\.(woff|woff2|eot|ttf|otf)$/i,
        include: path.resolve(__dirname, "node_modules/swiper"),
        use: ["file-loader"]
      },
      {
        test: /\.css$/,
        use: ["style-loader", "css-loader"]
      }
    ]
  }
};
