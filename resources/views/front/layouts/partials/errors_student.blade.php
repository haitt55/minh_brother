@if (count($errors) > 0)
<ul class="woocommerce-error">
    @foreach($errors->all() as $error)
    <li>
        <i class="fa fa-times"></i><span>Error.</span> 
        {{ $error }}
    </li>
    @endforeach
</ul>
@endif
@if(session()->has('message'))
<div class="woocommerce-message">
    <i class="fa fa-check"></i>
    <span>{{ strtoupper(session()->get('message')['status']) }}.</span>{{ strtoupper(session()->get('message')['content']) }}
</div>
@endif