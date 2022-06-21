@extends('layouts.master')

@section('content')
    <h3>Danh sách khách hàng</h3>
    <form action="" method="get">
        <div class="row">
            
            <div class="col-10">
                <input type="number" class="form-control" name="days" placeholder="Nhập số ngày..." value="{{request()->days}}"/>
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-primary">Tìm kiếm</button>
            </div>
        </div>
    </form>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="5%">STT</th>
                <th>Họ tên</th>
                <th>Ngày vào</th>
            </tr>
        </thead>
        <tbody>
            @if ($customers->count()>0)
                @foreach ($customers as $key => $customer)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$customer->name}}</td>
                <td>{{$customer->start_input}}</td>
            </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection