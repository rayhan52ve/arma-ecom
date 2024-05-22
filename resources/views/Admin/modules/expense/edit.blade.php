@extends('super_admin.master')
@section('content')
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title">Edit Expense</h4>
                <form class="form-horizontal p-t-20" action="{{ route('admin.expense.update', $expense->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group row">
                        <div class="col-6 col-md-6 col-lg-6">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Expense Types </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <select type="select" class="form-control" id="uname1" name="expense_type_id"
                                        placeholder="Expense Types" required>
                                        <option selected disabled>Select Expense Types</option>
                                        @foreach ($expense_types as $expense_type)
                                            <option value="{{ $expense_type->id }}"
                                                {{ $expense_type->id == $expense->expensetype->id ? 'selected' : '' }}>
                                                {{ $expense_type->expense_type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Expense Amount</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="uname1" name="expense_amount"
                                        value="{{ $expense->expense_amount ?? null }}" placeholder="Expense AmountAmount">
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-6 col-lg-6">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Voucher No. </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" value="{{$expense->voucher}}" id="uname1" name="voucher"
                                        placeholder="Voucher No.">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Note </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" value="{{$expense->comment}}"  class="form-control" id="uname1" name="comment"
                                        placeholder="Note">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Date </label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="date" value="{{ $expense->date }}" class="form-control datepicker" id="uname1" name="date"
                                        placeholder="Submit Date">
                                </div>
                            </div>
                        </div>


                        <div class="col-6 col-md-6 col-lg-6">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Expense Photo</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="file" class="form-control" id="image" name="image"
                                        onchange="previewImage(this)">
                                </div>
                                <img id="image-preview" src="{{ asset('uploads/expense/' . $expense->image) }}"
                                    class="mt-2" style="max-width: 300px;" alt="">
                            </div>
                        </div>


                        <div class="form-group row mt-3 m-b-0">
                            <div class="col-sm-12 ">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">
                                    @if (session()->get('language') == 'bangla')
                                        আপডেট
                                    @else
                                        Update
                                    @endif
                                </button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>

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
