const {src, dest, watch, parallel} = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const terser = require('gulp-terser');


function css(done){
    //Identificar el archivo SASS
    src('src/scss/**/*.scss')
    //Compilarlo
    .pipe(sass())
    //Almacenarla en el disco duro
    .pipe(dest("build/css"))
    done();
}

function javascript(done){
    
    src('src/javascript/**/*.js')
    .pipe(terser())
    .pipe(dest("build/javascript"))
    done();
}

function dev(done){
    watch('src/scss/**/*.scss', css);
    watch('src/javascript/**/*.js', javascript);

    done();
}


//para ejecutar funciones: npx gulp "funcion"
exports.dev = parallel(dev, css, javascript);