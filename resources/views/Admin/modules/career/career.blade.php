@extends('super_admin.master')
@section('content')
    <div class="container-fluid">

        <div class="card">
            <div class="card-body">

                <div class="table-responsive m-t-20">
                    <h3 class="text-center ">
                        @if (session()->get('language') == 'bangla')
                            Applicants List
                        @else
                            Applicants List
                        @endif
                    </h3>
                    <table id="config-table" class="table display table-striped border no-wrap">
                        <thead>
                            <tr>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        সি.নং
                                    @else
                                        SL
                                    @endif
                                </th>
                                <th>
                                    CV
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        সার্ভিসের নাম
                                    @else
                                        Name
                                    @endif
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        Email
                                    @else
                                        Email
                                    @endif
                                </th>
                                <th>
                                    Phone
                                </th>
                                <th>
                                    Skill
                                </th>
                                <th>
                                    Message
                                </th>
                                <th>
                                    @if (session()->get('language') == 'bangla')
                                        একশন
                                    @else
                                        Action
                                    @endif
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($careers as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <a class="btn btn-purple" href="/uploads/cv/{{ $item->cv }}" target="_blank"
                                            rel="noopener noreferrer">View CV</a>
                                    </td>
                                    <td>
                                        @if (session()->get('language') == 'bangla')
                                            {{ $item->name ?? null }}
                                        @else
                                            {{ $item->name ?? null }}
                                        @endif
                                    </td>
                                    <td>
                                        @if (session()->get('language') == 'bangla')
                                            {{ $item->email ?? null }}
                                        @else
                                            {{ $item->email ?? null }}
                                        @endif
                                    </td>
                                    <td>{{ $item->phone ?? null }}</td>
                                    <td>{{ $item->skill ?? null }}</td>
                                    <td>{{ $item->message ?? null }}</td>
                                    <td>
                                        <form action="{{ route('admin.career.destroy', $item->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger" title="Delete"
                                                onclick="return confirm('Are you sure you want to delete this?')">
                                                <i class="icon-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- ck editor --}}
    <style>
        /* Style for CKEditor container */
        #editor {
            margin-top: 20px;
            /* Add some top margin */
            border: 1px solid #ccc;
            /* Add a border for visual clarity */
            border-radius: 5px;
            /* Add border-radius for rounded corners */
            padding: 10px;
            /* Add some padding for space */
        }

        /* Style for CKEditor contents */
        .ck-editor__editable {
            min-height: 150px;
            /* Set a minimum height for the editable area */
            border: 1px solid #ddd;
            /* Add a border for the editable area */
            border-radius: 5px;
            /* Add border-radius for rounded corners */
            padding: 10px;
            /* Add some padding for space within the editable area */
            font-family: Arial, sans-serif;
            /* Set font-family */
        }
    </style>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
    {{-- ck editor --}}

    <style>
        #image-preview {
            border: 2px solid #ccc;
            /* Border color */
            padding: 5px;
            /* Padding around the image */
            margin-top: 10px;
            /* Margin from the top */
            display: block;
            max-width: 500px;
            min-width: 300px;
            min-height: 200px;
            box-sizing: border-box;
            /* Include border and padding in the total width/height */
        }
    </style>
    <script>
        function previewImage(input) {
            var preview = document.getElementById('image-preview');
            var file = input.files[0];
            var reader = new FileReader();

            reader.onloadend = function() {
                preview.src = reader.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
            }
        }
    </script>
@endsection
