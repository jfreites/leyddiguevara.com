@extends('site.layout')

@section('sub-header')
	<div class="gdlr-page-title-wrapper"  >
		<div class="gdlr-page-title-overlay"></div>
		<div class="gdlr-page-title-container container" >
			<h1 class="gdlr-page-title">{{ $heading }}</h1>
			<span class="gdlr-page-caption gdlr-title-font">{{ $caption }}</span>
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
                                            @foreach($content as $item)
	                                            <div class="twelve columns">
	                                                <div class="gdlr-item gdlr-blog-grid">
	                                                    <div class="gdlr-ux gdlr-blog-grid-ux">
	                                                        <article id="post-859" class="post-859 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-fit-row">
	                                                            <div class="gdlr-standard-style">
	                                                                <div class="gdlr-blog-thumbnail">
	                                                                    <a href="../index.html?p=859"> <img src="http://cdn-second.goodlayers.com/skinbeauty/wp-content/uploads/2013/12/photodune-2917544-beauty-portrait-curly-hair-m-1024x708.jpg" alt="" width="960" height="664" /></a>
	                                                                    <!--<div class="gdlr-sticky-banner"><i class="fa fa-bullhorn"></i>Sticky Post</div>-->
	                                                                </div>
	                                                                <div class="gdlr-blog-date-wrapper">
	                                                                    <div class="gdlr-blog-day">{{ $item->created_at->format('d') }}</div>
	                                                                    <div class="gdlr-blog-month">{{ $item->created_at->format('M') }}</div>
	                                                                </div>
	                                                                <div class="gdlr-blog-content-wrapper">
	                                                                    <header class="post-header">
	                                                                        <h3 class="gdlr-blog-title"><a href="/{{ $item->category->slug }}/{{ $item->slug }}">{{ $item->title }}</a></h3>
	                                                                        <div class="gdlr-blog-info gdlr-info">
	                                                                            <div class="blog-info blog-author"><i class="fa fa-user"></i><a href="#" title="Posts por Leyddi Guevara" rel="author">Leyddi G.</a></div>
	                                                                            <div class="blog-info blog-comment"><i class="fa fa-comment-o"></i><a href="../index.html?p=859#respond">0</a></div>
	                                                                            <div class="clear"></div>
	                                                                        </div>
	                                                                        <div class="clear"></div>
	                                                                    </header>
	                                                                    <!-- entry-header -->
	                                                                    <div class="gdlr-blog-content">
	                                                                    	{{ $item->body }}
	                                                                        <div class="clear"></div>
	                                                                        <a href="/{{ $item->category->slug }}/{{ $item->slug }}" class="gdlr-button small excerpt-read-more">Leer Más</a>
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
                                            @endforeach
										</div>
										<div class="gdlr-pagination"><span class='page-numbers current'>1</span>
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
                        <!--<div id="text-2" class="widget widget_text gdlr-item gdlr-widget">
                            <h3 class="gdlr-widget-title">Text Widget</h3>
                            <div class="clear"></div>
                            <div class="textwidget">Sed posuere consectetur est at lobortis. Donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
                        </div>-->
                        <!--<div id="gdlr-recent-portfolio-widget-2" class="widget widget_gdlr-recent-portfolio-widget gdlr-item gdlr-widget">
                            <h3 class="gdlr-widget-title">Our Programs</h3>
                            <div class="clear"></div>
                            <div class="gdlr-recent-port-widget">
                                <div class="recent-post-widget">
                                    <div class="recent-post-widget-thumbnail"><a href="../index.html?p=4631"><img src="http://cdn-second.goodlayers.com/skinbeauty/wp-content/uploads/2013/12/photodune-8600513-peaceful-brunette-getting-facial-from-beauty-therapist-in-the-health-spa-m-150x150.jpg" alt="" width="150" height="150" /></a></div>
                                    <div class="recent-post-widget-content">
                                        <div class="recent-post-widget-title"><a href="../index.html?p=4631">Facial Therapy</a></div>
                                        <div class="recent-post-widget-info">
                                            <div class="blog-info blog-date"><i class="fa fa-clock-o"></i><a href="http://demo.goodlayers.com/skinbeauty/2015/05/16/">16 May 2015</a></div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="recent-post-widget">
                                    <div class="recent-post-widget-thumbnail"><a href="../index.html?p=4630"><img src="http://cdn-second.goodlayers.com/skinbeauty/wp-content/uploads/2013/12/Fotolia_24881759_Subscription_Monthly_XXL-150x150.jpg" alt="" width="150" height="150" /></a></div>
                                    <div class="recent-post-widget-content">
                                        <div class="recent-post-widget-title"><a href="../index.html?p=4630">Full Body Massage</a></div>
                                        <div class="recent-post-widget-info">
                                            <div class="blog-info blog-date"><i class="fa fa-clock-o"></i><a href="http://demo.goodlayers.com/skinbeauty/2015/05/16/">16 May 2015</a></div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="recent-post-widget">
                                    <div class="recent-post-widget-thumbnail"><a href="../index.html?p=4629"><img src="http://cdn-second.goodlayers.com/skinbeauty/wp-content/uploads/2013/12/Fotolia_43785736_Subscription_Monthly_XL-150x150.jpg" alt="" width="150" height="150" /></a></div>
                                    <div class="recent-post-widget-content">
                                        <div class="recent-post-widget-title"><a href="../index.html?p=4629">Slim Body Session</a></div>
                                        <div class="recent-post-widget-info">
                                            <div class="blog-info blog-date"><i class="fa fa-clock-o"></i><a href="http://demo.goodlayers.com/skinbeauty/2015/05/16/">16 May 2015</a></div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>-->
                        <div id="recent-comments-3" class="widget widget_recent_comments gdlr-item gdlr-widget">
                            <h3 class="gdlr-widget-title">Recent Comments</h3>
                            <div class="clear"></div>
                            <ul id="recentcomments">
                                <li class="recentcomments"><span class="comment-author-link">John Smith</span> on <a href="../index.html?p=4768#comment-26">Premium Hydroxy Cleanser</a></li>
                                <li class="recentcomments"><span class="comment-author-link">John Smith</span> on <a href="../index.html?p=4766#comment-21">Golden Deluxe Cream</a></li>
                                <li class="recentcomments"><span class="comment-author-link">John Smith</span> on <a href="../index.html?p=4767#comment-23">Golden Facial Serum</a></li>
                                <li class="recentcomments"><span class="comment-author-link">John Smith</span> on <a href="../index.html?p=4768#comment-25">Premium Hydroxy Cleanser</a></li>
                                <li class="recentcomments"><span class="comment-author-link">John Smith</span> on <a href="../index.html?p=4767#comment-22">Golden Facial Serum</a></li>
                            </ul>
                        </div>
                        <div id="tag_cloud-2" class="widget widget_tag_cloud gdlr-item gdlr-widget">
                            <h3 class="gdlr-widget-title">Tag Cloud</h3>
                            <div class="clear"></div>
                            <div class="tagcloud"><a href="../tag/animal/index.html" class="tag-cloud-link tag-link-15 tag-link-position-1" style="font-size: 8pt;" aria-label="Animal (1 item)">Animal</a>
                                <a href="../tag/aside/index.html" class="tag-cloud-link tag-link-16 tag-link-position-2" style="font-size: 8pt;" aria-label="Aside (1 item)">Aside</a>
                                <a href="../tag/audio/index.html" class="tag-cloud-link tag-link-17 tag-link-position-3" style="font-size: 11.2307692308pt;" aria-label="Audio (2 items)">Audio</a>
                                <a href="../tag/blog/index.html" class="tag-cloud-link tag-link-18 tag-link-position-4" style="font-size: 19.6666666667pt;" aria-label="Blog (8 items)">Blog</a>
                                <a href="../tag/business/index.html" class="tag-cloud-link tag-link-19 tag-link-position-5" style="font-size: 15.1794871795pt;" aria-label="Business (4 items)">Business</a>
                                <a href="../tag/gallery-thumbnail/index.html" class="tag-cloud-link tag-link-20 tag-link-position-6" style="font-size: 8pt;" aria-label="Gallery Thumbnail (1 item)">Gallery Thumbnail</a>
                                <a href="../tag/identity-2/index.html" class="tag-cloud-link tag-link-21 tag-link-position-7" style="font-size: 13.3846153846pt;" aria-label="identity (3 items)">identity</a>
                                <a href="../tag/life-style/page/1/index.html" class="tag-cloud-link tag-link-22 tag-link-position-8" style="font-size: 22pt;" aria-label="Life Style (11 items)">Life Style</a>
                                <a href="../tag/link/index.html" class="tag-cloud-link tag-link-23 tag-link-position-9" style="font-size: 11.2307692308pt;" aria-label="Link (2 items)">Link</a>
                                <a href="../tag/news/index.html" class="tag-cloud-link tag-link-24 tag-link-position-10" style="font-size: 16.6153846154pt;" aria-label="News (5 items)">News</a>
                                <a href="../tag/post-format/index.html" class="tag-cloud-link tag-link-25 tag-link-position-11" style="font-size: 15.1794871795pt;" aria-label="Post format (4 items)">Post format</a>
                                <a href="../tag/quote/index.html" class="tag-cloud-link tag-link-26 tag-link-position-12" style="font-size: 8pt;" aria-label="Quote (1 item)">Quote</a>
                                <a href="../tag/safari/index.html" class="tag-cloud-link tag-link-27 tag-link-position-13" style="font-size: 8pt;" aria-label="Safari (1 item)">Safari</a>
                                <a href="../tag/travel/index.html" class="tag-cloud-link tag-link-28 tag-link-position-14" style="font-size: 8pt;" aria-label="Travel (1 item)">Travel</a>
                                <a href="../tag/video/index.html" class="tag-cloud-link tag-link-29 tag-link-position-15" style="font-size: 8pt;" aria-label="Video (1 item)">Video</a></div>
                        </div>
                        <div id="gdlr-twitter-widget-2" class="widget widget_gdlr-twitter-widget gdlr-item gdlr-widget">
                            <h3 class="gdlr-widget-title">Twitter</h3>
                            <div class="clear"></div><strong>Could not authenticate you.</strong>
                            <ul class="gdlr-twitter-widget"></ul>
                        </div>
                    </div>
	        	</div>
	        	<div class="clear"></div>
	        </div>
	    </div>
	</div>

@endsection