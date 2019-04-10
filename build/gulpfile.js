/**
 * GULP tasks.
 * @requires gulp.
 * @description you need GULP in your node_modules folder.
 * @link https://www.npmjs.com/package/gulp
 * Run 'npm install gulp --save-dev' from the command prompt when
 * in the build folder to include.
 */
var gulp = require('gulp');

/**
 * GULP SASS.
 * @requires gulp-sass.
 * @description converts SASS files to CSS.
 * @link https://www.npmjs.com/package/gulp-sass
 * Run 'npm install gulp-sass --save-dev' from the command prompt when
 * in the build folder to include.
 */
var sass = require('gulp-sass');

/**
 * GULP Auto prefixer
 * @requires gulp-autoprefixer.
 * @description adds prefixes for cross-browser compatibility.
 * @link https://www.npmjs.com/package/gulp-autoprefixer
 * Run 'npm install --save-dev gulp-autoprefixer' from the command prompt when
 * in the build folder to include.
 */
var autoprefixer = require('gulp-autoprefixer');

/**
 * GULP Minify
 * @requires gulp-csso
 * @description minifies
 * @link https://www.npmjs.com/package/gulp-csso
 * Run 'npm install gulp-csso --save-dev' from the command prompt when
 * in the build folder to include.
 */
var csso = require('gulp-csso');

/**
 * GULP Watch.
 * @requires gulp-watch.
 * @description watches for changes and runs your other tasks.
 * @link https://www.npmjs.com/package/gulp-watch
 * Run 'npm install --save-dev gulp-watch' from the command prompt when
 * in the build folder to include.
 */
var watch = require('gulp-watch');

/**
 * SASS.
 * @requires gulp-sass.
 * @description converts build/sass/style.scss to build/css/style.css.
 */
gulp.task('sass', function() {
    return gulp.src('sass/**/*.scss')
        .pipe(sass())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('css'))
});

/**
 * Minify.
 * @requires gulp-csso
 * @description minifies the css for production
 */
gulp.task('min-css', function() {
    return gulp.src('css/style.css')
        .pipe(csso())
        .pipe(gulp.dest('../'))
});

/**
 * WATCH.
 * @requires sass
 * @description watches files and runs tasks when a file is saved.
 */
gulp.task('watch', function() {
    gulp.watch('sass/**/*.scss', gulp.series('sass'));
    gulp.watch('css/style.css', gulp.series('min-css'));
});