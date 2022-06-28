
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
            <div class="container">
                <div class="row">
                    <div class="col-md-7 offset-3 mt-4">
                        <div class="card-body">
                            <form method="post" action="" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <textarea class="ckeditor form-control" name="wysiwyg-editor"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </body>
            <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('.ckeditor').ckeditor();
                });
            </script>
            {{--            </div>--}}
        </div>
    </div>
</x-app-layout>
