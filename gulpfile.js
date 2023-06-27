const assetsPath = './assets/'

let { src, dest, watch, series } = require('gulp')
let browserSync = require('browser-sync')
let rename = require('gulp-rename')
let sass = require('gulp-sass')(require('node-sass'))

function buildScss() {
    return src(assetsPath + '/scss/styles.scss')
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(rename({ suffix: '.min' }))
        .pipe(dest(assetsPath + '/css/'))
}

exports.default = () => {
    browserSync.init(['*.css', '*.scss'], {
        proxy: "users.local",
        notify: false
    });
    watch(assetsPath + 'scss/**/*.scss', buildScss)
    watch(assetsPath + 'scss/**/*.scss').on('change', browserSync.reload)
}

exports.build = series([
    buildScss,
])