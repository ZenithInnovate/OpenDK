@extends('layouts.app')
@section('title', 'FAQ')

@section('content')

@include('layouts.breadcrumbs', ['title' => 'FAQ'])

<div class="section-post">
    <div class="container">
        <div class="row">
            <!-- page content -->
            <div class="col-md-8">
                <div class="page-content">
                    <!-- ======= Blog Single Section ======= -->
                    <div class="dinamic-single">
                        <div class="title">FAQ</div>
                        <div class="box-group" id="accordion">
                            @forelse($faq as $key => $item)
                            <div class="panel box box-success">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $key }}" aria-expanded="false"
                                            class="collapsed">
                                            {{ $item->question }}
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse{{ $key }}" class="panel-collapse collapse" aria-expanded="false">
                                    <div class="box-body">
                                        {!! $item->answer !!}
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                {{ $faq->links() }}
                            </div>
                            @empty
                            <div class="callout callout-info">
                                <p class="text-bold">Tidak ada data yang ditampilkan!</p>
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            <!-- End page content -->

            {{-- Widget --}}
            @include('layouts.widget')
        </div>
    </div>
</div>
@endsection