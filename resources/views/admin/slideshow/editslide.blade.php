@extends('admin.sidebar')


@section('content')

    <div class=" mb-3 ">
        <h1 class="mb-4">Edit Slide</h1>
        <p>Upload foto slide/banner Product</p>
        @if($errors->any())
        {{ implode('', $errors->all('<div class="alert alert-danger">:message</div>')) }}
    @endif
        <div>
            <form action="{{ route('slide.update',$Dbase->id) }}" method="POST"  class="row" enctype="multipart/form-data">

            <div class="col">
                <input class="form-control mb-2  @error('image') is-invalid @enderror" name='gambar_slide' id="formFile" type="file" >
            </div>
            <div class="col">
                @method('PUT')
                    @csrf
                    <div class="form-group">
                        <select name="product_id" id="product_id" class="form-select mb-2">
                            <option value="">Pilih Product</option>
                            @forelse ($select as $selects)
                            <option value="{{ $selects->id }}" >{{ $selects->judul }}</option>
                            @empty
                            <option value="#" disabled>Silahkan tambah product</option>
                            @endforelse
                        </select>
                        <button type="submit" class="btn mb-3" style="background-color:#B5CF49 ">Edit</button>
                    </div>
                </form>
            </div>
        </div>
</div>
@endsection
