@extends('layouts.home')
@section('title', 'Modal PUSBAKOR')
@section('title1', 'Home')
@section('title2', 'Modal')
@section('title3', 'Edit Modal')
@section('content')
<div class="container">
    <a href="{{ route('modal.index') }}" class="btn btn-primary btn-sm mb-3">Kembali</a>
    <div class="card">
        <div class="card-body p-3">
            <form action="{{ route('modal.update', $modal->id) }}" method="POST">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="status_modal" class="form-label"><b>Status Modal</b></label>
                    <input class="form-control" type="text" placeholder="Masukkan Nama Status" aria-label="status_modal"
                        id="status_modal" value="{{$modal->status_modal}}" name="status_modal" required>
                </div>
                <button type="submit" class="btn btn-success btn-sm float-end">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
