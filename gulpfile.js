const gulp = require('gulp');
const postcss = require('gulp-postcss');
const cssnano = require('cssnano');
const autoprefixer = require('autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const concat = require('gulp-concat');

const { src, series, parallel, dest, watch } = require('gulp');

const cssPath = 'css/**/*.css';

function cssTask() {
  return src(cssPath)
    .pipe(sourcemaps.init())
    .pipe(concat('style.css'))
    .pipe(postcss([autoprefixer(), cssnano()])) //not all plugins work with postcss only the ones mentioned in their documentation
    .pipe(sourcemaps.write('.'))
    .pipe(dest('dist/assets/css'));
}

exports.default = cssTask;

// plugins
// npm install --save-dev gulp-postcss cssnano autoprefixer gulp-sourcemaps gulp-concat

