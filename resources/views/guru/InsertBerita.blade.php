@extends('layouts.dashboardLayout')
@section('content')
<p class="font-weight-bold"> <i class="fa-solid fa-gears"></i> Tambahkan Postingan Berita</p>
<form method="POST" action="/guru/StoreBerita" enctype="multipart/form-data">
    @csrf
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row mb-3">
        <label for="image" class="col-sm-2 col-form-label">Foto <span class="text-danger">*</span></label>
        <div class="col-sm-10">
            <input type="file" name="image" class="form-control @if ($errors->has('image')) is-invalid @endif"
                placeholder="Pilih foto">
            <small>Tipe image : JPG/JPEG/PNG. Max : 10 MB.</small>
            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label for="title" class="col-sm-2 col-form-label">{{ __('Title') }}</label>
        <div class="col-sm-10">
            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                value="{{ old('title') }}" required placeholder="Judul Berita" autocomplete="title" autofocus>
            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label for="category_id" class="col-sm-2 col-form-label">{{ __('Category') }}</label>
        <div class="col-sm-10">
            <select id="category_id" class="form-control @error('category_id') is-invalid @enderror" name="category_id" required>
                <option value="" selected>Select a category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="group relative z-0 mb-6 w-full">
        <textarea name="content" id="editor"></textarea>
        @error('content')
            <p class="text-xs italic text-red-500">{{ $message }}</p>
        @enderror
    </div>
    <div class=" mb-3 mt-4 d-flex flex-row-reverse bd-highlight">
        <div class="mr-0">
            <button type="submit" class="btn btn-primary">
               Upload Berita    
            </button>
        </div>
    </div>
</form>

@endsection
