@foreach($comments as $comment)
    <li itemprop="review" itemscope="" itemtype="http://schema.org/Review" class="comment even thread-even depth-1" id="li-comment-9">

        <div id="comment-9" class="comment_container">
            <div class="stm_review_author_name">
                <h4 itemprop="author">{!! $comment->name !!}
                </h4>
            </div>

            <img alt="" src="http://0.gravatar.com/avatar/30924290d56a3586c7807987004e5478?s=75&amp;d=mm&amp;r=g" srcset="http://0.gravatar.com/avatar/30924290d56a3586c7807987004e5478?s=150&amp;d=mm&amp;r=g 2x" class="avatar avatar-75 photo" height="75" width="75">
            <div class="comment-text">


                <div itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" class="star-rating" title="X?p h?ng 5 / 5">
                    <span style="width:100%"><strong itemprop="ratingValue">5</strong> trên 5</span>
                </div>



                <p class="meta">
                    <time itemprop="datePublished" datetime="2 n?m ago">
                        {!! get_time_from_now($comment->created_at) !!}</time>
                </p>


                <div itemprop="description" class="description">
                    {!! $comment->comment !!}
                    <p><strong>&nbsp;</strong></p>
                </div>
            </div>
        </div>
        @if ($comment->admin_reply)
            <ul class="children">
                <li itemprop="review" itemscope="" itemtype="http://schema.org/Review" class="comment byuser comment-author-thaoptp odd alt depth-2" id="li-comment-49">

                    <div id="comment-49" class="comment_container">
                        <div class="stm_review_author_name">
                            <h4 itemprop="author">admin
                            </h4>
                        </div>

                        <img alt="" src="http://0.gravatar.com/avatar/948683af68dd3f02d0fba94251c6901f?s=75&amp;d=mm&amp;r=g" srcset="http://0.gravatar.com/avatar/948683af68dd3f02d0fba94251c6901f?s=150&amp;d=mm&amp;r=g 2x" class="avatar avatar-75 photo" height="75" width="75">
                        <div class="comment-text">



                            <p class="meta">
                                <time itemprop="datePublished" datetime="9 tháng ago">
                                    {!! get_time_from_now($comment->updated_at) !!}	</time>
                            </p>


                            <div itemprop="description" class="description">
                                {!! $comment->admin_reply !!}
                            </div>
                        </div>
                    </div>
                </li><!-- #comment-## -->
            </ul><!-- .children -->
        @endif
    </li>
@endforeach