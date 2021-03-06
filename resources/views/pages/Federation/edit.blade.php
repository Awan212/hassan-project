@extends('layouts.app')
@section('title')
Federation
@endsection
@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page body start -->
                <div class="page-body">
                    <div class="mb-2">
                        <h2 class="font-weight-bold text-secondary float-left">Update Federation</h2>
                        <a href="{{ Route('federations.index') }}" class="btn btn-success float-right">Back</a>
                    </div>
                    <br>
                    <br>
                    <hr>
                    @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="post" enctype="multipart/form-data"
                        action="{{ Route('federations.update',$data->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Image<span style="color:#ff0000"> *</span></label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control mb-1" name="image" accept="image/*">
                                <img src="{{ $data->image }}" alt="" width="100px" height="100px">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Player Name<span style="color:#ff0000">
                                    *</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="player_name" placeholder="Player Name"
                                    required value="{{$data->player_name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Player Rank<span style="color:#ff0000">
                                    *</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="player_rank" placeholder="Player Rank"
                                    required value="{{ $data->player_rank }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">FICB<span style="color:#ff0000"> *</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="ficb" value="{{ $data->FICB }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">UISP<span style="color:#ff0000"> *</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="uisp" value="{{ $data->UISP }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ITSF<span style="color:#ff0000"> *</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="itsf" value="{{ $data->ITSF }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">LICB<span style="color:#ff0000"> *</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="licb" value="{{ $data->LICB }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">fpicb<span style="color:#ff0000"> *</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="fpicb" value="{{ $data->fpicb }}"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">p4p<span style="color:#ff0000"> *</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="p4p" value="{{ $data->p4p }}" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Update Federation</button>


                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
