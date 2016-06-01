'use strict';
 
module.exports = function (grunt) {
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');    
    grunt.loadNpmTasks('grunt-contrib-imagemin');    
    grunt.initConfig({
        less: {
            development: {
                options: {
                    paths: ["/"],
                },
                files: {
                    "style.css": "less/style.less"
                }
            },
        },
        watch: {
            files: "less/*.less",
            tasks: ["less"]
        },
		imagemin: {
			images: {
				options: {
					optimizationLevel: 7
				},
				files: [{
					expand: true,
					src: ["img/**/*.{png,jpg,gif,svg}"]
				}]
			}  
        },
    });
     grunt.registerTask('default', ['less:less']);
     grunt.registerTask('default', ['watch']);
     grunt.registerTask('default', ['imagemin']);
};