const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public_html/js');
mix.styles(['resources/js/app.js'], 'public_html/css/app.css').version();

mix.styles([
    'public_html/css/social-icons.css',
    'public_html/css/owl.carousel.css',
    'public_html/css/owl.theme.css',
    'public_html/css/prism.css',
    'public_html/css/main.css',
    'public_html/css/custom.css',
], 'public_html/css/all.css').version();

mix.js(
    'public_html/js/scripts.js', 'public_html/js/scripts.min.js')
    .js('resources/assets/js/profile.js', 'public_html/assets/js/profile.js')
    .js('resources/assets/js/custom/custom.js', 'public_html/assets/js/custom/custom.js')
    .js('resources/assets/js/custom/custom-datatable.js', 'public_html/assets/js/custom/custom-datatable.js')
    .version();


mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css',
    'public_html/assets/css/bootstrap.min.css');

mix.copy('node_modules/datatables.net-dt/css/jquery.dataTables.min.css',
    'public_html/assets/css/jquery.dataTables.min.css');
mix.copy('node_modules/datatables.net-dt/images', 'public_html/assets/images');
mix.copy('node_modules/select2/dist/css/select2.min.css',
    'public_html/assets/css/select2.min.css');
mix.copy('node_modules/sweetalert/dist/sweetalert.css',
    'public_html/assets/css/sweetalert.css');
mix.copy('node_modules/izitoast/dist/css/iziToast.min.css',
    'public_html/assets/css/iziToast.min.css');

mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/css',
    'public_html/assets/css/@fortawesome/fontawesome-free/css');
mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts',
    'public_html/assets/css/@fortawesome/fontawesome-free/webfonts');

mix.babel('node_modules/jquery.nicescroll/dist/jquery.nicescroll.js',
    'public_html/assets/js/jquery.nicescroll.js');
mix.babel('node_modules/jquery/dist/jquery.min.js',
    'public_html/assets/js/jquery.min.js');
mix.babel('node_modules/popper.js/dist/umd/popper.min.js',
    'public_html/assets/js/popper.min.js');
mix.babel('node_modules/bootstrap/dist/js/bootstrap.min.js',
    'public_html/assets/js/bootstrap.min.js');
mix.babel('node_modules/datatables.net/js/jquery.dataTables.min.js',
    'public_html/assets/js/jquery.dataTables.min.js');
mix.babel('node_modules/select2/dist/js/select2.min.js',
    'public_html/assets/js/select2.min.js');
mix.babel('node_modules/sweetalert/dist/sweetalert.min.js',
    'public_html/assets/js/sweetalert.min.js');
mix.babel('node_modules/izitoast/dist/js/iziToast.min.js',
    'public_html/assets/js/iziToast.min.js');


 mix.js('resources/assets/js/posts/posts.js', 'public_html/assets/js/posts/posts.js').version();


 mix.js('resources/assets/js/categories/categories.js', 'public_html/assets/js/categories/categories.js').version();


 mix.js('resources/assets/js/blogs/blogs.js', 'public_html/assets/js/blogs/blogs.js').version();


 mix.js('resources/assets/js/consultations/consultations.js', 'public_html/assets/js/consultations/consultations.js').version();


 mix.js('resources/assets/js/card_lists/card_lists.js', 'public_html/assets/js/card_lists/card_lists.js').version();



 mix.js('resources/assets/js/company_teams/company_teams.js', 'public_html/assets/js/company_teams/company_teams.js').version();
