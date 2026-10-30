 
<section id="ahn-blog-section">

    @php
        $ahnRecentBlogs = collect();

        if (isset($blogs) && $blogs->childs) {
            $ahnRecentBlogs = $blogs->childs
                ->sortByDesc('updated_at')
                ->take(4)
                ->values();
        }

        $ahnFeaturedBlog = $ahnRecentBlogs->first();
        $ahnSideBlogs = $ahnRecentBlogs->slice(1);
    @endphp

    <div class="ahn-blog-container">

        <!-- Editorial Section Heading -->
        <div class="ahn-blog-heading" data-aos="fade-up">

            <div class="ahn-blog-heading-left">
                <span class="ahn-blog-kicker">
                    AVIATION SERVICES NEPAL
                    <span class="ahn-blog-kicker-line"></span>
                    JOURNAL
                </span>

                <h2>
                    Stories worth<br>
                    <span>exploring.</span>
                </h2>
            </div>

            <div class="ahn-blog-heading-right">
                <p>
                    Discover aviation insights, study opportunities,
                    expert guidance and stories that bring your global
                    ambitions closer.
                </p>

                <a href="/blog?content=blogs" class="ahn-blog-heading-link">
                    Explore all stories
                    <i class="fas fa-arrow-up-right-from-square"></i>
                </a>
            </div>

        </div>

        @if($ahnFeaturedBlog)

            <!-- Featured Editorial Layout -->
            <div class="ahn-blog-editorial">

                <!-- Large Featured Article -->
                @php
                    $ahnFeaturedUrl = url(
                        trim($blogs->nav_name ?? '', '/') . '/' .
                        trim($ahnFeaturedBlog->nav_name ?? '', '/')
                    );

                    $ahnFeaturedDescription = strip_tags(
                        htmlspecialchars_decode(
                            $ahnFeaturedBlog->page_description ?? ''
                        )
                    );
                @endphp

                <article class="ahn-blog-featured" data-aos="fade-up">

                    <a href="{{ $ahnFeaturedUrl }}"
                       class="ahn-blog-featured-image"
                       aria-label="Read {{ strip_tags($ahnFeaturedBlog->caption ?? 'featured article') }}">

                        <img
                            src="{{ $ahnFeaturedBlog->banner_image ?: '/website/img/default-blog.jpg' }}"
                            alt="{{ strip_tags($ahnFeaturedBlog->caption ?? 'Aviation Services Nepal article') }}"
                            loading="lazy">

                        <span class="ahn-blog-featured-label">
                            <span class="ahn-blog-label-dot"></span>
                            FEATURED STORY
                        </span>

                        <span class="ahn-blog-image-action">
                            <i class="fas fa-arrow-up-right-from-square"></i>
                        </span>

                    </a>

                    <div class="ahn-blog-featured-content">

                        <div class="ahn-blog-meta">
                            <span>
                                <i class="far fa-calendar-alt"></i>
                                {{ $ahnFeaturedBlog->updated_at
                                    ? \Carbon\Carbon::parse($ahnFeaturedBlog->updated_at)->format('M d, Y')
                                    : 'Latest story' }}
                            </span>

                            <span class="ahn-blog-meta-separator"></span>

                            <span>Editor's pick</span>
                        </div>

                        <h3>
                            <a href="{{ $ahnFeaturedUrl }}">
                                {!! htmlspecialchars_decode($ahnFeaturedBlog->caption ?? 'Discover our latest story') !!}
                            </a>
                        </h3>

                        <p class="ahn-blog-featured-description">
                            {{ \Illuminate\Support\Str::limit(trim($ahnFeaturedDescription), 210, '...') }}
                        </p>

                        <a href="{{ $ahnFeaturedUrl }}" class="ahn-blog-read-link">
                            Read the story
                            <span><i class="fas fa-arrow-right"></i></span>
                        </a>

                    </div>

                </article>

                <!-- Recent Stories List -->
                <div class="ahn-blog-latest">

                    <div class="ahn-blog-latest-heading">
                        <div>
                            <span class="ahn-blog-small-kicker">FRESH FROM OUR JOURNAL</span>
                            <h3>Latest stories</h3>
                        </div>

                        <span class="ahn-blog-story-count">
                            {{ str_pad($ahnSideBlogs->count(), 2, '0', STR_PAD_LEFT) }}
                        </span>
                    </div>

                    @forelse($ahnSideBlogs as $sideBlog)

                        @php
                            $ahnSideUrl = url(
                                trim($blogs->nav_name ?? '', '/') . '/' .
                                trim($sideBlog->nav_name ?? '', '/')
                            );

                            $ahnSideDescription = strip_tags(
                                htmlspecialchars_decode(
                                    $sideBlog->page_description ?? ''
                                )
                            );
                        @endphp

                        <article class="ahn-blog-story"
                                 data-aos="fade-up"
                                 data-aos-delay="{{ $loop->iteration * 90 }}">

                            <a href="{{ $ahnSideUrl }}"
                               class="ahn-blog-story-image"
                               aria-label="Read {{ strip_tags($sideBlog->caption ?? 'article') }}">

                                <img
                                    src="{{ $sideBlog->banner_image ?: '/website/img/default-blog.jpg' }}"
                                    alt="{{ strip_tags($sideBlog->caption ?? 'Aviation Services Nepal article') }}"
                                    loading="lazy">
                            </a>

                            <div class="ahn-blog-story-content">

                                <span class="ahn-blog-story-date">
                                    {{ $sideBlog->updated_at
                                        ? \Carbon\Carbon::parse($sideBlog->updated_at)->format('M d, Y')
                                        : 'Latest story' }}
                                </span>

                                <h4>
                                    <a href="{{ $ahnSideUrl }}">
                                        {!! htmlspecialchars_decode($sideBlog->caption ?? 'Read our latest article') !!}
                                    </a>
                                </h4>

                                <p>
                                    {{ \Illuminate\Support\Str::limit(trim($ahnSideDescription), 85, '...') }}
                                </p>

                                <a href="{{ $ahnSideUrl }}"
                                   class="ahn-blog-story-link"
                                   aria-label="Read article">
                                    Read more
                                    <i class="fas fa-arrow-right"></i>
                                </a>

                            </div>

                        </article>

                    @empty

                        <div class="ahn-blog-no-stories">
                            <p>More stories are coming soon.</p>
                        </div>

                    @endforelse

                    <a href="/blog?content=blogs" class="ahn-blog-all-link">
                        <span>View all articles</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>

                </div>

            </div>

        @else

            <div class="ahn-blog-empty">
                <i class="far fa-newspaper"></i>
                <h3>New stories are on the way.</h3>
                <p>Our latest aviation insights and updates will appear here soon.</p>
            </div>

        @endif

        <!-- Editorial Footer -->
        <div class="ahn-blog-bottom">
            <span class="ahn-blog-bottom-line"></span>

            <p>
                <span>AVIATION SERVICES NEPAL</span>
                &nbsp; / &nbsp; Ideas, insights and inspiration for your journey.
            </p>

            <a href="/blog?content=blogs" aria-label="Explore all articles">
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>

    </div>

</section>


