var cleanCss = require('gulp-clean-css');
var concat = require('gulp-concat');
var gulp = require('gulp');
var minify = require('gulp-minify');
var sass = require('gulp-sass')(require('sass'));
var uglify = require('gulp-uglify');

// Scripts
gulp.task('scripts', async function() {
 gulp.src([
  'development/js/*.js',
 ])
  .pipe(concat('scripts.js'))
  .pipe(uglify())
  .pipe(minify())
  .pipe(gulp.dest('js/'));
});

// Styles
gulp.task('styles', async function() {
 gulp.src('development/*.scss')
  .pipe(sass())
  .pipe(minify())
  .pipe(cleanCss())
  .pipe(gulp.dest('css/'));
});

/*
 sass --watch development/style.scss:css/style.css
*/

// Watch
gulp.task('watch', async function() {
 gulp.watch('development/js/*.js', gulp.series('scripts'));
 gulp.watch('development/*.scss', gulp.series('styles'));
});

// Default
gulp.task('default', gulp.series('scripts', 'styles', 'watch'));