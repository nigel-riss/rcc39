var gulp = require('gulp'),
    watch = require('gulp-watch'),
    browserSync = require('browser-sync').create();

gulp.task('watch', function() {
    browserSync.init({
        server: {
            baseDir: 'app'
        }
    });

    watch('./app/*.html', function() {
        browserSync.reload();
    });

    watch('./app/assets/sass/**/*.scss', function() {
        gulp.start('cssInject');
    });

    watch('./app/*.php', function() {
        gulp.start('copyPHP');
    });

    watch('./app/temp/styles/styles.css', function() {
        gulp.start('copyCSS');
    });
});


gulp.task('cssInject', ['styles'], function() {
    return gulp.src('./app/temp/styles/styles.css')
        .pipe(browserSync.stream());
})