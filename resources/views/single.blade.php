@extends('layouts.app')

@section('content')

   	<div class="row">

   		<div id="main" class="eight columns">

   			<article class="entry">

					<header class="entry-header">

						<h2 class="entry-title">
							{{$item->title}}
						</h2>

						<div class="entry-meta">
							<ul>
								<li>{{ Carbon\Carbon::parse($item->pub_date)->format('d M Y') }}</li>
								<span class="meta-sep">&bull;</span>
								<li>
									<a href="#" title="" rel="category tag">{{ $item->category->title }}</a>
								</li>
								<span class="meta-sep">&bull;</span>
								<li>{{ $item->author }}</li>
							</ul>
						</div>

					</header>

					<div class="entry-content-media">
						<div class="post-thumb">
							<img src="/static/images/m-farmerboy.jpg">
						</div>
					</div>

					<div class="entry-content">
						{{ $item->body  }}
					</div>

					<p class="tags">
					   <span>Tagged in </span>:

					  @foreach ($item->tags as $tag)
  				          <a href="#">{{ strtolower($tag->title) }}</a>
                      @endforeach
  			       </p>

  			       <ul class="post-nav group">
  			            <li class="prev"><a rel="prev" href="#"><strong>Previous Article</strong> Duis Sed Odio Sit Amet Nibh Vulputate</a></li>
  				         <li class="next"><a rel="next" href="#"><strong>Next Article</strong> Morbi Elit Consequat Ipsum</a></li>
  			        </ul>

				</article>


   		</div> <!-- main End -->

   		@include('_sidebar')

  		</div> <!-- end row -->
@endsection
