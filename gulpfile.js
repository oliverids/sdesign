const gulp = require('gulp');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');

// Caminhos das pastas
const paths = {
  scripts: {
    src: 'scripts/local/**/*.js', // Todos os arquivos .js em scripts/local/
    dest: 'scripts/', // Destino dos arquivos minificados
  },
};

// Tarefa para minificar scripts
function minifyScripts() {
  return gulp
    .src(paths.scripts.src) // Seleciona os arquivos
    .pipe(uglify()) // Minifica os arquivos
    .pipe(rename({ extname: '.min.js' })) // Adiciona .min.js à extensão
    .pipe(gulp.dest(paths.scripts.dest)); // Salva no destino
}

// Tarefa para observar alterações nos arquivos
function watchScripts() {
  gulp.watch(paths.scripts.src, minifyScripts); // Observa alterações nos scripts
}

// Exporta as tarefas
exports.minify = minifyScripts;
exports.watch = watchScripts;
exports.default = gulp.series(minifyScripts, watchScripts);