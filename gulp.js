var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('our-sass-task', function () {
    gulp.src('./src/**/*.scss')
        .pipe(sass().on('error', sass.logError())
            .pipe(gulp.dest('./web/css'));
}