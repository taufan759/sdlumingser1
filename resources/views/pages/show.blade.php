@extends('layouts.default')

@section('content')
    <div class="news-detail-container mt-5 mb-5 p-3 p-md-5" id="DetailNews">
        <div class="card mb-4 border-0">
            <div class="news-header p-3 p-md-4 text-center">
                <h1 class="news-title fw-bold mb-3">{{ $show->title }}</h1>
                <div class="news-meta d-flex justify-content-center align-items-center flex-wrap gap-2">
                    <span class="badge bg-primary text-white">#{{ $categories->name }}</span>
                    <small class="text-muted">Diperbarui terakhir {{ $show->updated_at->diffForHumans() }}</small>
                </div>
            </div>
            <img 
                src="{{ asset('storage/'.$show->image) }}" 
                class="news-image img-fluid rounded-3 mx-auto d-block" 
                alt="Gambar Berita" 
                style="max-height: 800px; object-fit: cover; width: 100%; max-width: 600px;">
            <div class="card-body p-3 p-md-4">
                <article class="news-content">
                    {!! $show->content !!}
                </article>
                <hr>
                <div class="news-footer d-flex flex-column flex-md-row justify-content-between align-items-center">
                    <span class="text-muted">Ditulis oleh: <strong>{{ $author->nama }}</strong></span>
                    <span class="text-muted mt-2 mt-md-0">{{ $show->created_at->format('d M Y') }}</span>
                </div>
            </div>
        </div>
    </div>


    <style>
        #DetailNews {
            margin-top: 3rem; 
            margin-bottom: 3rem; 
        }
        @media (max-width: 768px) {
        #DetailNews .news-header {
            padding: 2rem 1rem;
        }
        #DetailNews .news-image {
            width: 100%;
            max-height: 400px;
        }
        #DetailNews .news-footer {
            flex-direction: column;
            align-items: flex-start;
            gap: 1rem;
        }
        }
    
        @media (max-width: 576px) {
            #DetailNews {
                margin-top: 2rem;
                margin-bottom: 2rem;
            }
            #DetailNews .news-title {
                font-size: 1.5rem;
            }
            #DetailNews .news-meta {
                flex-direction: column;
                gap: 0.5rem;
            }
        }
    </style>
@endsection