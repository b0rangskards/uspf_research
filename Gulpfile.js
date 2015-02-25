var gulp = require('gulp'),
    rimraf = require('gulp-rimraf'),
    notify = require('gulp-notify'),
    gutil = require('gulp-util'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifyCss = require('gulp-minify-css'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    copy = require('gulp-copy');


var assetsDir = './app/assets/';

var tempDir = assetsDir + '.tmp/';
var cssTempDir = tempDir + 'css/',
    jsTempDir = tempDir + 'js/';

var assetsCssDir = assetsDir + 'css/',
    assetsJsDir = assetsDir + 'js/';

var sassDir = assetsDir + 'sass/';

var publicDir = './public/';
var cssPublicDir = publicDir + 'css/',
    jsPublicDir = publicDir + 'js/',
    fontsPublicDir = publicDir + 'fonts/';

var vendorDir = assetsDir + 'vendor/';


/* Clean Files in .tmp and public directory */
gulp.task('clean', function(){
return gulp.src([
        cssTempDir + '*.css',
        jsTempDir + '*.js',
        cssPublicDir + '*.css',
        jsPublicDir + '*.js',
        fontsPublicDir + '**.*'
    ], {read: false})
        .pipe(rimraf());
});

/* convert sass and minify css for public page */

gulp.task('sass', ['clean'], function () {
    return gulp.src(sassDir + '*.scss')
        .pipe(sass())
        .pipe(autoprefixer('last 10 version'))
        .pipe(gulp.dest(cssTempDir));
});

gulp.task('css', ['sass'], function () {
return gulp.src(cssTempDir + '*.css')
        .pipe(minifyCss())
        .pipe(gulp.dest(cssPublicDir));
});


/* concat and minify vendor css files for admin page */

gulp.task('admin-css-vendor', ['clean'], function () {
return gulp.src([
        vendorDir + 'bootstrap/dist/css/bootstrap.css',
        assetsCssDir + 'jquery-ui-1.10.1.custom.css',
        assetsCssDir + 'bootstrap-reset.css',
        vendorDir + 'font-awesome/css/font-awesome.css',
        assetsCssDir + 'bucket-ico-fonts.css',
        assetsCssDir + 'clndr.css',
        assetsCssDir + 'css3clock.css',
        assetsCssDir + 'demo_page.css',
        assetsCssDir + 'demo_table.css',
        assetsCssDir + 'DT_bootstrap.css'
    ])
        .pipe(concat('admin-vendor.css'))
        .pipe(minifyCss())
        .pipe(gulp.dest(cssPublicDir));
});

gulp.task('admin-css', ['clean'], function() {
    return gulp.src([
        assetsCssDir + 'admin.css',
        assetsCssDir + 'admin-responsive.css'
    ])
        .pipe(concat('admin.css'))
        .pipe(minifyCss())
        .pipe(gulp.dest(cssPublicDir));
});

/* Concat and uglify vendor js files for admin */

gulp.task('admin-js-vendor', ['clean'], function () {
return gulp.src([
        assetsJsDir + 'jquery.js',
        assetsJsDir + 'jquery-ui-1.10.1.custom.min.js',
        vendorDir + 'bootstrap/dist/js/bootstrap.js',
        assetsJsDir + 'jquery.dcjqaccordion.2.7.js',
        assetsJsDir + 'jquery.scrollTo.min.js',
        assetsJsDir + 'jquery.slimscroll.js',
        assetsJsDir + 'jquery.nicescroll.js',
        assetsJsDir + 'skycons.js',
        assetsJsDir + 'jquery.scrollTo.js',
        assetsJsDir + 'jquery.easing.min.js',
        vendorDir + 'underscore/underscore-min.js',
        assetsJsDir + 'moment-2.2.1.js',
        assetsJsDir + 'evnt.calendar.init.js',
        assetsJsDir + 'clndr.js',
        assetsJsDir + 'css3clock.js',
        assetsJsDir + 'dashboard.js',
        assetsJsDir + 'jquery.customSelect.min.js',
        assetsJsDir + 'jquery.dataTables.js',
        assetsJsDir + 'DT_bootstrap.js',
        assetsJsDir + 'scripts.js'
    ])
        .pipe(concat('admin-vendor.js')).on('error', gutil.log)
        .pipe(gulp.dest(jsTempDir));
});

gulp.task('uglify', ['admin-js-vendor'], function(){
return gulp.src(jsTempDir + '*.js')
       .pipe(uglify({mangle: false}).on('error', gutil.log))
       .pipe(gulp.dest(jsPublicDir));
});



/* Copy fonts to public directory */

gulp.task('copy', ['clean'], function () {
    gulp.src([
        vendorDir + 'font-awesome/fonts/**.*',
        assetsDir + 'fonts/**.*'
    ])
        .pipe(gulp.dest(fontsPublicDir));
});

gulp.task('default', ['clean', 'admin-js-vendor', 'admin-css-vendor', 'admin-css', 'sass', 'css', 'uglify', 'copy']);


