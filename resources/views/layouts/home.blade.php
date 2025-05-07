@extends('index')

@section('content')
<div class="page-header theme-bg-dark py-5 text-center position-relative">
    <div class="theme-bg-shapes-right"></div>
    <div class="theme-bg-shapes-left"></div>
    <div class="container">
        <h1 class="page-heading single-col-max mx-auto">Documentation</h1>
        <div class="page-intro single-col-max mx-auto">Everything you need to get your software documentation online.</div>
        <div class="main-search-box pt-3 d-block mx-auto">
             <form class="search-form w-100">
                <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
                <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
            </form>
         </div>
    </div>
</div><!--//page-header-->
<div class="page-content">
    <div class="container">
        <div class="docs-overview py-5">
            <div class="row justify-content-center">
                @foreach ($posts as $post)
                <div class="col-12 col-lg-12 py-3">
                    
                    <div class="card shadow-sm">
                        <div class="card-body" style="display:flex;">
                            <div class="card-image">
                                <img src="assets/images/background/background-2.jpg" width="200px"  style="border-radius: 5%; margin-right:50px" alt="">
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
                                    {{$post->excerpt}}
                                </div>
                                <a href="{{ route('show', ['post'=>$post])}}" class="btn btn-primary">Lire l'article</a>
                            </div>
                            
                            
                        </div><!--//card-body-->
                    </div><!--//card-->
                    
                </div><!--//col-->
                @endforeach

                {{$posts->links()}}
            </div><!--//row-->
        </div><!--//container-->
    </div><!--//container-->
</div><!--//page-content-->
@endsection