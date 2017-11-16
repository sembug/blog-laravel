@extends('layouts.app')

@section('content')

<div class="row">

   		<div id="main" class="eight columns">
            @foreach ($items as $item)
	   		<article class="entry">

					<header class="entry-header">

						<h2 class="entry-title">
							<a href="/post/{{ $item->id }}" title="{{ $item->title }}">{{ $item->title }}</a>
						</h2>

						<div class="entry-meta">
							<ul>
								<li>{{ Carbon\Carbon::parse($item->pub_date)->format('d M Y') }}</li>
								<span class="meta-sep">&bull;</span>
								<li><a href="#" title="" rel="category tag">{{ $item->category->title }}</a></li>
								<span class="meta-sep">&bull;</span>
								<li>{{ $item->author }}</li>
							</ul>
						</div>

					</header>

					<div class="entry-content">
						{{ str_limit($item->body, 200) }}
                        <p><a href="/post/{{ $item->id }}">More</a></p>
					</div>

				</article> <!-- end entry -->

        @endforeach


   		</div> <!-- end main -->


   		@include('_sidebar')

   	</div> <!-- end row -->
@endsection