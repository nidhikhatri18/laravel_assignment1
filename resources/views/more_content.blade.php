@extends('layout')

@section('content')
		<!-- Main -->
			<div id="main-wrapper">
				<div id="main" class="container">
					<div class="row">
					
						<!-- Content -->
							<div id="content" class="8u">
							@foreach ($posts as $post)
								<!-- Post -->
									<article class="box post">
										<header>
											<h2><a href="{{ url('more_content')}}">{{ $post->blog_title }}</a></h2>
											<h2>{{ $post->blog_date }}</h2>
										</header>
										<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
										<h3>{{ $post->blog_desc}}</h3>
										
										<ul class="actions">
											<li><a href="#" class="button icon fa-file">Continue Reading</a></li>
										</ul>
									</article>
							@endforeach
								
									
							
							</div>
							
		
							</div>

					</div>
				</div>
			</div>


@endsection