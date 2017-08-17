
module.exports = function (grunt) {

    var LesliGruntVersion = "2.0.0";

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
            compile_only:{
                options:{ 'compress': false },
                files:{

                    // Home page
                    'landing/css/landing.css' : 'landing/css/landing.styl'

                }
            },
            compile_minify:{
                options:{ 'compress': true },
                files:{

                    // Home page
                    'landing/css/landing.min.css' : 'landing/css/landing.styl',

                }
            }
        },


        ///* Watch
        ///* ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~
        watch: {
            stylus:{
                files: ['**/css/*.styl'],
                tasks: ['stylus:compile_only']
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
    grunt.registerTask('compile',['stylus:compile_only']);
    grunt.registerTask('deploy', ['copy', 'stylus']);


};
