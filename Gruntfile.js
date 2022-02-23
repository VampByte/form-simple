module.exports = function(grunt) {
    // Project configuration.
    grunt.initConfig({
      pkg: grunt.file.readJSON('package.json'),
      'dart-sass': {
        target: {
          options: {
            outputStyle: 'compressed',
            sourceMap: true
          },
          files: {
            'css/main.min.css' : 'build/scss/main.scss'
          }
        }
      },
      watch: {
        css: {
          files: '**/*.scss',
          tasks: ['dart-sass']
        },
        js: {
          files: ['build/js/*.js'],
          tasks: ['js']
        }
      },
      // Uglify task info. Compress the js files.
      uglify: {
        options   : {
          beautify: false,
          banner   : '/*! <%= pkg.name %> - v<%= pkg.version %> - '
          + '<%= grunt.template.today("yyyy-mm-dd") %>\n'
          + '*\n'
          + '* @Author  USIL\n'
          + '* @Email   <webmaster@usil.edu.pe>\n'
          + '* @version <%= pkg.version %>\n'
          /* + '* @repository <%= pkg.repository.url %>\n' */
          + '*\n'
          + '*/'
        },
        production: {
          files: {
            'js/main.min.js': ['js/main.js']
          }
        }
      },
      concat: {
        basic: {
          options: {
            separator: '\n\n',
            banner   : '/*! <%= pkg.name %> - v<%= pkg.version %> - '
            + '<%= grunt.template.today("yyyy-mm-dd") %>\n'
            + '*\n'
            + '* @Author  USIL\n'
            + '* @Email   <webmaster@usil.edu.pe>\n'
            + '* @version <%= pkg.version %>\n'
            + '*\n'
            + '*/\n'
          },
          files: {
            /* 'js/main.js': ['node_modules/jquery/dist/jquery.js', 'node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'node_modules/slick-carousel/slick/slick.min.js', 'node_modules/wowjs/dist/wow.min.js', 'build/js/main.js'], */
            'js/main.js': ['node_modules/jquery/dist/jquery.js', 'node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'build/js/main.js'],
          },
        },
      },
      // Validate JS code
      jshint: {
        beforeconcat: ['Gruntfile.js', 'build/js/*.js'],
        afterconcat: ['js/main.js']
      },
    });

    grunt.loadNpmTasks('grunt-dart-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Concat JS code
    grunt.loadNpmTasks('grunt-contrib-concat');
    // Validate JS code
    grunt.loadNpmTasks('grunt-contrib-jshint');
    // Compress JS Files
    grunt.loadNpmTasks('grunt-contrib-uglify');

    // Linting task
    grunt.registerTask('lint', ['jshint']);
    // JS task
    grunt.registerTask('js', ['concat','uglify']);

    grunt.registerTask('default',['watch']);

};