
module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),


        ///* Copy vendor modules
        ///* ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~
        copy: {

            ///* Responsive Cat CSS Framework
            ///* ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~
            ResponsiveCat: {
                expand: true,
                cwd: 'node_modules/responsivecat/',
                src: 'src/**/*',
                dest: 'Template/css/rcat/',
            },

            ///* Responsive Cat style constructor framework
            ///* ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~
            ResponsiveCatIndex:{
                expand: true,
                flatten: true,
                filter: 'isFile',
                src: 'node_modules/responsivecat/index.styl',
                dest: 'Template/css/rcat/'
            },

            ///* jQuery JavaScript library
            ///* ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~
            jQuery:{
                expand: true,
                flatten: true,
                filter: 'isFile',
                src: 'node_modules/jquery/dist/jquery.min.js',
                dest: 'Template/js/'
            }

        },



        ///* Compile stylus to css
        ///* ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~
        stylus:{
            compile:{
                options:{ 'compress': false },
                files:{

                    // Home page
                    'landing/css/landing.css' : 'landing/css/landing.styl',

                    // Blog home
                    'blog/css/blog.css' : 'blog/css/blog.styl',

                }
            }
        },



        ///* Minify CSS
        ///* ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~
        cssmin: {

            // landing page
            landing: { src: 'landing/css/landing.css', dest: 'landing/css/landing.min.css' },

            // Blog home
            landing: { src: 'blog/css/blog.css', dest: 'blog/css/blog.min.css' },

        },



        ///* Minify JavaScript files
        ///* ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~
        uglify: {
            options: { compress: { unused: false } },
        },




        ///* Watch
        ///* ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~
        watch: {
            stylus:{
                files: ['Template/css/global.styl',
                        'landing/css/*.styl',
                        'blog/css/*.styl'],
                tasks: ['stylus']
            }
        }

    });



    ///* Including plugins and dependencies
    ///* ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~
    grunt.loadNpmTasks('grunt-contrib-stylus');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-copy');



    ///* Defining Development tasks
    ///* ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~  ~·~
    grunt.registerTask('vendor', ['copy']);
    grunt.registerTask('compile',['stylus']);
    grunt.registerTask('deploy', ['copy', 'stylus', 'cssmin']);


};
