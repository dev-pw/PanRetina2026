const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const rename = require('gulp-rename');
const cleanCSS = require('gulp-clean-css');
const sourcemaps = require('gulp-sourcemaps');
const browserSync = require('browser-sync').create();
const autoprefixer = require('autoprefixer');

// Caminhos dos arquivos
const paths = {
  scss: {
    src: 'src/sass/**/*.scss',
    main: 'src/sass/theme.scss',
    dest: 'assets/css'
  },
  css: {
    dest: './assets/css'
  },
  content: [
    './**/*.php',
    './**/*.js',
    './templates/**/*.php',
    './js/**/*.js',
    './src/**/*.html',
    './includes/**/*.php',
    './parts/**/*.php',
    './components/**/*.php'
  ],
  php: './**/*.php',
  js: './js/**/*.js',
  templates: './templates/**/*.php'
};

// Plugins do PostCSS para Tailwind v4
const postcssPlugins = [
  require('@tailwindcss/postcss'),
  autoprefixer()
];

// Plugins do PostCSS para produção (com otimizações extras)
const postcssPluginsProd = [
  require('@tailwindcss/postcss'),
  autoprefixer(),
  require('cssnano')({
    preset: ['default', {
      discardComments: { removeAll: true },
      normalizeWhitespace: { exclude: false }
    }]
  })
];

// Tarefa para compilar SCSS + Tailwind v4
function styles() {
  return gulp.src(paths.scss.main)
    .pipe(sourcemaps.init())
    .pipe(sass({
      outputStyle: 'expanded',
      includePaths: ['node_modules'],
      functions: {
        'debug($value)': function(value) {
          console.log('SASS Debug:', value.getValue());
          return value;
        }
      }
    }).on('error', sass.logError))
    .pipe(postcss(postcssPlugins))
    .pipe(gulp.dest(paths.scss.dest))
    .pipe(cleanCSS({
      level: 2,
      format: 'beautify'  
    }))
    .pipe(rename('theme.min.css'))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(paths.css.dest))
    .pipe(browserSync.stream());
}

// Tarefa para desenvolvimento (sem minificação)
function stylesDev() {
  return gulp.src(paths.scss.main)
    .pipe(sourcemaps.init())
    .pipe(sass({
      outputStyle: 'compressed',
      includePaths: ['node_modules'],
      importer: function(url, prev, done) {
        if (url.startsWith('~')) {
          url = url.substring(1);
        }
        return null;
      }
    }).on('error', sass.logError))
    .pipe(postcss(postcssPluginsProd))
    .pipe(rename('theme.min.css'))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(paths.css.dest))
    .pipe(browserSync.stream());
}

// Tarefa para produção (REALMENTE minificado)
function stylesProd() {
  return gulp.src(paths.scss.main)
    .pipe(sourcemaps.init())
    .pipe(sass({
      outputStyle: 'compressed', // Sass já comprime
      includePaths: ['node_modules']
    }).on('error', sass.logError))
    .pipe(postcss(postcssPluginsProd)) // PostCSS com cssnano
    .pipe(rename('theme.min.css'))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(paths.css.dest))
    .pipe(browserSync.stream());
}

// Tarefa para observar mudanças
function watchFiles() {
  gulp.watch(paths.scss.src, stylesDev);
  gulp.watch(paths.content, stylesDev);
  gulp.watch(paths.php).on('change', browserSync.reload);
  gulp.watch(paths.js).on('change', browserSync.reload);
}

// Tarefas principais
const build = gulp.series(stylesProd);
const watch = gulp.series(stylesDev, watchFiles);

// Exportar tarefas
exports.styles = styles;
exports.stylesProd = stylesProd;
exports.build = build;
exports.watch = watch;