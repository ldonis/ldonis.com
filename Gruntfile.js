module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        ///* ~·~ ~·~ ~·~ ~·~ ~·~
        ///* Development tasks
        ///* ~·~ ~·~ ~·~ ~·~ ~·~
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

        ///* ~·~ ~·~ ~·~ ~·~ ~·~
        ///* Deployment tasks
        ///* ~·~ ~·~ ~·~ ~·~ ~·~
        concat: {
            landing: {
                src:['../Public/css/rcat.min.css',
                     'Template/css/generic.css',
                     'landing/css/landing.css'],
                dest:'landing/css/landing.full.css'
            },
        cv: {
                src:['../Public/css/rcat.min.css',
                     'Template/css/generic.css',
                     'cv/css/cv.css'],
                dest:'landing/css/landing.full.css'
            }
        },
        cssmin: {
            landing: { src: 'landing/css/landing.full.css', dest: 'landing/css/landing.min.css' },
            cv: { src: 'cv/css/cv.full.css', dest: 'cv/css/cv.min.css' }
        },

        ///* ~·~ ~·~ ~·~ ~·~ ~·~
        ///* Watcher tasks
        ///* ~·~ ~·~ ~·~ ~·~ ~·~
        watch: {
            stylus:{
                files: ['Template/css/generic.styl',
                        'landing/css/landing.styl',
                        'cv/css/cv.styl'],
                tasks: ['stylus:compile']
            },
        },
    });

    ///* ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~
    ///* Including plugins and dependencies
    ///* ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~
    grunt.loadNpmTasks('grunt-contrib-stylus');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');

    ///* ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~
    ///* Running/defining Development tasks
    ///* ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~
    grunt.registerTask('compile',['stylus:compile']);

    ///* ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~
    ///* Running/defining deployment tasks
    ///* ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~ ~·~
    grunt.registerTask('deploy', ['stylus', 'concat', 'cssmin']);

};
