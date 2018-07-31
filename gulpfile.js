/*
* Lesli
*
* (c) Copyright 2018 Lesli Technologies, S. A., all rights reserved.
*
* All the information provided by this website is protected by laws of Guatemala related 
* to industrial property, intellectual property, copyright and relative international laws. 
* Lesli Technologies, S. A. is the exclusive owner of all intellectual or industrial property
* rights of the code, texts, trade mark, design, pictures and any other information.
* Without the written permission of Lesli Technologies, S. A., any replication, modification,
* transmission, publication is strictly forbidden.
*
* @author   Luis Donis <ldonis@lesli.tech>
* @license  Propietary
* @version  1.0.0
* @link     https://www.lesli.tech
*/

///* Including plugins and dependencies
///* ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~
var gulp = require('gulp');
var stylus = require('gulp-stylus');
var rename = require("gulp-rename");
var uglify = require("gulp-uglify");
var cssnano = require('gulp-cssnano');
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
    .pipe(stylus({'include css': true, compress: false}))
    .pipe(gulp.dest('./'));
    //.pipe(cssnano())
    //.pipe(rename({suffix: '.min'}))
    //.pipe(gulp.dest('./'));

});



///* Starting sync browser proxy
///* ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~
gulp.task('server', () => {

    browserSync.init({proxy:"http://127.0.0.1",ui:{port:8081},port:8080});
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
