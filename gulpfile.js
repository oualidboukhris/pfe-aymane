'use strict'

var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');
var rename = require('gulp-rename');
var del = require('del');
var replace = require('gulp-replace');
var injectPartials = require('gulp-inject-partials');
var inject = require('gulp-inject');
var sourcemaps = require('gulp-sourcemaps');
var concat = require('gulp-concat');
var merge = require('merge-stream');

gulp.paths = {
    dist: 'dist',
};

var paths = gulp.paths;


gulp.task('sass', function () {
    return gulp.src('./scss/**/style.scss')
        .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest('./css'))
        .pipe(browserSync.stream());
});

// Static Server + watching scss/html files
gulp.task('serve', gulp.series('sass', function() {

    browserSync.init({
        port: 3000,
        server: "./",
        ghostMode: false,
        notify: false
    });

    gulp.watch('scss/**/*.scss', gulp.series('sass'));
    gulp.watch('**/*.html').on('change', browserSync.reload);
    gulp.watch('js/**/*.js').on('change', browserSync.reload);

}));



// Static Server without watching scss files
gulp.task('serve:lite', function() {

    browserSync.init({
        server: "./",
        ghostMode: false,
        notify: false
    });

    gulp.watch('**/*.css').on('change', browserSync.reload);
    gulp.watch('**/*.html').on('change', browserSync.reload);
    gulp.watch('js/**/*.js').on('change', browserSync.reload);

});



gulp.task('sass:watch', function () {
    gulp.watch('./scss/**/*.scss');
});


/* inject partials like sidebar and navbar */
gulp.task('injectPartial', function () {
  return gulp.src("./**/*.html", { base: "./" })
    .pipe(injectPartials())
    .pipe(gulp.dest("."));
});



/* inject Js and CCS assets into HTML */
gulp.task('injectCommonAssets', function () {
  return gulp.src('./**/*.html')
    .pipe(inject(gulp.src([ 
        './vendors/feather/feather.css',
        './vendors/ti-icons/css/themify-icons.css',
        './vendors/css/vendor.bundle.base.css', 
        './vendors/js/vendor.bundle.base.js',
    ], {read: false}), {name: 'plugins', relative: true}))
    .pipe(inject(gulp.src([
        './css/*.css', 
        './js/off-canvas.js', 
        './js/hoverable-collapse.js', 
        './js/template.js', 
        './js/settings.js', 
        './js/todolist.js'
    ], {read: false}), {relative: true}))
    .pipe(gulp.dest('.'));
});

/* inject Js and CCS assets into HTML */
gulp.task('injectLayoutStyles', function () {
    var verticalLightStream = gulp.src(['./**/vertical-default-light/**/*.html',
            './index.html'])
        .pipe(inject(gulp.src([
            './css/vertical-layout-light/style.css', 
        ], {read: false}), {relative: true}))
        .pipe(gulp.dest('.'));
    return merge(verticalLightStream);
});

/*replace image path and linking after injection*/
gulp.task('replacePath', function(){
    var replacePath1 = gulp.src(['./pagess/*/*.html'], { base: "./" })
        .pipe(replace('="images/', '="../../images/'))
        .pipe(replace('href="pages/', 'href="../../pagess/'))
        .pipe(replace('href="index.html"', 'href="../../index.html"'))
        .pipe(gulp.dest('.'));
    var replacePath2 = gulp.src(['./pagess/*.html'], { base: "./" })
        .pipe(replace('="images/', '="../images/'))
        .pipe(replace('"pages/', '"../pagess/'))
        .pipe(replace('href="index.html"', 'href="../index.html"'))
        .pipe(gulp.dest('.'));
    var replacePath3 = gulp.src(['./*/index.html'], { base: "./" })
        .pipe(replace('="images/', '="images/'))
        .pipe(gulp.dest('.'));
    return merge(replacePath1 , replacePath2, replacePath3);
});

/*sequence for injecting partials and replacing paths*/
gulp.task('inject', gulp.series('injectPartial' , 'injectCommonAssets' , 'injectLayoutStyles', 'replacePath'));

gulp.task('clean:vendors', function () {
    return del([
      'vendors/**/*'
    ]);
});

/*Building vendor scripts needed for basic template rendering*/
gulp.task('buildBaseVendorScripts', function() {
    return gulp.src([
        './node_modules/jquery/dist/jquery.min.js', 
        './node_modules/popper.js/dist/umd/popper.min.js', 
        './node_modules/bootstrap/dist/js/bootstrap.min.js', 
        './node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js'
    ])
      .pipe(concat('vendor.bundle.base.js'))
      .pipe(gulp.dest('./vendors/js'));
});

/*Building vendor styles needed for basic template rendering*/
gulp.task('buildBaseVendorStyles', function() {
    return gulp.src(['./node_modules/perfect-scrollbar/css/perfect-scrollbar.css'])
      .pipe(concat('vendor.bundle.base.css'))
      .pipe(gulp.dest('./vendors/css'));
});

/*Scripts for addons*/
gulp.task('copyAddonsScripts', function() {
    var aScript1 = gulp.src(['node_modules/chart.js/dist/Chart.min.js'])
        .pipe(gulp.dest('./vendors/chart.js'));
    var aScript2 = gulp.src(['node_modules/jquery-bar-rating/dist/jquery.barrating.min.js'])
        .pipe(gulp.dest('./vendors/jquery-bar-rating'));
    var aScript4 = gulp.src(['node_modules/progressbar.js/dist/progressbar.min.js'])
        .pipe(gulp.dest('./vendors/progressbar.js'));
    var aScript5 = gulp.src(['node_modules/moment/moment.js'])
        .pipe(gulp.dest('./vendors/moment'));
    var aScript19 = gulp.src(['node_modules/raphael/raphael.min.js'])
        .pipe(gulp.dest('./vendors/raphael'));
    var aScript21 = gulp.src(['node_modules/progressbar.js/dist/progressbar.min.js'])
        .pipe(gulp.dest('./vendors/progressbar.js'));
    var aScript22 = gulp.src(['./node_modules/summernote/dist/**/*'])
        .pipe(gulp.dest('./vendors/summernote/dist'));
    var aScript23 = gulp.src(['node_modules/pwstabs/assets/jquery.pwstabs.min.js'])
        .pipe(gulp.dest('./vendors/pwstabs'));
    var aScript24 = gulp.src(['./node_modules/ace-builds/src-min/**/*'])
        .pipe(gulp.dest('./vendors/ace-builds/src-min'));
    var aScript25 = gulp.src(['./node_modules/lightgallery/dist/**/*'])
        .pipe(gulp.dest('./vendors/lightgallery'));
    var aScript26 = gulp.src(['node_modules/inputmask/dist/jquery.inputmask.bundle.js'])
        .pipe(gulp.dest('./vendors/inputmask'));
    var aScript29 = gulp.src(['node_modules/jquery-file-upload/js/jquery.uploadfile.min.js'])
        .pipe(gulp.dest('./vendors/jquery-file-upload'));
    var aScript30 = gulp.src(['node_modules/jquery-asColor/dist/jquery-asColor.min.js'])
        .pipe(gulp.dest('./vendors/jquery-asColor'));
    var aScript31 = gulp.src(['node_modules/jquery-asGradient/dist/jquery-asGradient.min.js'])
        .pipe(gulp.dest('./vendors/jquery-asGradient'));
    var aScript32 = gulp.src(['node_modules/jquery-asColorPicker/dist/jquery-asColorPicker.min.js'])
        .pipe(gulp.dest('./vendors/jquery-asColorPicker'));
    var aScript33 = gulp.src(['node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'])
        .pipe(gulp.dest('./vendors/bootstrap-datepicker'));
    var aScript34 = gulp.src(['node_modules/moment/min/moment.min.js'])
        .pipe(gulp.dest('./vendors/moment'));
    var aScript35 = gulp.src(['node_modules/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js'])
        .pipe(gulp.dest('./vendors/x-editable'));
    var aScript36 = gulp.src(['node_modules/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.js'])
        .pipe(gulp.dest('./vendors/tempusdominus-bootstrap-4'));
    var aScript38 = gulp.src(['node_modules/typeahead.js/dist/typeahead.bundle.min.js'])
        .pipe(gulp.dest('./vendors/typeahead.js'));
    var aScript39 = gulp.src(['node_modules/select2/dist/js/select2.min.js'])
        .pipe(gulp.dest('./vendors/select2'));
    var aScript40 = gulp.src(['node_modules/codemirror/lib/codemirror.js'])
        .pipe(gulp.dest('./vendors/codemirror'));
    var aScript41 = gulp.src(['node_modules/codemirror/mode/javascript/javascript.js'])
        .pipe(gulp.dest('./vendors/codemirror'));
    var aScript42 = gulp.src(['node_modules/codemirror/mode/shell/shell.js'])
        .pipe(gulp.dest('./vendors/codemirror'));
    var aScript43 = gulp.src(['node_modules/quill/dist/quill.min.js'])
        .pipe(gulp.dest('./vendors/quill'));
    var aScript44 = gulp.src(['node_modules/simplemde/dist/simplemde.min.js'])
        .pipe(gulp.dest('./vendors/simplemde'));
    var aScript46 = gulp.src(['node_modules/bootstrap-maxlength/bootstrap-maxlength.min.js'])
        .pipe(gulp.dest('./vendors/bootstrap-maxlength'));  
    var aScript55 = gulp.src(['node_modules/datatables.net/js/jquery.dataTables.js'])
        .pipe(gulp.dest('./vendors/datatables.net'));
    var aScript56 = gulp.src(['node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js'])
        .pipe(gulp.dest('./vendors/datatables.net-bs4'));
    var aScript57 = gulp.src(['node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js'])
        .pipe(gulp.dest('./vendors/datatables.net-bs4'));
    var aScript59 = gulp.src(['node_modules/owl-carousel-2/owl.carousel.min.js'])
        .pipe(gulp.dest('./vendors/owl-carousel-2'));
    var aScript60 = gulp.src(['node_modules/clipboard/dist/clipboard.min.js'])
        .pipe(gulp.dest('./vendors/clipboard'));
    var aScript61 = gulp.src(['node_modules/colcade/colcade.js'])
        .pipe(gulp.dest('./vendors/colcade'));
    var aScript62 = gulp.src(['node_modules/jquery-contextmenu/dist/jquery.contextMenu.min.js'])
        .pipe(gulp.dest('./vendors/jquery-contextmenu'));
    var aScript65 = gulp.src(['node_modules/twbs-pagination/jquery.twbsPagination.min.js'])
        .pipe(gulp.dest('./vendors/twbs-pagination'));
    var aScript66 = gulp.src(['node_modules/sweetalert/dist/sweetalert.min.js'])
        .pipe(gulp.dest('./vendors/sweetalert'));
    var aScript68 = gulp.src(['node_modules/nouislider/distribute/nouislider.min.js'])
        .pipe(gulp.dest('./vendors/nouislider')); 
    var aScript70 = gulp.src(['./node_modules/tinymce/**/*'])
        .pipe(gulp.dest('./vendors/tinymce'));
    return merge(aScript1, aScript2, aScript4, aScript5, aScript19, aScript21, aScript22, aScript23, aScript24, aScript25, aScript26, aScript29, aScript30, aScript31, aScript32, aScript33, aScript34, aScript35, aScript36, aScript38, aScript39, aScript40, aScript41, aScript42, aScript43, aScript44, aScript46, aScript55, aScript56, aScript57, aScript59, aScript60, aScript61, aScript62, aScript65, aScript66, aScript68, aScript70);
});


/*Styles for addons*/
gulp.task('copyAddonsStyles', function() {
    var aStyle1 = gulp.src(['./node_modules/@mdi/font/css/materialdesignicons.min.css'])
        .pipe(gulp.dest('./vendors/mdi/css'));
    var aStyle2 = gulp.src(['./node_modules/@mdi/font/fonts/*'])
        .pipe(gulp.dest('./vendors/mdi/fonts'));
    var aStyle3 = gulp.src(['./node_modules/font-awesome/css/font-awesome.min.css'])
        .pipe(gulp.dest('./vendors/font-awesome/css'));
    var aStyle4 = gulp.src(['./node_modules/font-awesome/fonts/*'])
        .pipe(gulp.dest('./vendors/font-awesome/fonts'));
    var aStyle5 = gulp.src(['./node_modules/flag-icon-css/css/flag-icon.min.css'])
        .pipe(gulp.dest('./vendors/flag-icon-css/css'));
    var aStyle6 = gulp.src(['./node_modules/flag-icon-css/flags/**/*'])
        .pipe(gulp.dest('./vendors/flag-icon-css/flags'));
    var aStyle8 = gulp.src(['./node_modules/simple-line-icons/fonts/*'])
        .pipe(gulp.dest('./vendors/simple-line-icons/fonts'));
    var aStyle9 = gulp.src(['./node_modules/ti-icons/css/themify-icons.css'])
        .pipe(gulp.dest('./vendors/ti-icons/css'));
    var aStyle10 = gulp.src(['./node_modules/ti-icons/fonts/*'])
        .pipe(gulp.dest('./vendors/ti-icons/fonts')); 
    var aStyle16 = gulp.src(['node_modules/jquery-bar-rating/dist/themes/fontawesome-stars.css'])
        .pipe(gulp.dest('./vendors/jquery-bar-rating'));
    var aStyle17 = gulp.src(['node_modules/jquery-bar-rating/dist/themes/bars-1to10.css'])
        .pipe(gulp.dest('./vendors/jquery-bar-rating'));
    var aStyle18 = gulp.src(['node_modules/jquery-bar-rating/dist/themes/bars-horizontal.css'])
        .pipe(gulp.dest('./vendors/jquery-bar-rating'));
    var aStyle19 = gulp.src(['node_modules/jquery-bar-rating/dist/themes/bars-movie.css'])
        .pipe(gulp.dest('./vendors/jquery-bar-rating'));
    var aStyle20 = gulp.src(['node_modules/jquery-bar-rating/dist/themes/bars-pill.css'])
        .pipe(gulp.dest('./vendors/jquery-bar-rating'));
    var aStyle21 = gulp.src(['node_modules/jquery-bar-rating/dist/themes/bars-reversed.css'])
        .pipe(gulp.dest('./vendors/jquery-bar-rating'));
    var aStyle22 = gulp.src(['node_modules/jquery-bar-rating/dist/themes/bars-square.css'])
        .pipe(gulp.dest('./vendors/jquery-bar-rating'));
    var aStyle23 = gulp.src(['node_modules/jquery-bar-rating/dist/themes/bootstrap-stars.css'])
        .pipe(gulp.dest('./vendors/jquery-bar-rating'));
    var aStyle24 = gulp.src(['node_modules/jquery-bar-rating/dist/themes/css-stars.css'])
        .pipe(gulp.dest('./vendors/jquery-bar-rating'));
    var aStyle25 = gulp.src(['node_modules/jquery-bar-rating/dist/themes/fontawesome-stars-o.css'])
        .pipe(gulp.dest('./vendors/jquery-bar-rating'));
    var aStyle26 = gulp.src(['node_modules/jquery-bar-rating/examples/css/examples.css'])
        .pipe(gulp.dest('./vendors/jquery-bar-rating'));
    var aStyle28 = gulp.src(['node_modules/jquery-file-upload/css/uploadfile.css'])
        .pipe(gulp.dest('./vendors/jquery-file-upload'));
    var aStyle29 = gulp.src(['node_modules/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css'])
        .pipe(gulp.dest('./vendors/tempusdominus-bootstrap-4'));
    var aStyle30 = gulp.src(['node_modules/jquery-asColorPicker/dist/css/asColorPicker.min.css'])
        .pipe(gulp.dest('./vendors/jquery-asColorPicker/css'));
    var aStyle31 = gulp.src(['node_modules/jquery-asColorPicker/dist/images/*'])
        .pipe(gulp.dest('./vendors/jquery-asColorPicker/images'));
    var aStyle32 = gulp.src(['node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'])
        .pipe(gulp.dest('./vendors/bootstrap-datepicker'));
    var aStyle33 = gulp.src(['node_modules/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css'])
        .pipe(gulp.dest('./vendors/x-editable'));
    var aStyle34 = gulp.src(['node_modules/select2/dist/css/select2.min.css'])
        .pipe(gulp.dest('./vendors/select2')); 
    var aStyle35 = gulp.src(['node_modules/select2-bootstrap-theme/dist/select2-bootstrap.min.css'])
        .pipe(gulp.dest('./vendors/select2-bootstrap-theme'));
    var aStyle36 = gulp.src(['node_modules/codemirror/lib/codemirror.css'])
        .pipe(gulp.dest('./vendors/codemirror'));
    var aStyle37 = gulp.src(['node_modules/codemirror/theme/ambiance.css'])
        .pipe(gulp.dest('./vendors/codemirror'));
    var aStyle39 = gulp.src(['node_modules/quill/dist/quill.snow.css'])
        .pipe(gulp.dest('./vendors/quill'));
    var aStyle40 = gulp.src(['node_modules/simplemde/dist/simplemde.min.css'])
        .pipe(gulp.dest('./vendors/simplemde'));
    var aStyle42 = gulp.src(['node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css'])
        .pipe(gulp.dest('./vendors/datatables.net-bs4'));
    var aStyle45 = gulp.src(['node_modules/owl-carousel-2/assets/owl.carousel.min.css'])
        .pipe(gulp.dest('./vendors/owl-carousel-2'));
    var aStyle46 = gulp.src(['node_modules/owl-carousel-2/assets/owl.theme.default.min.css'])
        .pipe(gulp.dest('./vendors/owl-carousel-2'));
    var aStyle47 = gulp.src(['node_modules/owl-carousel-2/assets/owl.video.play.png'])
        .pipe(gulp.dest('./vendors/owl-carousel-2'));
    var aStyle50 = gulp.src(['node_modules/nouislider/distribute/nouislider.min.css'])
        .pipe(gulp.dest('./vendors/nouislider'));
    var aStyle53 = gulp.src(['node_modules/ion-rangeslider/img/*'])
        .pipe(gulp.dest('./vendors/ion-rangeslider/img'));
    var aStyle54 = gulp.src(['node_modules/pwstabs/assets/jquery.pwstabs.min.css'])
        .pipe(gulp.dest('./vendors/pwstabs'));
    var aStyle55 = gulp.src(['node_modules/jquery-contextmenu/dist/jquery.contextMenu.min.css'])
        .pipe(gulp.dest('./vendors/jquery-contextmenu'));
    var aStyle56 = gulp.src(['./node_modules/puse-icons-feather/feather.css'])
        .pipe(gulp.dest('./vendors/feather'));
    var aStyle57 = gulp.src(['./node_modules/puse-icons-feather/fonts/*'])
        .pipe(gulp.dest('./vendors/feather/fonts'));
    return merge(aStyle1, aStyle2, aStyle3, aStyle4, aStyle5, aStyle6, aStyle8, aStyle9, aStyle10, aStyle16, aStyle17, aStyle18, aStyle19, aStyle20, aStyle21, aStyle22, aStyle23, aStyle24, aStyle25, aStyle26, aStyle28, aStyle29, aStyle30, aStyle31, aStyle32, aStyle33, aStyle34, aStyle35, aStyle36, aStyle37, aStyle39, aStyle40, aStyle42, aStyle45, aStyle46, aStyle47, aStyle50, aStyle53, aStyle54, aStyle55, aStyle56, aStyle57);
});

//Copy essential map files
gulp.task('copyMapFiles', function() {
    var map1 = gulp.src('node_modules/bootstrap/dist/js/bootstrap.min.js.map')
        .pipe(gulp.dest('./vendors/js'));
    var map2 = gulp.src('node_modules/@mdi/font/css/materialdesignicons.min.css.map')
        .pipe(gulp.dest('./vendors/mdi/css'));
    var map3 = gulp.src('node_modules/jquery-contextmenu/dist/jquery.contextMenu.min.css.map')
        .pipe(gulp.dest('./vendors/jquery-contextmenu'));
    var map4 = gulp.src('node_modules/jquery-contextmenu/dist/jquery.contextMenu.min.js.map')
        .pipe(gulp.dest('./vendors/jquery-contextmenu'));
    var map5 = gulp.src('node_modules/jquery-asColorPicker/dist/jquery-asColorPicker.min.js.map')
        .pipe(gulp.dest('./vendors/jquery-asColorPicker'));
    var map6 = gulp.src('node_modules/jquery-asColorPicker/dist/css/asColorPicker.min.css.map')
        .pipe(gulp.dest('./vendors/jquery-asColorPicker/css'));
    var map7 = gulp.src('node_modules/jquery-asColor/dist/jquery-asColor.min.js.map')
        .pipe(gulp.dest('./vendors/jquery-asColor'));
    var map8 = gulp.src('node_modules/jquery-bar-rating/dist/jquery.barrating.min.js.map')
        .pipe(gulp.dest('./vendors/jquery-bar-rating'));
    var map9 = gulp.src('node_modules/jquery-asGradient/dist/jquery-asGradient.min.js.map')
        .pipe(gulp.dest('./vendors/jquery-asGradient'));
    var map10 = gulp.src('node_modules/quill/dist/quill.min.js.map')
        .pipe(gulp.dest('./vendors/quill'));
    var map12 = gulp.src('node_modules/jquery-bar-rating/dist/jquery.barrating.min.js.map')
        .pipe(gulp.dest('./vendors/jquery-bar-rating'));
    return merge(map1, map2, map3, map4, map5, map6, map7, map8, map9, map10, map12);
});

/*sequence for building vendor scripts and styles*/
gulp.task('bundleVendors', gulp.series('clean:vendors', 'buildBaseVendorStyles','buildBaseVendorScripts', 'copyAddonsStyles', 'copyAddonsScripts', 'copyMapFiles'));

gulp.task('default', gulp.series('serve'));
