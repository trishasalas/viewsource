// Include gulp
var gulp            = require('gulp'),
    jshint          = require('gulp-jshint'),
    sass            = require('gulp-sass'),
    autoprefixer    = require('gulp-autoprefixer'),
    notify          = require('gulp-notify'),
    minifycss       = require('gulp-minify-css'),
    minifyHTML		= require( 'gulp-minify-html'),
    concat          = require('gulp-concat'),
    uglify          = require('gulp-uglify'),
    rename          = require('gulp-rename'),
    imagemin        = require('gulp-imagemin'),
    pngcrush        = require('imagemin-pngcrush'),
    browserSync     = require('browser-sync'),
    reload		    = browserSync.reload;

gulp.task('browserSync', function() {
    var files = [
        '**/*.php'
    ];

    browserSync.init(files, {
        proxy: 'viewsource.dev/'
    });

	browserSync.reload();
});

// Compile Our Sass
gulp.task('sass', function() {
    gulp.src('sass/**/*.scss')
        .pipe(sass({
            style: 'expanded',
            sourceComments: true
        })
            .on('error', notify.onError(function(error) {
                return "Error: " + error.message;
            }))
    )
        .pipe(autoprefixer({
            browsers: ['last 2 versions', 'ie >= 8']
        }))
        .pipe(gulp.dest('../'))
        .pipe(browserSync.reload({stream:true}))
        .pipe(rename({suffix: '.min'}))
        .pipe(minifycss({keepSpecialComments:0}))
        .pipe(gulp.dest('../'))
        .pipe(browserSync.reload({stream:true}))
        .pipe(notify({
            message: "Styles task complete!"
        }));
});

//gulp.task('lint', function() {
//    return gulp.src('js/*.js')
//        .pipe(jshint())
//        .pipe(jshint.reporter('default'));
//});

// Concatenate & Minify JS
//gulp.task('scripts', function(){
//    return gulp.src('js/*.js')
//        .pipe(concat('site.js'))
//        .pipe(gulp.dest('js'))
//        .pipe(rename('site.min.js'))
//        .pipe(uglify())
//        .pipe(gulp.dest('js'));
//});

gulp.task('minify-html', function() {
	var opts = {
		conditionals: true,
		spare:true
	};

	return gulp.src('*.php')
		.pipe(minifyHTML(opts))
		.pipe(gulp.dest(''));
});

gulp.task('compress', function () {
    return gulp.src('images/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngcrush()]
        }))
        .pipe(gulp.dest('../images'));
});

gulp.task('watch', function() {
    gulp.watch('sass/**/*.scss', ['sass']);
});

// Default Task
gulp.task('default', ['sass', 'compress', 'browserSync', 'watch']);