var gulp = require('gulp'),
    sass = require('gulp-sass'),
    sassModuleImporter = require('sass-module-importer'),
    browserSync = require('browser-sync');

gulp.task('styles', function() {
    return gulp.src('./app/assets/sass/**/*.scss')
        .pipe(sass({ importer: sassModuleImporter() }))
        .on('error', function(errorInfo) {
            console.log(errorInfo.toString());
            this.emit('end');
        })
        .pipe(gulp.dest('./app/temp/styles'));
});