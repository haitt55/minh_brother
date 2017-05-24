<aside id="search-2" class="widget widget_search">
    <div class="widget_title"><h3>Tìm kiếm</h3></div>
    <form role="search" method="get" class="search-form" action="{!! route('front.search') !!}">
        <label>
            <span class="screen-reader-text">Tìm kiếm cho:</span>
            <input type="search" class="search-field" placeholder="Tìm kiếm &hellip;" value="{!! Request::get('search') !!}" name="search" />
        </label>
        <input type="submit" class="search-submit" value="Tìm kiếm" />
    </form>
</aside>
