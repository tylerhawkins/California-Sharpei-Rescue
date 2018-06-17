/*******************************************************************************
* Dependencies
*******************************************************************************/
var gulp = require('gulp');

var autoprefixer = require('gulp-autoprefixer'),
    browsersync  = require('browser-sync'),
    cache        = require('gulp-cached'),
    filter       = require('gulp-filter'),
    notify       = require('gulp-notify'),
    plumber      = require('gulp-plumber'),
    less         = require('gulp-less'),
    sourcemaps   = require('gulp-sourcemaps');

/*******************************************************************************
* Configuration
*******************************************************************************/
// File paths
var src = '../wp-content/themes/cspr/src',
    dest = '../wp-content/themes/cspr/';

// Supported browsers
var browserSupport = {
    browsers: [
        'last 2 version',
        'safari 5',
        'ie 8',
        'ios 6',
        'android 4'
    ]
};

// Error handling
function onError(error) {
    var errorTitle = '[' + error.plugin + ']',
        errorString = error.message;

    if (error.lineNumber) {
        errorString += ' on line ' + error.lineNumber;
    }

    if (error.fileName) {
        errorString += ' in ' + error.fileName;
    }

    notify.onError({
        title: errorTitle,
        message: errorString,
        sound: false
    })(error);

    this.emit('end');
};

/*******************************************************************************
* Tasks
*******************************************************************************/
// Styles task
gulp.task('styles', function() {
    return gulp.src(src + '/less/**/styles.less')
        .pipe(plumber({ errorHandler: onError }))

        // Cache
        .pipe(cache('styles'))

        // Compile
        .pipe(sourcemaps.init())
        //.pipe(sass({ outputStyle: 'expanded' }))
        .pipe(less())
        .pipe(sourcemaps.write())

        // Autoprefixer
        .pipe(sourcemaps.init({ loadMaps: true }))
        .pipe(autoprefixer( browserSupport ))
        .pipe(sourcemaps.write('../css'))

        // Write css
        .pipe(gulp.dest(dest + '/css'))

        // CSS Injection
        .pipe(filter('**/*.css'))
        .pipe(browsersync.reload({ stream:true }))

        // Notification
        // .pipe(notify({ message: 'Scripts task complete' }))
        ;
});

// BrowserSync task
gulp.task('browsersync', function() {
    browsersync({
        notify: false
    });
});

// Default task
gulp.task('default', ['styles']);

// Watch task
gulp.task('watch', function() {
    gulp.watch(src + '/less/**/styles.less', ['styles']);
});

// BrowserSync and styles Watch task.
gulp.task('bsync', ['browsersync'], function() {
    gulp.watch(src + '/less/**/styles.less', ['styles']);
});