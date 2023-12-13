@extends('layouts.default')

@section('content')
    <div class="mt-4 p-5" id="DetailNews">
        <div class="card mb-3">
          <div class="p-3">
            <h1 class="p-2 fs-1 " >{{$show->title}} <div class="vr"></div> <span class="btn btn-outline-primary btn-sm">#{{  $categories->name}}</span></h1>
            <hr>
            <img src="{{ asset('storage/'.$show->image) }}" class="card-img-top" alt="...">
          </div>
            <div class="card-body">
              <h5 class="card-title"><span class="btn btn-outline-primary btn-sm">#{{  $categories->name}}</span></h5>
              <p>{!! $show->content !!}</p>

              <p class="card-text">
                <small class="text-body-secondary">
                  Diperbarui terakhir {{ $show->updated_at->diffForHumans() }} <br>
                  Ditulis oleh :  {{ $author->nama }}
                </small>
              </p>
              
            </div>
          </div>
    </div>
@endsection