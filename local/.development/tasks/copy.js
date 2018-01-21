'use strict';
/**
 * Копирование разного рода файлов
 */
var gulp = require('gulp'),
	$ = require('gulp-load-plugins')();

/**
 * Копирование ресурсов
 */
gulp.task('copy', function () {
	return gulp.src('src/resources/**/*')
		.pipe($.newer(gulp.destPath))
		.pipe(gulp.dest(gulp.destPath));
});