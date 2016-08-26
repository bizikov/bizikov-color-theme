'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass');

gulp.task('sass', function(){
    gulp.src('assets/scss/colors.scss')
        .pipe(sass())
        .pipe(gulp.dest('assets/css/'))
});

gulp.watch('assets/scss/*.scss', ['sass']);
