module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        less: {
            dev: {
                options: {
                    sourceMap: true,
                    dumpLineNumbers: 'comments',
                    relativeUrls: true
                },
                files: {
                    'css/bootstrap.debug.css': 'less/bootstrap.less',
                }
            },
            production: {
                options: {
                    // paths:["dist/css"], //directory of input source
                    plugins:[
                        new (require ("less-plugin-clean-css"))()
                    ],
                    compress: true,
                    relativeUrls: true
                },
                files: {
                    'dist/css/bootstrap.min.css': 'less/bootstrap.less',
                }
            }
        },
        watch: {
            less: {
                //watch and comepile less files
                files: ['less/*.less'],
                tasks: ['less:dev']
            },
            livereload:{
                //Here we watch the files compiled
                options: {
                    livereload: true,
                },
                files: ['css/*.css']
            }
        }

    });

    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Default task(s).
    grunt.registerTask('default', ['watch']);
    grunt.registerTask('production', ['less:production']);
    grunt.registerTask('dev', ['less:dev']);
};
