var gulp = require('gulp');
var sass = require('gulp-sass');
var less = require('gulp-less');
var concat = require('gulp-concat');
var minifyCss = require('gulp-minify-css');
var merge = require('merge-stream');
var responsive = require('gulp-responsive-images');
 

 //Grabs all of the scss files in the theme and spits them out in 1 slick css file
 
gulp.task('build/admin', function() {
   
    var scssStream = gulp.src('./assets/**/*.scss')
        .pipe(sass())                      
        .pipe(concat('haa-style.css'))
        .pipe(gulp.dest(''));
    ;
 
});


//Grabs and outputs sass minified


gulp.task('mini', function() {
   
    var scssStream = gulp.src('./assets/**/*.scss')
        .pipe(sass())
        .pipe(minifyCss())                       
        .pipe(concat('haa-style.min.css'))
        .pipe(gulp.dest(''));
    ;
 
});


 
gulp.task('watch', function(){
  gulp.watch('./assets/**/*.scss', ['build/admin']); 
  gulp.watch('./assets/**/*.scss', ['mini']);
})
