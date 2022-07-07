<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layout.head')
    </head>
     
<body>
    
    @yield('content')
        {{-- @include('layout.script') --}}
        <script src="{{ asset('jquery.js') }}"></script>
        <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/select/1.3.4/js/dataTables.select.min.js"></script>
        <script>
            $(document).ready(function() {
                var table = $('#data-table').DataTable({
                    select: false,
                    search: {
                        caseInsensitive: false,
                        regex: true
                    }
                });
            });
        </script>
        <script>
            var editor = CKEDITOR.replace('editor1', {
                extraPlugins: 'embed,autoembed,image2',
                height: 500,
    
                // Load the default contents.css file plus customizations for this sample.
                contentsCss: [
                    'http://cdn.ckeditor.com/4.18.0/full-all/contents.css',
                    'https://ckeditor.com/docs/ckeditor4/4.18.0/examples/assets/css/widgetstyles.css'
                ],
                // Setup content provider. See https://ckeditor.com/docs/ckeditor4/latest/features/media_embed
                embed_provider: '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}',
    
                // Configure the Enhanced Image plugin to use classes instead of styles and to disable the
                // resizer (because image size is controlled by widget styles or the image takes maximum
                // 100% of the editor width).
                image2_alignClasses: ['image-align-left', 'image-align-center', 'image-align-right'],
                // image2_disableResizer: true,
                removeButtons: 'PasteFromWord'
            });
            CKFinder.setupCKEditor(editor);
            var editor1 = CKEDITOR.replace('editor2', {
                extraPlugins: 'embed,autoembed,image2',
                height: 200,
    
                // Load the default contents.css file plus customizations for this sample.
                contentsCss: [
                    'http://cdn.ckeditor.com/4.18.0/full-all/contents.css',
                    'https://ckeditor.com/docs/ckeditor4/4.18.0/examples/assets/css/widgetstyles.css'
                ],
                // Setup content provider. See https://ckeditor.com/docs/ckeditor4/latest/features/media_embed
                embed_provider: '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}',
    
                // Configure the Enhanced Image plugin to use classes instead of styles and to disable the
                // resizer (because image size is controlled by widget styles or the image takes maximum
                // 100% of the editor width).
                image2_alignClasses: ['image-align-left', 'image-align-center', 'image-align-right'],
                // image2_disableResizer: true,
                removeButtons: 'PasteFromWord'
            });
            CKFinder.setupCKEditor(editor1);
        </script>
        <script>
            $('.toast').toast('show');
        </script>
</body>
</html>