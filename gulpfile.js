var gulp = require('gulp');
var sass = require('gulp-sass');
var plumber = require('gulp-plumber');
var autoprefixer = require('gulp-autoprefixer');
var minifyCss = require('gulp-clean-css');
var browserSync = require('browser-sync');

/**
 * Paths
 */

//dependencies
var sassIncludes = [
    "./bower_components/bootstrap-sass/assets/stylesheets",
]

//files
var root = "./";
var phpPath = "./**/*.php";
var jsPath = "./js/**/*.js";
var sassPath = "./scss/**/*.scss";

/**
 * TASKS
 */

gulp.task('browserSync', function() {
    if (!browserSync.active) {
        browserSync.init({
            proxy: 'localhost',
        });
    }
});

gulp.task('sass', function() {
    return gulp.src(sassPath)
	.pipe(plumber())
    // .pipe(scsslint({config: 'lint.yml'}))
	.pipe(sass({
        includePaths: sassIncludes
    }).on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(minifyCss())
    .pipe(gulp.dest(root))
    .pipe(browserSync.reload({
        stream: true
    }));
});

gulp.task('default', ['browserSync'], function(){
    gulp.watch([phpPath, jsPath]).on('change', browserSync.reload);
    gulp.watch(sassPath, ['sass']);
});
