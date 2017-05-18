 @foreach($items as $item)
 <li>
 	<a href="{{ route('products.show', $item->slug) }}" title="Khóa học {{ $item->name }}">
	<img class="img-responsive" style="width:75px;" src="{{ url($item->image) }}">
	<div class="meta">
		<div class="title h5">Khóa học {{ $item->name }}</div>								
		<div class="stm_featured_product_price">
			<div class="price">
				₫{{ number_format($item->price) }}										</div>
			</div>
			<div class="rating">


				<span class="price"><span class="woocommerce-Price-amount amount">{{ number_format($item->price) }}<span class="woocommerce-Price-currencySymbol">₫</span></span></span>
			</div>
			<div class="expert">Giảng viên {{ $item->teacher ? $item->teacher->full_name : '' }}</div>
		</div>
	</a>
</li>
@endforeach