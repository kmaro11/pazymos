const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const fs = require('fs');

// Generate HTML plugins for each template
const generateHtmlPlugins = () => {
  const templateDir = path.resolve(__dirname, 'src/templates');
  const templateFiles = fs
    .readdirSync(templateDir)
    .filter((file) => file.endsWith('.html'));

  return templateFiles.map((file) => {
    const name = file.split('.')[0];
    return new HtmlWebpackPlugin({
      filename: `${name}.html`,
      template: path.resolve(templateDir, file),
      inject: true,
    });
  });
};

module.exports = {
  entry: ['./src/js/index.js', './src/styles/tailwind.css'],
  mode: 'development',
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'js/bundle.js',
    clean: true,
  },
  module: {
    rules: [
      {
        test: /\.css$/i,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'postcss-loader'
        ],
      },
      {
        test: /\.(png|svg|jpg|jpeg|gif)$/i,
        type: 'asset/resource',
        generator: {
          filename: 'images/[name][ext]'
        }
      }
    ],
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: 'css/main.css',
    }),
    ...generateHtmlPlugins(),
    new CopyWebpackPlugin({
      patterns: [
        { from: 'src/svg', to: 'svg' },
        { from: 'src/images', to: 'images' }
      ]
    }),
  ],
  devServer: {
    static: {
      directory: path.join(__dirname, 'dist'),
    },
    port: 3000,
    open: true,
    hot: true,
  },
}; 