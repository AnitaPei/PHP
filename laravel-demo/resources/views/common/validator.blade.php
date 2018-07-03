@if(count($errors))
    {{--<div class="alert alert-danger">
        <ul>
            <li>{{ $errors->first() }}</li> --}}{{-- $errors->first(): 取第一条错误信息 --}}{{--
        </ul>
    </div>--}}
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error) {{-- $errors->all(): 取所有的错误信息 --}}
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif