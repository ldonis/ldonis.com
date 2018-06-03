

///* Including plugins and dependencies
///* ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~
var gulp = require('gulp');
var stylus = require('gulp-stylus');
var browserSync = require('browser-sync').create();


///* Copy vendor modules
///* ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~
gulp.task('vendor', () => {


	///* LesliCSS
	gulp.src('./node_modules/leslicss/src/**/*')
	.pipe(gulp.dest('./Template/css/lesli/src/'));


	///* LesliCSS loader
	gulp.src('./node_modules/leslicss/index.styl')
	.pipe(gulp.dest('./Template/css/lesli/'));


});



///* Compile stylus to css
///* ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~
gulp.task('stylus', () => {
	gulp.src(['./**/css/*.styl', '!./Template/**'])
	.pipe(stylus({'include css': true}))
    .pipe(gulp.dest('./'));

});



///* Starting sync browser proxy
///* ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~
gulp.task('server', () => {

    browserSync.init({ proxy: "http://127.0.0.1/" });
    gulp.watch('./**/html/*.twig').on('change', browserSync.reload);
    gulp.watch('./**/html/*.php').on('change', browserSync.reload);
    gulp.watch('./**/css/*.css').on('change', browserSync.reload);
    gulp.watch('./**/js/*.js').on('change', browserSync.reload);

});



///* Initialize watchers
///* ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~
gulp.task('watch', () => {
	gulp.watch('./**/css/*.styl', ['stylus']);
})



///* Running default tasks
///* ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~
gulp.task('default', ['vendor', 'stylus', 'webpack'])



///* Run dev tasks
///* ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~
gulp.task('dev', ['server', 'watch']);
