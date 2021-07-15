const mix = require('laravel-mix');

mix
  .js('assets/scripts/main.js', 'dist/scripts')
  .sass('assets/styles/main.scss', 'dist/styles')
  .copyDirectory('assets/img', 'dist/images');

  // Enable Browsersync and source maps for development builds only
if (!mix.inProduction()) {
    mix.webpackConfig({ 
        devtool: 'inline-source-map',
    
        stats: {
            children: true,
        } });
    mix.browserSync({
      proxy: 'localhost:10008',
      open: false,
      notify: false,
      files: ['dist/styles/**/*.css', 'dist/scripts/**/*.js', '**/*.php'],
      snippetOptions: {
        ignorePaths: ['admin/**'],
      },
    });
  }

//   plugins: [
//     new webpack.ProvidePlugin({
//       $: 'jquery',
//       jQuery: 'jquery',
//       'window.jQuery': 'jquery'
//     }),
// ]

  