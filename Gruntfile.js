module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        concat: {
            css: {
                src: [
                    '../Public/css/rcat.min.css',
                    'Template/css/*',
                    'landing/css/*'
                ],
                dest: 'Template/css/lesli.css'
            },
            js: {
                src: [
                    '../Public/js/jquery.min.js',
                    '../Public/js/slider.min.js',
                    'Template/js/*',
                    'landing/js/*'
                ],
                dest: 'Template/js/lesli.js'
            }
        },
        cssmin: {
            css: {
                src: 'Template/css/lesli.css',
                dest: 'Template/css/lesli.min.css'
            }
        },
        //Minify JavaScript files
        uglify: {
            js: {
                files: {
                    'combined.js': ['lesli.min.js']
                }
            }
        },
    });
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-css-url-replace');
    //grunt.registerTask('default', ['concat:css', 'cssmin:css', 'concat:js', 'uglify:js']);
    grunt.registerTask('default', ['concat:css', 'cssmin:css', 'concat:js']);
};