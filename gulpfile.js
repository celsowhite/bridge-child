/*=== Gulp Plugins ===*/

var gulp         = require('gulp');
var sass         = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var cssnano      = require('gulp-cssnano');
var rename       = require('gulp-rename');
var watch        = require('gulp-watch');

/*=== Sass -> Prefix -> Minify ===*/

gulp.task('styles', function () {

    gulp.src('./scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({ browsers: ['last 2 versions'] }))
    .pipe(cssnano())
    .pipe(rename( {suffix: '.min'} ))
    .pipe(gulp.dest('./css'))

});

/*=== Watch Styles ===*/

gulp.task('watch', function() {

  	gulp.watch('./scss/**/*.scss', ['styles']);

});

/*=== Default Gulp task run watch ===*/

gulp.task('default', ['watch']);