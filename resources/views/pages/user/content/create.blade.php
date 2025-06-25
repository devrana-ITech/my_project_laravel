@extends('layouts.main')

@section('page-content')
    <div class="col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card flex-fill">
            <div class="text-end">
                <a href="{{url('/content')}}" type="submit" class="btn btn-primary">Back</a>
            </div>
            <div class="card-header">
                <h5 class="card-title">Create Status</h5>
            </div>
            <div class="card-body">
                <form action="{{url('/content')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-lg-2 col-form-label">Page :</label>
                        <div class="col-lg-10">
                            <input type="text" name="page_id" value="{{old('page_id')}}" class="form-control" placeholder="Enter page_id..."  autocomplete="page_id">
                        </div>
                        @error('page_id')
                        <span style="color: red" >{{$message}}</span>
                       @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="col-lg-2 col-form-label">Location :</label>
                        <div class="col-lg-10">
                            <input type="text" name="location_id" value="{{old('location_id')}}" class="form-control" placeholder="Enter location_id..."  autocomplete="location_id">
                        </div>
                        @error('location_id')
                        <span style="color: red" >{{$message}}</span>
                       @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="col-lg-2 col-form-label">Header :</label>
                        <div class="col-lg-10">
                            <input type="text" name="header" value="{{old('header')}}" class="form-control" placeholder="Enter header..."  autocomplete="header">
                        </div>
                        @error('header')
                        <span style="color: red" >{{$message}}</span>
                       @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="col-lg-2 col-form-label">Text :</label>
                        <div class="col-lg-10">
                            <input type="text" name="text" value="{{old('text')}}" class="form-control" placeholder="Enter text..."  autocomplete="text">
                        </div>
                        @error('text')
                        <span style="color: red" >{{$message}}</span>
                       @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="col-lg-2 col-form-label">Pic 1 :</label>
                        <div class="col-lg-10">
                            <input type="file" name="pic_1" value="{{old('pic_1')}}" class="form-control">
                        </div>
                        @error('pic_1')
                        <span style="color: red" >{{$message}}</span>
                       @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="col-lg-2 col-form-label">Pic 2 :</label>
                        <div class="col-lg-10">
                            <input type="file" name="pic_2" value="{{old('pic_2')}}" class="form-control">
                        </div>
                        @error('pic_2')
                        <span style="color: red" >{{$message}}</span>
                       @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="col-lg-2 col-form-label">Pic 3 :</label>
                        <div class="col-lg-10">
                            <input type="file" name="pic_3" value="{{old('pic_3')}}" class="form-control">
                        </div>
                        @error('pic_3')
                        <span style="color: red" >{{$message}}</span>
                       @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="col-lg-2 col-form-label">Language :</label>
                        <div class="col-lg-10">
                            <input type="text" name="language_id" value="{{old('language_id')}}" class="form-control" placeholder="Enter language_id..."  autocomplete="language_id">
                        </div>
                        @error('language_id')
                        <span style="color: red" >{{$message}}</span>
                       @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="col-lg-2 col-form-label">Status Name :</label>
                        <div class="col-lg-10">
                            <input type="text" name="status" value="{{old('status')}}" class="form-control" placeholder="Enter status..."  autocomplete="status">
                        </div>
                        @error('status')
                        <span style="color: red" >{{$message}}</span>
                       @enderror
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Create New Status</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
