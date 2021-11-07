var gulp = require("gulp");
const scss = require('gulp-sass')(require('sass'));
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var minify = require('gulp-minify-css');
// var webserver = require('gulp-webserver');
var browserSync = require("browser-sync");
const autoprefixer = require('gulp-autoprefixer');

// gulp.task('webserver', () => {
//     return gulp.src('dist')
//         .pipe(webserver({
//             hostname: '0.0.0.0',
//             port: 8000,
//             livereload: true,
//             directoryListing: false,
//             open: true,
//             fallback: './dist/index.html'
//         }));
// });

gulp.task('compile', function(){
    return gulp.src("src/scss/**/*.scss")
        .pipe(scss())
        .pipe(concat('style.css'))
        .pipe(autoprefixer())
        .pipe(minify())
        .pipe(gulp.dest('dist/css'))
        .pipe(browserSync.stream());
});


gulp.task('js', function(){
    return gulp.src('src/js/**/*.js')
    .pipe(concat('script.js'))
    .pipe(uglify())
    .pipe(gulp.dest('dist/js'))
    .pipe(browserSync.stream());
 });

gulp.task("watch", function(done) {
    browserSync.init({
        server: "./",
        startPath: "/dist/index.html", // After it browser running
        browser: 'firefox',
        host: 'localhost',
        port: 4000,
        open: true,
        tunnel: true
    })

    gulp.watch("src/scss/**/*.scss", gulp.series('compile'));
    gulp.watch('src/*.html').on('change', browserSync.reload);
    gulp.watch('src/js/**/*.js').on('change', gulp.series('js'));
});

gulp.task('default', gulp.series('compile', 'js', 'watch'));