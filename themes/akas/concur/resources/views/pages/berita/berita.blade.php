@extends('layouts.app')
@section('title', $page_title)

@section('content')

@include('layouts.breadcrumbs', ['title' => $page_title])

<div class="section-post">
    <div class="container">
        <div class="halaman-arsip">
            <div class="row">
                <div class="col-md-8">
                    @forelse ($artikel as $item)
                    <div class="item-arsip">
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="berita/{{ $item->slug }}">
                                    <img src="{{ is_img($item->gambar) }}"
                                        class="img-fluid img-article-list blog-images"
                                        alt="{{ $item->judul }}">
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <div class="data-text">
                                    <div class="meta">
                                        <ul>
                                            <li class="name">Administrator</li>
                                            <li class="date">{{ format_date($item->created_at) }}</li>
                                        </ul>
                                    </div>
                                    <div class="title">
                                        <a
                                            href="berita/{{ $item->slug }}">
                                            {{ $item->judul }} </a>
                                    </div>
                                    <div class="isi">
                                        <p></p>
                                        <p>{{ strip_tags(substr($item->isi, 0, 250)) }}...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="callout callout-info">
                        <p class="text-bold">Tidak ada berita kecamatan yang ditampilkan!</p>
                    </div>
                    @endforelse

                    @if( $artikel->count() > 0 )
                    <div style="text-align: center;">
                        {{ $artikel->links('vendor.pagination.bootstrap-4') }}
                    </div>
                    @endif
                </div>

                {{-- Widget --}}
                @include('layouts.widget')
            </div>
        </div>
    </div>
</div>
@endsection