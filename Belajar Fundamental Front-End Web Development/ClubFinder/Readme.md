cara menerapkan webpack untuk me-wrap file 

1. pada terminal(alamatnya folder utama file yang ingin di wrap) ketikan npm init
2. lalu setelah setting package.json, ketikan pada terminal npm install @babel/core @babel/preset-env babel-loader css-loader html-webpack-plugin style-loader webpack webpack-cli webpack-dev-server webpack-merge --save-dev
3. selanjutnya buat berkas webpack config, yaitu webpack.common.js, webpack.dev.js, dan webpack.prod.js
