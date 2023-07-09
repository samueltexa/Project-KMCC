const gulp = require('gulp');
const concat = require('gulp-concat');

gulp.task('css', function() {
  return gulp.src(['styles1.css', 'styles2.css'])
    .pipe(concat('styles.css'))
    .pipe(gulp.dest('dist/css'));
});
