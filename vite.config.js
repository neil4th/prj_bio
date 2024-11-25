import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import {
    createHtmlPlugin
} from 'vite-plugin-html';
import {
    viteStaticCopy
} from 'vite-plugin-static-copy';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/sass/app.scss',
            ],
            refresh: true,
        }),
        createHtmlPlugin({
            minify: true,
        }),
        viteStaticCopy({
            targets: [{
                    src: 'node_modules/feather-icons/dist/**',
                    dest: 'public/assets/plugins/feather-icons',
                },
                {
                    src: '@mdi/font/**',
                    dest: 'public/assets/plugins/@mdi',
                },
                {
                    src: 'node_modules/perfect-scrollbar/dist/**',
                    dest: 'public/assets/plugins/perfect-scrollbar',
                },
                {
                    src: 'node_modules/prismjs/**',
                    dest: 'public/assets/plugins/prismjs',
                },
                {
                    src: 'node_modules/clipboard/dist/clipboard.min.js',
                    dest: 'public/assets/plugins/clipboard',
                },
                {
                    src: 'node_modules/cropperjs/dist/**',
                    dest: 'public/assets/plugins/cropperjs',
                },
                {
                    src: 'node_modules/owl.carousel/dist/**',
                    dest: 'public/assets/plugins/owl-carousel',
                },
                {
                    src: 'node_modules/jquery-mousewheel/jquery.mousewheel.js',
                    dest: 'public/assets/plugins/jquery-mousewheel',
                },
                {
                    src: 'node_modules/animate.css/animate.min.css',
                    dest: 'public/assets/plugins/animate-css',
                },
                {
                    src: 'node_modules/sortablejs/Sortable.min.js',
                    dest: 'public/assets/plugins/sortablejs',
                },
                {
                    src: 'node_modules/sweetalert2/dist/**',
                    dest: 'public/assets/plugins/sweetalert2',
                },
                {
                    src: 'node_modules/chart.js/dist/chart.umd.js',
                    dest: 'public/assets/plugins/chartjs',
                },
                {
                    src: 'node_modules/jquery.flot/**',
                    dest: 'public/assets/plugins/jquery.flot',
                },
                {
                    src: 'node_modules/apexcharts/dist/apexcharts.min.js',
                    dest: 'public/assets/plugins/apexcharts',
                },
                {
                    src: 'node_modules/peity/jquery.peity.min.js',
                    dest: 'public/assets/plugins/peity',
                },
                {
                    src: 'node_modules/jquery-sparkline/jquery.sparkline.min.js',
                    dest: 'public/assets/plugins/jquery-sparkline',
                },
                {
                    src: 'node_modules/datatables.net/js/jquery.dataTables.js',
                    dest: 'public/assets/plugins/datatables-net',
                },
                {
                    src: 'node_modules/datatables.net-bs5/**',
                    dest: 'public/assets/plugins/datatables-net-bs5',
                },
                {
                    src: 'node_modules/select2/dist/**',
                    dest: 'public/assets/plugins/select2',
                },
                {
                    src: 'node_modules/easymde/dist/**',
                    dest: 'public/assets/plugins/easymde',
                },
                {
                    src: 'node_modules/jquery-tags-input/dist/**',
                    dest: 'public/assets/plugins/jquery-tags-input',
                },
                {
                    src: 'node_modules/dropzone/dist/min/**',
                    dest: 'public/assets/plugins/dropzone',
                },
                {
                    src: 'node_modules/dropify/dist/**',
                    dest: 'public/assets/plugins/dropify',
                },
                {
                    src: '@simonwep/pickr/dist/**',
                    dest: 'public/assets/plugins/pickr',
                },
                {
                    src: 'node_modules/flatpickr/dist/**',
                    dest: 'public/assets/plugins/flatpickr',
                },
                {
                    src: 'node_modules/jquery-validation/dist/jquery.validate.min.js',
                    dest: 'public/assets/plugins/jquery-validation',
                },
                {
                    src: 'node_modules/bootstrap-maxlength/dist/bootstrap-maxlength.min.js',
                    dest: 'public/assets/plugins/bootstrap-maxlength',
                },
                {
                    src: 'node_modules/inputmask/dist/jquery.inputmask.min.js',
                    dest: 'public/assets/plugins/inputmask',
                },
                {
                    src: 'node_modules/typeahead.js/dist/typeahead.bundle.min.js',
                    dest: 'public/assets/plugins/typeahead-js',
                },
                {
                    src: 'node_modules/tinymce/**',
                    dest: 'public/assets/plugins/tinymce',
                },
                {
                    src: 'node_modules/ace-builds/src-min/**',
                    dest: 'public/assets/plugins/ace-builds',
                },
                {
                    src: 'node_modules/jquery-steps/build/jquery.steps.min.js',
                    dest: 'public/assets/plugins/jquery-steps',
                },
                {
                    src: 'node_modules/fullcalendar/index.global.min.js',
                    dest: 'public/assets/plugins/fullcalendar',
                },
                {
                    src: 'node_modules/moment/min/moment.min.js',
                    dest: 'public/assets/plugins/moment',
                },
            ],
        }),
    ],
});
