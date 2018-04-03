/**
 * Build Plugin
 *
 * @author Usability Dynamics, Inc.
 * @version 2.0.0
 * @param grunt
 */
module.exports = function build( grunt ) {

  // Automatically Load Tasks.
  require( 'load-grunt-tasks' )( grunt, {
    pattern: 'grunt-*',
    config: './package.json',
    scope: 'devDependencies'
  });

  grunt.initConfig( {

    // Compile LESS
    less: {
      production: {
        files: {
          'static/styles/style.css': [ 'static/styles/src/style.less' ],
          'static/styles/default-widgets-styles.css': [ 'static/styles/src/default-widgets-styles.less' ],
          'static/styles/favorites-compare.css': [ 'static/styles/src/favorites-compare.less' ],
          'wp_properties.css': [ 'static/styles/src/properties-styles.less' ]
        }
      }
    },

    watch: {
      options: {
        interval: 100,
        debounceDelay: 500
      },
      less: {
        files: [
          'static/styles/src/*.*'
        ],
        tasks: [ 'less' ]
      }
    },

    uglify: {
      production: {
        options: {
          mangle: false,
          beautify: false
        },
        files: [
          {
            expand: true,
            cwd: 'static/scripts/src',
            src: [ '*.js' ],
            dest: 'static/scripts'
          }
        ]
      },
      staging: {
        options: {
          mangle: false,
          beautify: true
        },
        files: [
          {
            expand: true,
            cwd: 'static/scripts/src',
            src: [ '*.js' ],
            dest: 'static/scripts'
          }
        ]
      }
    }

  });

  // Register tasks
  grunt.registerTask( 'default', [ 'less' ] );

};