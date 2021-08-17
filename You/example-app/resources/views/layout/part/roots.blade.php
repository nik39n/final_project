<div class="catagories-menu">
    <ul id="menu-content2" class="menu-content collapse show">
        <!-- Single Item -->
        @foreach($items as $item)
            @if ($item->parent_id == 0)
                <li data-toggle="collapse" data-target="#clothing">
                    <span>{{ $item->name }}</span>
                    @isset($item->children)
                        <ul class="sub-menu collapse show" id="clothing">
                            @foreach($item->children as $child)
                                <li>
                                    <a href="{{ route('catalog.category', ['slug' => $child->slug]) }}">
                                        {{ $child->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endisset
                </li>
            @endif
        @endforeach
    </ul>
</div>