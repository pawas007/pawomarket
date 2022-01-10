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
                    <li>
                        <a href="#" class="selected">All <span>(4)</span> </a>
                    </li>
                    <li>
                        <a href="#" class="">Accesssories <span>(3)</span> </a>
                    </li>
                    <li>
                        <a href="#" class="">Box <span>(5)</span> </a>
                    </li>
                    <li>
                        <a href="#" class="">chair <span>(2)</span> </a>
                    </li>
                    <li>
                        <a href="#" class="">Deco <span>(6)</span> </a>
                    </li>
                    <li>
                        <a href="#" class="">Furniture <span>(4)</span> </a>
                    </li>
                    <li>
                        <a href="#" class="">Glass <span>(1)</span> </a>
                    </li>
                    <li>
                        <a href="#" class="">Sofa <span>(3)</span> </a>
                    </li>
                    <li>
                        <a href="#" class="">Table <span>(4)</span> </a>
                    </li>
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
                                <img src="{{ $post->image}}"
                                                            alt="{{ $post->title}}"></a>
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
                        <li><a href="{{route('tag',$tag->slug)}}"> {{$tag->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
    <!-- Sidebar single item -->
        <!-- Sidebar single item -->
        <div class="sidebar-widget mt-40px">
            <h3 class="sidebar-title">Instagram Widget</h3>
            <div class="flicker-widget">
                <ul>
                    <li class="img-zoom-hover">
                        <a class="image-link" href="https://www.instagram.com/" target="_blank"><img
                                src="/assets/img/instagram/post1.png" alt="instagram"></a>
                    </li>
                    <li class="img-zoom-hover">
                        <a class="image-link" href="https://www.instagram.com/" target="_blank"><img
                                src="/assets/img/instagram/post2.png" alt="instagram"></a>
                    </li>
                    <li class="img-zoom-hover">
                        <a class="image-link" href="https://www.instagram.com/" target="_blank"><img
                                src="/assets/img/instagram/post3.png" alt="instagram"></a>
                    </li>
                    <li class="img-zoom-hover">
                        <a class="image-link" href="https://www.instagram.com/" target="_blank"><img
                                src="/assets/img/instagram/post4.png" alt="instagram"></a>
                    </li>
                    <li class="img-zoom-hover">
                        <a class="image-link" href="https://www.instagram.com/" target="_blank"><img
                                src="/assets/img/instagram/post5.png" alt="instagram"></a>
                    </li>
                    <li class="img-zoom-hover">
                        <a class="image-link" href="https://www.instagram.com/" target="_blank"><img
                                src="/assets/img/instagram/post6.png" alt="instagram"></a>
                    </li>
                    <li class="img-zoom-hover">
                        <a class="image-link" href="https://www.instagram.com/" target="_blank"><img
                                src="/assets/img/instagram/post7.png" alt="instagram"></a>
                    </li>
                    <li class="img-zoom-hover">
                        <a class="image-link" href="https://www.instagram.com/" target="_blank"><img
                                src="/assets/img/instagram/post8.png" alt="instagram"></a>
                    </li>
                    <li class="img-zoom-hover">
                        <a class="image-link" href="https://www.instagram.com/" target="_blank"><img
                                src="/assets/img/instagram/post9.png" alt="instagram"></a>
                    </li>
                    <li class="img-zoom-hover">
                        <a class="image-link" href="https://www.instagram.com/" target="_blank"><img
                                src="/assets/img/instagram/post10.png" alt="instagram"></a>
                    </li>
                    <li class="img-zoom-hover">
                        <a class="image-link" href="https://www.instagram.com/" target="_blank"><img
                                src="/assets/img/instagram/post11.png" alt="instagram"></a>
                    </li>
                    <li class="img-zoom-hover">
                        <a class="image-link" href="https://www.instagram.com/" target="_blank"><img
                                src="/assets/img/instagram/post12.png" alt="instagram"></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Sidebar single item -->
    </div>
</div>
