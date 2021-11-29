const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const sourcemaps = require('gulp-sourcemaps');
const watch = require('gulp-watch');


exports.style = style;
exports.watch = watch;


function style()  {
  return gulp.src('./scss/**/*.scss')
    .pipe(sass({
      includePaths: ['node_modules/bootstrap/scss']
    }))
    .pipe(sourcemaps.init())
    .pipe(sass().on('error' ,sass.logError))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css/'))
}
exports.default=function watch() {
  gulp.watch('./scss/**/*.scss', style);
  // gulp.watch('./*.html').on('change', browserSync.reload);
  gulp.watch('./js/**/*.js');
}
