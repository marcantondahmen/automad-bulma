var gulp = require('gulp'),
	less = require('gulp-less'),
	autoprefixer = require('gulp-autoprefixer'),
	cleanCSS = require('gulp-clean-css'),
	cleanCSSOptions = {
		format: { wrapAt: 500 },
		rebase: false
	},
	rename = require('gulp-rename'),
	uglify = require('gulp-uglify-es').default,
	uglifyOptions = {
		compress: {
			hoist_funs: false,
			hoist_vars: false
		},
		output: {
			comments: /(license|copyright)/i,
			max_line_len: 500
		}
	},
	concat = require('gulp-concat'),
	gutil = require('gulp-util'),
	onError = function (err) {
		gutil.log(gutil.colors.red('ERROR', err.plugin), err.message);
		gutil.beep();
		new gutil.PluginError(err.plugin, err, { showStack: true })
		this.emit('end');
	};

gulp.task('less', function() {

	return 	gulp.src('less/automad-bulma.less')
			.pipe(less())
			.on('error', onError)
			.pipe(autoprefixer({ grid: false }))
			.pipe(cleanCSS(cleanCSSOptions))
			.pipe(rename({ suffix: '.min' }))
			.pipe(gulp.dest('dist'));

});

gulp.task('js', function() {

	return 	gulp.src(['js/automad-bulma.js'])
			.pipe(uglify(uglifyOptions))
			.pipe(concat('automad-bulma.min.js'))
			.pipe(gulp.dest('dist'));

});

gulp.task('bulma', function() {

	return 	gulp.src('node_modules/bulma/css/bulma.min.css')
			.pipe(gulp.dest('dist'));

});

gulp.task('watch', function () {

	gulp.watch('js/*.js', gulp.series('js'));
	gulp.watch('less/*.less', gulp.series('less'));

});

gulp.task('default', gulp.series('js', 'less', 'bulma'));