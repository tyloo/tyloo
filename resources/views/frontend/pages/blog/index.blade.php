@extends('layouts.frontend')

@section('content')
    @include('frontend.partials.common.header._headerPage', ['pageName' => 'Blog', 'pageNameBreadcrumb' => 'Blog'])

    <section class="mt40 mb40">
        <div class="container">
            <div class="row">
                <!-- Blog Posts -->
                <div class="col-sm-8">
                    @forelse($posts as $post)
                        <div class="blog-post mb40">
                            <a href="{{ URL::route('blog.show', ['slug' => $post->slug]) }}"><img class="img-responsive full-width" src="{{ $post->image }}" alt=""></a>
                            <div class="blog-post-holder">
                                <ul class="list-inline posted-info">
                                    <li>Posted By <a href="#"></a> - In <a href="#">Design</a> - {{ $post->created_at->diffForHumans() }}</li>
                                </ul>
                                <hr align="left" class="mt15 mb10">
                                <h2><a href="{{ URL::route('blog.show', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h2>
                                {!! $post->excerpt !!}
                                <a href="{{ URL::route('blog.show', ['slug' => $post->slug]) }}" class="btn btn-rw btn-primary mt10">Read more</a>
                            </div>
                        </div>
                    @empty
                        <p>
                            No post have been found in the Database...
                        </p>
                    @endforelse

                    <nav class="text-center">
                        {!! $posts->render() !!}
                    </nav>
                </div>

                <!-- Sidebar -->
                <div class="col-sm-4">
                    <div class="content-box content-box-bordered mt30-xs mb30">
                        <span class="ion-beaker bordered-icon-sm"></span>
                        <h4 class="pt15">The Laboratory</h4>
                        <p class="no-margin">
                            In this section, I'll try to share you cool ideas, tools and techniques I learnt. I think that sharing my
                            knowlege with you guys is important and I hope it might be useful for you. I was lucky to find some guys
                            like me before, teaching me those stuff very kindly. So I guess it's now my turn ;)
                        </p>
                    </div>

                    <div class="blog-heading">
                        <h3>About</h3>
                    </div>
                    <p class="mb30">
                        Here you'll find useful (well I guess so) stuff related to Laravel, Security, PHP in general and maybe
                        other IT-nerdy stuff. Enjoy and feel free to leave me feedbacks in comments!
                    </p>

                    <div class="blog-heading">
                        <h3>Last Posts</h3>
                    </div>
                    <ul class="list-unstyled latest-posts">
                        <li>
                            <h3 class="no-margin"><a href="#">Wireframe for the news view...</a></h3>
                            <small>5 Jan, 2015 / <a href="#">Web,</a> <a href="#">Webdesign</a></small>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam odio leo.</p>
                        </li>
                        <li>
                            <h3 class="no-margin"><a href="#">It is a long established fact that a reader</a></h3>
                            <small>17 Jan, 2015 / <a href="#">Artificial Intelligence</a></small>
                            <p>Pellentesque efficitur blandit dui, porta cursus velit imperdiet sit amet.</p>
                        </li>
                        <li>
                            <h3 class="no-margin"><a href="#">The point of using Lorem Ipsum</a></h3>
                            <small>19 Jan, 2015 / <a href="#">Hi-Tech,</a> <a href="#">Technology</a></small>
                            <p>Phasellus ullamcorper pellentesque ex. Cras venenatis elit orci, vitae dictum elit egestas a. Nunc nec auctor mauris, semper scelerisque nibh.</p>
                        </li>
                        <li>
                            <h3 class="no-margin"><a href="#">Many desktop publishing packages...</a></h3>
                            <small>23 Jan, 2015 / <a href="#">Art,</a> <a href="#">Lifestyles</a></small>
                            <p class="no-border">Integer vehicula sed justo ac dapibus. In sodales nunc non varius accumsan.</p>
                        </li>
                    </ul>

                    <div class="blog-heading">
                        <h3>Tags</h3>
                    </div>
                    <ul class="list-unstyled latest-posts">
                        <li>
                            <h3 class="no-margin"><a href="#">Tag 1</a></h3>
                            <p>
                                Tag description
                            </p>
                        </li>
                        <li>
                            <h3 class="no-margin"><a href="#">Tag 2</a></h3>
                            <p>
                                Tag description
                            </p>
                        </li>
                        <li>
                            <h3 class="no-margin"><a href="#">Tag 3</a></h3>
                            <p>
                                Tag description
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@stop
