@extends('layout')

@section('content')

		<!-- Main -->
			<div id="main-wrapper">
				<div id="main" class="container">
					<div class="row">
					
						<!-- Content -->
							<div id="content" class="8u">

								<!-- Post -->
									<article class="box post">
										<header>
											<h2><a href="#">I don’t want to say <strong>it’s the aliens</strong> ...<br />
											but it’s the aliens.</a></h2>
										</header>
										<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
										<h3>I mean isn't it possible?</h3>
										<p>Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit 
										ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris 
										sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada 
										in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat 
										magna tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros 
										consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id 
										justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet 
										mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. 
										Curabitur leo nibh, rutrum eu malesuada in, tristique at erat.</p>
										<ul class="actions">
											<li><a href="#" class="button icon fa-file">Continue Reading</a></li>
										</ul>
									</article>

								<!-- Post -->
									<article class="box post">
										<header>
											<h2><a href="#">By the way, many thanks to <strong>regularjane</strong>
											for these awesome demo photos</a></h2>
										</header>
										<a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>
										<h3>You should probably check out her work</h3>
										<p>Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit 
										ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris 
										sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada 
										in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat 
										consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id 
										in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat 
										magna tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros 
										consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id 
										justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet 
										mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. 
										Curabitur leo nibh, rutrum eu malesuada in, tristique at erat.</p>
										<p>Erat lorem ipsum veroeros consequat magna tempus lorem ipsum consequat 
										Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula 
										vel quam viverra sit amet mollis tortor congue. Sed quis mauris sit amet 
										magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, 
										tristique at erat. Curabitur leo nibh, rutrum eu malesuada  in, tristique 
										at erat lorem ipsum dolor sit amet lorem ipsum sed consequat magna 
										tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros consequat 
										magna tempus</p>
										<ul class="actions">
											<li><a href="#" class="button icon fa-file">Continue Reading</a></li>
										</ul>
									</article>
							
							</div>
							
						<!-- Sidebar -->
							<div id="sidebar" class="4u">
							
								<!-- Excerpts -->
									<section>
										<ul class="divided">
										@foreach ($posts as $post)
											<li>

												<!-- Excerpt -->
												
													<article class="box excerpt">
														<header>
															<span class="date">{{ $post->blog_date }}</span>
															<h3><a href="#">{{ $post->blog_title }}</a></h3>
														</header>
														<p>{{ $post->blog_desc }}</p>
													</article>

											</li>
										@endforeach	

												<!-- Excerpt 
													<article class="box excerpt">
														<header>
															<span class="date">July 28</span>
															<h3><a href="#">And another post</a></h3>
														</header>
														<p>Lorem ipsum dolor odio facilisis convallis. Etiam non nunc vel est 
														suscipit convallis non id orci lorem ipsum sed magna consequat feugiat lorem dolore.</p>
													</article>

											</li>
											<li>

												<!-- Excerpt -->
													<article class="box excerpt">
														<header>
															<span class="date">July 24</span>
															<h3><a href="#">One more post</a></h3>
														</header>
														<p>Lorem ipsum dolor odio facilisis convallis. Etiam non nunc vel est 
														suscipit convallis non id orci lorem ipsum sed magna consequat feugiat lorem dolore.</p>
													</article>

											</li>
											-->
										</ul>
									</section>
							
								<!-- Highlights -->
									<section>
										<ul class="divided">
											<li>

												<!-- Highlight -->
													<article class="box highlight">
														<header>
															<h3><a href="#">Something of note</a></h3>
														</header>
														<a href="#" class="image left"><img src="images/pic06.jpg" alt="" /></a>
														<p>Phasellus  sed laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam 
														viverra sit amet mollis tortor congue magna lorem ipsum dolor et quisque ut odio facilisis 
														convallis. Etiam non nunc vel est suscipit convallis non id orci. Ut interdum tempus 
														facilisis convallis. Etiam non nunc vel est suscipit convallis non id orci.</p>
														<ul class="actions">
															<li><a href="#" class="button icon fa-file">Learn More</a></li>
														</ul>
													</article>

											</li>
											<li>

												<!-- Highlight -->
													<article class="box highlight">
														<header>
															<h3><a href="#">Something of less note</a></h3>
														</header>
														<a href="#" class="image left"><img src="images/pic07.jpg" alt="" /></a>
														<p>Phasellus  sed laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam 
														viverra sit amet mollis tortor congue magna lorem ipsum dolor et quisque ut odio facilisis 
														convallis. Etiam non nunc vel est suscipit convallis non id orci. Ut interdum tempus 
														facilisis convallis. Etiam non nunc vel est suscipit convallis non id orci.</p>
														<ul class="actions">
															<li><a href="#" class="button icon fa-file">Learn More</a></li>
														</ul>
													</article>

											</li>
										</ul>
									</section>
							
							</div>

					</div>
				</div>
			</div>


@endsection