var gulp = require('gulp');
var sass = require('gulp-sass');

//task para o sass
gulp.task('sass', function () {
  gulp.src('sass/**/*.sass')
.pipe(sass({outputStyle: 'expanded'}).on('error',sass.logError)) //descomentar essa linha apenas quando for a produção final p comprimir todo o css
  //.pipe(sass({outputStyle: 'compressed'}).on('error',sass.logError)) //descomentar essa linha apenas quando for a produção final p comprimir todo o css
  .pipe(gulp.dest('css'));
});

//task para o watch
gulp.task('sass:watch', function () {
    gulp.watch('sass/**/*.sass', ['sass']);
});

//essa task quando chamnada executa outras task colocadas em parametros
gulp.task('upCss', ['sass', 'sass:watch']);

//task padrão
gulp.task('default', function() {

});
