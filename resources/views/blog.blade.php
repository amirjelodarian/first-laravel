@extends('layout')
@section('last-head')
    <link rel="stylesheet" href="{{ asset('css/flickity.css') }}">
    <link rel="stylesheet" href="{{ asset('fontello/css/fontello.css') }}">
@stop
@section('main')

		<section class="blog-single">
			<div class="container">
				<div class="row">
					<div class="col-md-8" style="float: right">
                        @auth
                            @if($userMode == 'administrator')
                                <a href="{{ route('add-blog') }}" class="add-new-post-href"> + </a>
                            @endif
                        @endauth
                            <div id="blog-title-result"></div>
                            <div id="blog-body-result"></div>
                            <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                            @foreach($allBlog->getCollection()->all() as $blog)
                                <?php $username = $blog->usernameByBlog($blog) ?>
                                <div class="single-blog col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                    <a href="#"><h3 class="blog-title" id="{{ $blog->id }}">{{ $blog->title }}</h3></a>

                                    <div class="carousel" data-flickity='{ "autoPlay": true }'>
                                        @foreach($blog->photo_path as $photo_path)
                                            <img class="carousel-cell" src="{{ $photo_path }}" alt="{{ env('APP_NAME') }}" />
                                        @endforeach
                                    </div>
                                        <div class="blog-body" id="{{ $blog->id }}">{!! $blog->body !!}</div>
                                    <div class="blog-info">
                                        <ul>
                                            <li><a href="">تاریخ انتشار: {{ $blog->created_at }}</a></li>
                                            <li><a href="">{{ $username }}</a></li>
                                            <li><a href="">10 Comments</a></li>
                                        </ul>

                                        <div class="read-more pull-right more-blog">
                                            <a href="{{ route('more-blog',['id' => $blog->id]) }}" class="btn btn-share"><i class="icon-share"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="center">
                                {{ $allBlog->appends(Request::input())->links() }}

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
    <script src="{{ asset('js/jquery.moretext.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.blog-body').moreContent({
                height: 62,
                textClose:'بیشتر >',
                textOpen:'کمتر ^',
                useCss: true,
                speed: 150,
                tpl: {
                    content: '<div class="mrc-content"></div>',
                    contentWrap: '<div class="mrc-content-wrap"></div>',
                    btn: '<button class="more-content-btn" type="button"></button>',
                    btnWrap: '<div class="mrc-btn-wrap"></div>',
                    controls: '<div class="mrc-controls"></div>',
                    shadow: '<div class="mrc-shadow"></div>',
                }
            });
        });
        $(function () {
            //Loop through all Labels with class 'editable'.
            $('.blog-title').click(function (){
                $(".blog-title").each(function () {
                    //Reference the Label.
                    var label = $(this);
                    //Add a TextBox next to the Label.
                    label.after("<input type = 'text' class='blog-title-input' style = 'display:none;direction: rtl' />");

                    //Reference the TextBox.
                    var textbox = $(this).next();

                    //Set the name attribute of the TextBox.
                    textbox[0].name = this.id.replace("lbl", "txt");

                    //Assign the value of Label to TextBox.
                    textbox.val(label.html());

                    //When Label is clicked, hide Label and show TextBox.
                    label.click(function () {
                        $(this).hide();
                        $(this).next().show();
                    });

                    //When focus is lost from TextBox, hide TextBox and show Label.
                    textbox.focusout(function () {
                        $(this).hide();
                        $(this).prev().html($(this).val());
                        $(this).prev().show();
                        var _token = $('#token').val();
                        var blogTitleId = this.name;
                        var blogTitleValue = this.value;
                        $.ajax({
                            type: 'POST',
                            url: 'blog/editBlogTitle',
                            data: {
                                _token: _token,
                                blogTitleId: blogTitleId,
                                blogTitleValue: blogTitleValue,
                            },
                            success: function (data) {
                                $("#blog-title-result").show();
                                $("#blog-title-result").html(data);
                            }
                        });
                    });
                });

            });

            $('.blog-body').click(function (){
                $(".blog-body").each(function () {
                    //Reference the Label.
                    var label = $(this);
                    //Add a TextBox next to the Label.
                    label.after("<textarea type = 'text' style = 'display:none;direction: rtl'></textarea>");

                    //Reference the TextBox.
                    var textbox = $(this).next();

                    //Set the name attribute of the TextBox.
                    textbox[0].name = this.id.replace("lbl", "txt");

                    //Assign the value of Label to TextBox.
                    textbox.val(label.html());

                    //When Label is clicked, hide Label and show TextBox.
                    label.click(function () {
                        $(this).hide();
                        $(this).next().show();
                    });

                    //When focus is lost from TextBox, hide TextBox and show Label.
                    textbox.focusout(function () {
                        $(this).hide();
                        $(this).prev().html($(this).val());
                        $(this).prev().show();
                        var _token = $('#token').val();
                        var blogBodyId = this.name;
                        var blogBodyValue = this.value;
                        $.ajax({
                            type: 'POST',
                            url: 'blog/editBlogBody',
                            data: {
                                _token: _token,
                                blogBodyId: blogBodyId,
                                blogBodyValue: blogBodyValue,
                            },
                            success: function (data) {
                                $("#blog-body-result").show();
                                $("#blog-body-result").html(data);
                            }
                        });
                    });
                });

            });

        });
    </script>
@stop
