@if(!empty(session('messages')))
<div class="woocommerce-message">
    {{session('messages')}}
</div>
@endif