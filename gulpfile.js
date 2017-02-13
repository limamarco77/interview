var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();

/*gulp.task('sync', function() {
    browserSync.init({
        proxy: "my_project.dev",
        files: "*.css,*.php,css/!*css"
    });
});*/

gulp.task('css', function () {
    gulp.src('sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css/'));
});

//Watch task
gulp.task('sass-watch',function() {
    gulp.watch('sass/**/*.scss',['css']);
});