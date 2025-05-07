@extends('index')
@section('content')

<div class="page-content">
    <div class="container">
        <div class="docs-overview py-5">
            <div class="row justify-content-center">
                
                <div class="col-12 col-lg-12 py-3">
                    
                    <div class="card shadow-sm">
                        <div class="card-body" style="display:flex;">
                            <div class="card-image" style="text-align:center;">
                                <img src="assets/images/background/background-2.jpg"  width="90%" style="border-radius: 5%; margin-bottom:50px" alt="">
                            </div>
                            <div class="mb-3">
                                <h6 class="card-title mb-3">Catégorie</h6>
                                <h3 class="card-title">
                                    <span class="card-title-text">{{$post->title}}</span>
                                </h3>
                                <div style="display: flex;">
                                    <div class="notification-type" style="margin-right: 15px"><span class="badge bg-info">News</span></div>
                                    <div class="notification-type "><span class="badge bg-info">News</span></div>
                                </div>
                                <div class="card-text mb-3">
                                    {!! nl2br(e($post->content)) !!}
                                </div>
                                <time class="text-xs text-slate-400" datetime="{{ $post->created_at }}"> {{ $post->created_at }}</time>
                            </div>
                            
                            
                        </div><!--//card-body-->
                    </div><!--//card-->
                    
                </div><!--//col-->
                
            </div><!--//row-->
        </div><!--//container-->
    </div><!--//container-->
</div><!--//page-content-->

    
@endsection