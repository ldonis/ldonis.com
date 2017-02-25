
module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),


        ///* Copy vendor modules
        ///* ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~
        copy: {

            ///* LesliCSS Framework
            LesliCSS: {
                expand: true,
                cwd: 'node_modules/leslicss/',
                src: 'src/**/*',
                dest: 'Template/css/lesli/',
            },

            ///* LesliCSS Framework - init file
            LesliCSSIndex:{
                expand: true,
                flatten: true,
                filter: 'isFile',
                src: 'node_modules/leslicss/index.styl',
                dest: 'Template/css/lesli/'
            }

        },



        ///* Compile stylus to css
        ///* ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~
        stylus:{
            compile:{
                options:{ 'compress': false },
                files:{

                    // 404 page
                    'Template/css/landing.css' : 'Template/css/landing.styl',

                }
            }
        },


        ///* Watch
        ///* ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~
        watch: {
            stylus:{
                files: ['Template/css/landing.styl'],
                tasks: ['stylus']
            }
        }

    });



    ///* Including plugins and dependencies
    ///* ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~
    grunt.loadNpmTasks('grunt-contrib-stylus');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-copy');



    ///* Defining Development tasks
    ///* ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~
    grunt.registerTask('vendor', ['copy']);
    grunt.registerTask('compile',['stylus']);
    grunt.registerTask('deploy', ['copy', 'stylus']);


};
