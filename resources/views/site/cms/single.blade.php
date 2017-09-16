@extends('site.layout')

@section('sub-header')
	<div class="gdlr-page-title-wrapper"  >
		<div class="gdlr-page-title-overlay"></div>
		<div class="gdlr-page-title-container container" >
			<h1 class="gdlr-page-title">{{ $content->title }}</h1>
			<span class="gdlr-page-caption gdlr-title-font">Publicado el {{ $content->created_at->format('d-m-Y') }}</span>
		</div>
	</div>
@endsection

@section('content')

	<div class="gdlr-content">
		<div class="with-sidebar-wrapper">
			<div class="with-sidebar-container container">
				<div class="with-sidebar-left eight columns">
					<div class="with-sidebar-content twelve columns">
						<section id="content-section-1">
							<div class="section-container container">
								<div class="blog-item-wrapper">
									<div class="blog-item-holder">
										<div class="gdlr-isotope" data-type="blog" data-layout="fitRows">
											<div class="clear"></div>
												<div class="twelve columns">
													<div class="gdlr-item gdlr-blog-grid">
														<div class="gdlr-ux gdlr-blog-grid-ux">
															<article id="post-859" class="post-859 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-fit-row">
																<div class="gdlr-standard-style">
																	<div class="gdlr-blog-thumbnail">
																		<img src="/uploads/posts/{{ $content->banner or 'empty-post.jpg' }}" alt="{{ $content->title }}" width="960" height="664" />
																	</div>
																	<div class="gdlr-blog-date-wrapper">
																		<div class="gdlr-blog-day">{{ $content->created_at->format('d') }}</div>
																		<div class="gdlr-blog-month">{{ $content->created_at->format('M') }}</div>
																	</div>
																	<div class="gdlr-blog-content-wrapper">
																		<header class="post-header">
																			<h3 class="gdlr-blog-title"><a href="/{{ $content->category->slug }}/{{ $content->slug }}">{{ $content->title }}</a></h3>
																			<div class="gdlr-blog-info gdlr-info">
																				<div class="blog-info blog-author"><i class="fa fa-user"></i><a href="#" title="Posts por Leyddi Guevara" rel="author">Leyddi G.</a></div>
																				<div class="blog-info blog-comment"><i class="fa fa-comment-o"></i><a href="#">0</a></div>
																				<div class="clear"></div>
																			</div>
																			<div class="clear"></div>
																		</header>
																		<!-- entry-header -->
																		<div class="gdlr-blog-content">
																			{!! $content->body !!}
																		</div>
																	</div>
																	<div class="clear"></div>
																</div>
															</article>
															<!-- #post -->
														</div>
													</div>
												</div>
												<div class="clear"></div>
										</div>
									</div>
								</div>
								<div class="clear"></div>
							</div>
						</section>
					</div>
					<div class="clear"></div>
				</div>
				<div class="gdlr-sidebar gdlr-right-sidebar four columns">
					<div class="gdlr-item-start-content sidebar-right-item">
						<div id="search-3" class="widget widget_search gdlr-item gdlr-widget">
							<div class="gdl-search-form">
								<form method="get" id="searchform" action="../../skinbeauty.1">
									<div class="search-text" id="search-text">
										<input type="text" name="s" id="s" autocomplete="off" data-default="Type keywords..." />
									</div>
									<input type="submit" id="searchsubmit" value="" />
									<div class="clear"></div>
								</form>
							</div>
						</div>
						<div id="gdlr-twitter-widget-2" class="widget widget_gdlr-twitter-widget gdlr-item gdlr-widget">
							<h3 class="gdlr-widget-title">Instagram</h3>
							<div class="clear"></div>
							<ul class="gdlr-twitter-widget"></ul>
						</div>
						<div id="recent-comments-3" class="widget widget_recent_comments gdlr-item gdlr-widget">
							<h3 class="gdlr-widget-title">Comentarios Recientes</h3>
							<div class="clear"></div>
						</div>
						<div id="tag_cloud-2" class="widget widget_tag_cloud gdlr-item gdlr-widget">
							<h3 class="gdlr-widget-title">Tag Cloud</h3>
							<div class="clear"></div>
							<div class="tagcloud"><a href="../tag/animal/index.html" class="tag-cloud-link tag-link-15 tag-link-position-1" style="font-size: 8pt;" aria-label="Animal (1 item)">Animal</a>
								<a href="../tag/aside/index.html" class="tag-cloud-link tag-link-16 tag-link-position-2" style="font-size: 8pt;" aria-label="Aside (1 item)">Aside</a>
								<a href="../tag/audio/index.html" class="tag-cloud-link tag-link-17 tag-link-position-3" style="font-size: 11.2307692308pt;" aria-label="Audio (2 items)">Audio</a>
								<a href="../tag/blog/index.html" class="tag-cloud-link tag-link-18 tag-link-position-4" style="font-size: 19.6666666667pt;" aria-label="Blog (8 items)">Blog</a>
						</div>
						<div id="gdlr-twitter-widget-2" class="widget widget_gdlr-twitter-widget gdlr-item gdlr-widget">
							<h3 class="gdlr-widget-title">Twitter</h3>
							<div class="clear"></div><strong>Info aquí.</strong>
							<ul class="gdlr-twitter-widget"></ul>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
@endsection
