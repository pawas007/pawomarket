<div class="col-lg-3">
    <div class="left-sidebar shop-sidebar-wrap">
        <!-- Sidebar single item -->
        <div class="sidebar-widget">
            <h3 class="sidebar-title mt-0">Search</h3>
            <div class="search-widget">
                <form action="#">
                    <div class="input-group">
                        <input class="form-control" placeholder="Search entire store here ..."
                               type="text">
                        <button type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Sidebar single item -->
        <!-- Sidebar single item -->
        <div class="sidebar-widget mt-40px">
            <h3 class="sidebar-title">Categories</h3>
            <div class="category-post">
                <ul>
                    @foreach($categories as $category)
                        <li>
                            <a href="{{ route('post.category',['slug' => $category->slug])}}" class="">{{$category->name}} <span>(   {{count($category->posts)}})</span> </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- Sidebar single item -->

        @if($lastPost)

            <div class="sidebar-widget mt-40px">
                <h3 class="sidebar-title">Recent Post</h3>
                <div class="recent-post-widget">


                    @foreach($lastPost as $post)
                        <div class="recent-single-post d-flex">
                            @if($post->image)
                                <div class="thumb-side img-zoom-hover">
                                    <a href="{{ route('single.blog',['slug' => $post->slug])}}">
                                        <img src="{{Storage::url($post->image) }}  "
                                             alt="{{ $post->title}}">


                                    </a>
                                </div>
                            @endif
                            <div class="media-side">
                                <h5>
                                    <a href="{{ route('single.blog',['slug' => $post->slug])}}">{{ $post->title}}</a>
                                </h5>
                                <span class="date">{{ $post->create}}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Sidebar single item -->

        @endif
        @if($tags)
            <div class="sidebar-widget mt-40px">
                <h3 class="sidebar-title">Tags</h3>
                <div class="sidebar-widget-tag d-inline-block">
                    <ul>
                        @foreach($tags as $tag)
                            <li><a href="{{route('post.tag',$tag->slug)}}"> {{$tag->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
    @endif
    <!-- Sidebar single item -->


    @if($instagramLastPost )
        <!-- Sidebar single item -->
        <div class="sidebar-widget mt-40px">
            <h3 class="sidebar-title">Instagram Widget</h3>
            <div class="flicker-widget">
                <ul>
                    @foreach($instagramLastPost  as $instagramItem)
                    <li class="img-zoom-hover">
                        <a class="image-link" href="{{$instagramItem['link']}}" target="_blank">
                            <img src="{{$instagramItem['img']}}" alt="instagram"></a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- Sidebar single item -->
        @endif
    </div>
</div>
