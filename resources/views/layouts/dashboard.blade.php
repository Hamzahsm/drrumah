<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->

  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">

  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">

  <!-- tags system -->
  <link rel="stylesheet" href="{{ asset('plugins/tags/twitter-bootstrap.css') }}">
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap.min.css"> --}}
  <link rel="stylesheet" href="{{ asset('plugins/tags/bootstrap-tagsinput.css') }}">

    <!-- ckeditor -->
    <style>
        #container {
            width: 1000px;
            margin: 20px auto;
        }
        .ck-editor__editable[role="textbox"] {
            /* Editing area */
            min-height: 200px;
        }
        .ck-content .image {
            /* Block images */
            max-width: 80%;
            margin: 20px auto;
        }
    </style>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    {{-- @include('dashboard.preloader') --}}
    @include('sweetalert::alert') <!-- sweet alert -->
    @include('dashboard.navbar')
    @include('dashboard.breadcumb')
    @include('dashboard.sidebar')
    @yield('content')
    @include('dashboard.footer')
    @include('dashboard.control-sidebar')
    


</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- ChartJS -->
{{-- <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>

<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>

<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script> --}}

<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>

<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>

{{-- <!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script> --}}

    <!-- ckeditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.0/super-build/ckeditor.js"></script>
    <script>
      CKEDITOR.ClassicEditor.create(document.getElementById("content-block"), { 
          toolbar: {
              items: [
                  'exportPDF','exportWord', '|',
                  'findAndReplace', 'selectAll', '|',
                  'heading', '|',
                  'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                  'bulletedList', 'numberedList', 'todoList', '|',
                  'outdent', 'indent', '|',
                  'undo', 'redo',
                  '-',
                  'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                  'alignment', '|',
                  'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                  'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                  'textPartLanguage', '|',
                  'sourceEditing'
              ],
              shouldNotGroupWhenFull: true
          },
          
          list: {
              properties: {
                  styles: true,
                  startIndex: true,
                  reversed: true
              }
          },

          heading: {
              options: [
                  { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                  { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                  { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                  { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                  { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                  { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                  { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
              ]
          },

          placeholder: 'Tulis deksripsi yang menarik !',
          fontFamily: {
              options: [
                  'default',
                  'Arial, Helvetica, sans-serif',
                  'Courier New, Courier, monospace',
                  'Georgia, serif',
                  'Lucida Sans Unicode, Lucida Grande, sans-serif',
                  'Tahoma, Geneva, sans-serif',
                  'Times New Roman, Times, serif',
                  'Trebuchet MS, Helvetica, sans-serif',
                  'Verdana, Geneva, sans-serif'
              ],
              supportAllValues: true
          },

          fontSize: {
              options: [ 10, 12, 14, 'default', 18, 20, 22 ],
              supportAllValues: true
          },

          htmlSupport: {
              allow: [
                  {
                      name: /.*/,
                      attributes: true,
                      classes: true,
                      styles: true
                  }
              ]
          },

          htmlEmbed: {
              showPreviews: true
          },

          link: {
              decorators: {
                  addTargetToExternalLinks: true,
                  defaultProtocol: 'https://',
                  toggleDownloadable: {
                      mode: 'manual',
                      label: 'Downloadable',
                      attributes: {
                          download: 'file'
                      }
                  }
              }
          },

          mention: {
              feeds: [
                  {
                      marker: '@',
                      feed: [
                          '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                          '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                          '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                          '@sugar', '@sweet', '@topping', '@wafer'
                      ],
                      minimumCharacters: 1
                  }
              ]
          },

          removePlugins: [
              'AIAssistant',
              'CKBox',
              'CKFinder',
              'EasyImage',
              'RealTimeCollaborativeComments',
              'RealTimeCollaborativeTrackChanges',
              'RealTimeCollaborativeRevisionHistory',
              'PresenceList',
              'Comments',
              'TrackChanges',
              'TrackChangesData',
              'RevisionHistory',
              'Pagination',
              'WProofreader',
              'MathType',
              'SlashCommand',
              'Template',
              'DocumentOutline',
              'FormatPainter',
              'TableOfContents',
              'PasteFromOfficeEnhanced',
              'CaseChange'
          ],
      });
    </script> 

<!-- tagsystem -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> --}}
<script src="{{ asset('plugins/tags/bootstrap-tagsinput.min.js') }}"></script> 

</body>
</html>
