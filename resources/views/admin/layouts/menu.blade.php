<li class="{{ Request::is('shop*') ? 'active' : '' }}">
    <a href="{!! route('shop.index') !!}"><i class="fa fa-edit"></i><span>Shop</span></a>
</li>

<li class="{{ Request::is('branch*') ? 'active' : '' }}">
    <a href="{!! route('branch.index') !!}"><i class="fa fa-edit"></i><span>Branch</span></a>
</li>

<li class="{{ Request::is('item*') ? 'active' : '' }}">
    <a href="{!! route('item.index') !!}"><i class="fa fa-edit"></i><span>Item</span></a>
</li>