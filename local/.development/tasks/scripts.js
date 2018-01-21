'use strict';
/**
 * Сборка JavaScript
 */
var gulp = require('gulp'),
	modernizr = require("modernizr"),
	$ = require('gulp-load-plugins')();

var src = {
	/**
	 * javascript плагины
	 */
	vendor: [
		'bower_components/jquery/dist/jquery.js',
		'bower_components/CanJS/can.jquery.js',
		'bower_components/CanJS/can.construct.super.js',
		'bower_components/CanJS/can.construct.proxy.js',
		'bower_components/CanJS/can.control.plugin.js',
		// 'bower_components/CanJS/can.stache.js' // Если нужна шаблонизация на клиенте
	],
	/**
	 * Свои скрипты, сначала подключается main.js, затем все остальные
	 */
	main: [
		'src/js/main.js',
		'src/js/**/*.js'
	]
};

gulp.task('scripts-bower', function() {
	// Сборка плагинов
	gulp.src(src.vendor)
		.pipe($.concat('vendor.js'))
		.pipe(gulp.dest(gulp.destPath + '/js/'));
});

gulp.task('scripts-main', function(sources) {
	sources = sources || false;

	// Сборка пользовательских скриптов
	return gulp.src(src.main)
		.pipe($.if(sources, $.sourcemaps.init()))
			.pipe($.concat('main.js'))
			.pipe($.babel({
				presets: ['es2015']
	        }))
		.pipe($.if(sources, $.sourcemaps.write()))
		.pipe(gulp.dest(gulp.destPath + '/js/'));
});