var gulp = require('gulp'),
    rename = require('gulp-rename'),
    urlAdjuster = require('gulp-css-url-adjuster');

gulp.task('copyPHP', function() {
    gulp.src('./app/*.php')
        .pipe(gulp.dest('G:/_xampp/htdocs/rcc39/wp-content/themes/rcc39/'));
});

gulp.task('copyCSS', function() {
    gulp.src('./app/temp/styles/styles.css')
        .pipe(rename('style.css'))
        .pipe(urlAdjuster({
            replace: ['../../assets', '.']
        }))
        .pipe(gulp.dest('G:/_xampp/htdocs/rcc39/wp-content/themes/rcc39/'));
}); 

gulp.task('copyJS', function() {
    gulp.src('./app/temp/js/App.js')
        .pipe(gulp.dest('G:/_xampp/htdocs/rcc39/wp-content/themes/rcc39/'));
});