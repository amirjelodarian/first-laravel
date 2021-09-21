@extends('layout')
@section('last-head')
    <link rel="stylesheet" href="{{ asset('css/flickity.css') }}">
@stop
@section('main')
    <!-- Pagination -->
    <div id="pagination">
        <span class="all">Page 1 of 3</span>
        <span class="current">1</span>
        <a href="#" class="inactive">2</a>
        <a href="#" class="inactive">3</a>
    </div>
    <!-- Pagination -->
		<section class="blog-single">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
                        @auth
                            @if($userMode == 'administrator')
                                <a href="{{ route('add-blog') }}" class="add-new-post-href">افزودن پست جدید + </a>
                            @endif
                        @endauth
                            @foreach($allBlog as $blog)
                                <div class="single-blog">
                                    <a href="#"><h3 class="blog-title">{{ $blog->title }}</h3></a>
                                    <div class="carousel" data-flickity='{ "autoPlay": true }'>
                                        @foreach($blog->photo_path as $photo_path)
                                            <img class="carousel-cell" src="{{ $photo_path }}" alt="{{ env('APP_NAME') }}" />
                                        @endforeach
                                    </div>
                                    <div class="blog-info">
                                        <ul>
                                            <li><a href="">تاریخ انتشار: {{ $blog->created_at }}</a></li>
                                            <li><a href="">Author Name</a></li>
                                            <li><a href="">Category</a></li>
                                            <li><a href="">10 Comments</a></li>
                                        </ul>

                                        <div class="read-more pull-right more-blog">
                                            <a href="{{ route('more-blog',['id' => $blog->id]) }}" class="btn btn-readmore">ادامه مطلب ...</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach





                            <div class="d-flex justify-content-center">
                                {!! $allBlog->appends(['sort' => 'department'])->links() !!}
                            </div>


					</div>

					<!-- Right Sidebar -->
					<div class="col-md-4">
						<aside class="right-sidebar">
							<div class="widget">
								<form class="form-search">
									<input class="form-control" type="text" placeholder="Search..">
								</form>
							</div>
							<div class="widget">
								<h5 class="widgetheading">Categories</h5>
								<ul class="cat">
									<li><i class="icon-angle-right"></i><a href="#">Web design</a><span> (20)</span></li>
									<li><i class="icon-angle-right"></i><a href="#">Online business</a><span> (11)</span></li>
									<li><i class="icon-angle-right"></i><a href="#">Marketing strategy</a><span> (9)</span></li>
									<li><i class="icon-angle-right"></i><a href="#">Technology</a><span> (12)</span></li>
									<li><i class="icon-angle-right"></i><a href="#">About finance</a><span> (18)</span></li>
								</ul>
							</div>
							<div class="widget">
								<h5 class="widgetheading">Latest posts</h5>
								<ul class="recent">
									<li>
									<img src="img/blog-thumb.jpg" class="pull-left blog-thumb-image" alt="" />
									<h6><a href="#">Lorem ipsum dolor sit</a></h6>
									<p>
										 Mazim alienum appellantur eu cu ullum officiis pro pri
									</p>
									</li>
									<li>
									<a href="#"><img src="img/blog-thumb.jpg" class="pull-left blog-thumb-image" alt="" /></a>
									<h6><a href="#">Maiorum ponderum eum</a></h6>
									<p>
										 Mazim alienum appellantur eu cu ullum officiis pro pri
									</p>
									</li>
									<li>
									<a href="#"><img src="img/blog-thumb.jpg" class="pull-left blog-thumb-image" alt="" /></a>
									<h6><a href="#">Et mei iusto dolorum</a></h6>
									<p>
										 Mazim alienum appellantur eu cu ullum officiis pro pri
									</p>
									</li>
								</ul>
							</div>
							<div class="widget">
								<h5 class="widgetheading">Popular tags</h5>
								<ul class="tags">
									<li><a href="#">Web design</a></li>
									<li><a href="#">Trends</a></li>
									<li><a href="#">Technology</a></li>
									<li><a href="#">Internet</a></li>
									<li><a href="#">Tutorial</a></li>
									<li><a href="#">Development</a></li>
								</ul>
							</div>
							</aside>
					</div>
				</div>
			</div>
		</section>
@stop
@section('last-footer')
    <script src="{{ asset('js/flickity.js') }}"></script>
@stop
