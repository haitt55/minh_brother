@foreach($items as $item)
<li class="col-md-4 col-sm-4 col-xs-6 course-col first post-92 product type-product status-publish has-post-thumbnail product_cat-revit-mep product_tag-sach-revit-mep product_tag-tu-hoc-revit-mep  instock shipping-taxable purchasable product-type-simple">

    <a href="{{ route('products.show', $item->slug) }}"
       class="woocommerce-LoopProduct-link">
    </a>

    <div class="stm_archive_product_inner_unit heading_font"><a
                href="{{ route('products.show', $item->slug) }}"
                class="woocommerce-LoopProduct-link">
        </a>

        <div class="stm_archive_product_inner_unit_centered"><a
                    href="{{ route('products.show', $item->slug) }}"
                    class="woocommerce-LoopProduct-link">

            </a>

            <div class="stm_featured_product_image"><a
                        href="{{ route('products.show', $item->slug) }}"
                        class="woocommerce-LoopProduct-link">
                    <div class="stm_featured_product_price">
                        <div class="price">
                            <h5>₫800000</h5>
                        </div>
                    </div>

                </a><a href="{{ route('products.show', $item->slug) }}"
                       title="View course - Bộ sách">
                    <img width="270" height="283"
                         src="{{ url($item->image) }}"
                         class="img-responsive wp-post-image"
                         alt="Bộ sách "> </a>

            </div>


            <div class="stm_featured_product_body">
                <a href="{{ route('products.show', $item->slug) }}"
                   title="View course - ">
                    <div class="title">Khoá học {{ $item->name }}</div>
                </a>

                <div class="expert">Giảng viên {{ $item->teacher ?  $item->teacher->full_name : ''}}</div>
            </div>

            <div class="stm_featured_product_footer">
                <div class="clearfix">
                    <div class="pull-left">

                        <div class="stm_featured_product_comments">
                            <i class="fa-icon-stm_icon_comment_o"></i><span>11</span>
                        </div>


                        <div class="stm_featured_product_stock">
                            <i class="fa-icon-stm_icon_user"></i><span>75</span>
                        </div>

                    </div>
                    <div class="pull-right">


                                                    <span class="price"><span class="woocommerce-Price-amount amount">800.000<span
                                                                    class="woocommerce-Price-currencySymbol">₫</span></span></span>
                    </div>
                </div>

                <div class="stm_featured_product_show_more">
                    <a class="btn btn-default"
                       href="{{ route('products.show', $item->slug) }}"
                       title="Đọc tiếp">Đọc tiếp</a>
                </div>
            </div>

        </div>
        <!-- stm_archive_product_inner_unit_centered -->
    </div>
    <!-- stm_archive_product_inner_unit -->
</li>
@endforeach