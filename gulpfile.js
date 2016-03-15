var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var cssnano = require('gulp-cssnano');
var checkFileSize = require('gulp-check-filesize');

var BOWER_FILES = './bower_components/';

gulp.task('common-css', function() {
	return gulp.src([
		BOWER_FILES + 'bootstrap/dist/css/bootstrap.min.css',
		BOWER_FILES + 'bootstrap-material-design/dist/css/bootstrap-material-design.min.css',
		BOWER_FILES + 'bootstrap-material-design/dist/css/ripples.min.css',
		BOWER_FILES + 'font-awesome/css/font-awesome.min.css'
	])
	.pipe(checkFileSize())
	.pipe(gulp.dest('./public/common/css'));
});

gulp.task('common-js', function () {
	return gulp.src([
		BOWER_FILES + 'bootstrap/dist/js/bootstrap.min.js',
		BOWER_FILES + 'bootstrap-material-design/dist/js/material.min.js',
		BOWER_FILES + 'bootstrap-material-design/dist/js/ripples.min.js',
		BOWER_FILES + 'jquery/dist/jquery.min.js',
		BOWER_FILES + 'snackbarjs/dist/snackbar.min.js',
		BOWER_FILES + 'moment/min/moment.min.js',
		BOWER_FILES + 'accounting/accounting.min.js'
	])
	.pipe(checkFileSize())
	.pipe(gulp.dest('./public/common/js'));
});

gulp.task('common-fonts', function () {
	return gulp.src([
		BOWER_FILES + 'font-awesome/fonts/**.*'
	])
	.pipe(checkFileSize())
	.pipe(gulp.dest('./public/common/fonts'));
});

gulp.task('common', ['common-css', 'common-js', 'common-fonts']);