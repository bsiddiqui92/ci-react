var webpack = require('webpack');
var path = require('path'); 
var commonsPlugin = new webpack.optimize.CommonsChunkPlugin('shared.js'); 

module.exports = {
  entry: {
  	request: "./js/entry/request.js"
  },
  output: {
  	path: __dirname + "/js/bundles", 
    filename: "[name].js"
  },
  plugins: [commonsPlugin],
  module: {
   loaders: [
     {
        test: [/\.js$/, /\.es6$/],
       exclude: /node_modules/,
       loader: 'babel-loader',
       query: {
          cacheDirectory: true, 
          presets: ['es2015', 'react'] 
       }
      }
   ]
 },
 resolve: {
   extensions: ['.js', '.jsx', '.es6']
 }, 
  watch: true
}