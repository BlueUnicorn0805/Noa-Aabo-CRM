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
// JS MIX //
mix.js('resources/assets/js/address-editable.js', 'public/assets/js')
mix.js('resources/assets/js/apexcharts.js', 'public/assets/js')
mix.js('resources/assets/js/reply.js', 'public/assets/js')
mix.js('resources/assets/js/blog-edit.js', 'public/assets/js')
mix.js('resources/assets/js/bootstrap-editable.js', 'public/assets/js')
mix.js('resources/assets/js/calendar.js', 'public/assets/js')
mix.js('resources/assets/js/carousel.js', 'public/assets/js')
mix.js('resources/assets/js/chart.js', 'public/assets/js')
mix.js('resources/assets/js/chat.js', 'public/assets/js')
mix.js('resources/assets/js/checkout.js', 'public/assets/js')
mix.js('resources/assets/js/client-create.js', 'public/assets/js')
mix.js('resources/assets/js/colorpicker.js', 'public/assets/js')
mix.js('resources/assets/js/custom.js', 'public/assets/js')
mix.js('resources/assets/js/custom1.js', 'public/assets/js')
mix.js('resources/assets/js/echarts.js', 'public/assets/js')
mix.js('resources/assets/js/flot.js', 'public/assets/js')
mix.js('resources/assets/js/form-editor2.js', 'public/assets/js')
mix.js('resources/assets/js/formelementadvnced.js', 'public/assets/js')
mix.js('resources/assets/js/form-elements.js', 'public/assets/js')
mix.js('resources/assets/js/form-layouts.js', 'public/assets/js')
mix.js('resources/assets/js/form-validation.js', 'public/assets/js')
mix.js('resources/assets/js/form-wizard.js', 'public/assets/js')
mix.js('resources/assets/js/fullcalendar.js', 'public/assets/js')
mix.js('resources/assets/js/index1.js', 'public/assets/js')
mix.js('resources/assets/js/index.js', 'public/assets/js')
mix.js('resources/assets/js/invoice-create.js', 'public/assets/js')
mix.js('resources/assets/js/invoice-edit.js', 'public/assets/js')
mix.js('resources/assets/js/invoice-timelog.js', 'public/assets/js')
mix.js('resources/assets/js/jvectormap.js', 'public/assets/js')
mix.copyDirectory('resources/assets/js/landing.js', 'public/assets/js')
mix.js('resources/assets/js/mail-settings.js', 'public/assets/js')
mix.js('resources/assets/js/map-leafleft.js', 'public/assets/js')
mix.js('resources/assets/js/mapelmaps.js', 'public/assets/js')
mix.js('resources/assets/js/morris.js', 'public/assets/js')
mix.js('resources/assets/js/nvd3.js', 'public/assets/js')
mix.js('resources/assets/js/products.js', 'public/assets/js')
mix.js('resources/assets/js/profile.js', 'public/assets/js')
mix.js('resources/assets/js/progress.js', 'public/assets/js')
mix.js('resources/assets/js/project-details.js', 'public/assets/js')
mix.js('resources/assets/js/project-list.js', 'public/assets/js')
mix.js('resources/assets/js/projects-edit.js', 'public/assets/js')
mix.js('resources/assets/js/projects-new.js', 'public/assets/js')
mix.js('resources/assets/js/projects.js', 'public/assets/js')
mix.js('resources/assets/js/rangeslider.js', 'public/assets/js')
mix.js('resources/assets/js/select2.js', 'public/assets/js')
mix.js('resources/assets/js/sticky.js', 'public/assets/js')
mix.js('resources/assets/js/summernote.js', 'public/assets/js')
mix.js('resources/assets/js/table-data.js', 'public/assets/js')
mix.js('resources/assets/js/table-editable.js', 'public/assets/js')
mix.js('resources/assets/js/task-create.js', 'public/assets/js')
mix.js('resources/assets/js/task-edit.js', 'public/assets/js')
mix.js('resources/assets/js/tasks-list.js', 'public/assets/js')
mix.js('resources/assets/js/themeColors.js', 'public/assets/js')
mix.js('resources/assets/js/ticket-details.js', 'public/assets/js')
mix.js('resources/assets/js/timline.js', 'public/assets/js')
mix.js('resources/assets/js/tooltip&popover.js', 'public/assets/js')
mix.js('resources/assets/js/TypeHead.js', 'public/assets/js')
mix.js('resources/assets/js/userlist.js', 'public/assets/js')

// CSS MIX //
mix.postCss('resources/assets/css/animated.css', 'public/assets/css')

// // SASS or SCSS MIX to CSS
mix.sass('resources/assets/css/skin-modes.scss', 'public/assets/css')
mix.sass('resources/assets/scss/style.scss', 'public/assets/css')

// // COPY DIRECTORIES //
mix.copyDirectory('resources/assets/images', 'public/assets/images')
mix.copyDirectory('resources/assets/plugins', 'public/assets/plugins')
mix.copyDirectory('resources/assets/switcher', 'public/assets/switcher')


mix.options({
    processCssUrls: false
});

// mix.browserSync('http://127.0.0.1:8000');
