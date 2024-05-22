@extends('super_admin.master')
@section('content')
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card-title">Edit Expense Type</h4>
                <form class="form-horizontal p-t-20" action="{{route('admin.expenseType.update',$expense_type->id)}}" method="POST">
                    @method('PUT')
                    @csrf

                    @if(session()->get('language') != 'bangla')
                    <div class="form-group row">
                        <div class="col-12 col-md-12">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Expense Type</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="uname1" name="expense_type"
                                           placeholder="Expense Type" value="{{$expense_type->expense_type??null}}">
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="col-12 col-md-12 col-lg-12 mt-2">
                            <label for="uname1" class="col-sm-12 control-label mb-2">Expense Type</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="uname1" name="team_name_bangla"
                                    value="{{$expense_type->name_bangla??null}}">
                                </div>
                            </div>
                        </div>

                    </div>
                    @endif

                    <div class="form-group row mt-1 m-b-0">
                        <div class="col-sm-12 ">
                            <button type="submit" class="btn btn-success waves-effect waves-light text-white">@if(session()->get('language')== 'bangla') আপডেট @else Update @endif
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
