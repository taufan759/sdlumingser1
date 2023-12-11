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
        <label for="content" class="col-sm-2 col-form-label">{{ __('Content') }}</label>
        <div class="col-sm-10">
            <textarea id="editor" class="form-control @error('content') is-invalid @enderror" name="content"
                required placeholder="Isi Berita">{{ old('content') }}</textarea>
            @error('content')
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

    <div class="row mb-3">
        <label for="status" class="col-sm-2 col-form-label">{{ __('Status') }}</label>
        <div class="col-sm-10">
            <select id="status" class="form-control @error('status') is-invalid @enderror" name="status" required>
                <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Publish</option>
                <option value="2" {{ old('status') == '2' ? 'selected' : '' }}>Draft</option>
            </select>
            @error('status')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-primary">
               Tambah
            </button>
        </div>
    </div>
</form>

@endsection
