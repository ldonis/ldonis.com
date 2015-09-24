module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        stylus:{
            compile:{
                options:{ 'compress': false },
                files:{
                    'Template/css/generic.css' : 'Template/css/generic.styl',
                    'landing/css/landing.css' : 'landing/css/landing.styl',
                    'cv/css/cv.css' : 'cv/css/cv.styl'
                }
            }
        },
        concat: {
            landing: {
                src:['../Public/css/rcat.min.css',
                     'Template/css/generic.css',
                     'landing/css/landing.css'],
                dest:'landing/css/landing.dev.css'
            },
            landingjs: {
                src:['../Public/js/jquery.min.js',
                     '../Public/js/slider.min.js',
                     'landing/js/landing.js'],
                dest:'landing/js/landing.min.js'
            },
            cv: {
                src:['../Public/css/rcat.min.css',
                     'Template/css/generic.css',
                     'cv/css/cv.css'],
                dest:'cv/css/cv.dev.css'
            }
        },
        cssmin:{
            landing: { src: 'landing/css/landing.dev.css', dest: 'landing/css/landing.min.css' },
            cv: { src: 'cv/css/cv.dev.css', dest: 'cv/css/cv.min.css' }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-stylus');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.registerTask(
        'default', ['stylus:compile','concat:landing','concat:landingjs','concat:cv','cssmin:landing','cssmin:cv']);
};
