<nav class="navbar navbar-default">
    <div class="container container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                @foreach($menu_items_left as $left)
                    <li class="{{ isset($menu_item_active) && $left['item'] == $menu_item_active ? 'active' : '' }}">
                        <a href="{{ $left['url'] }}"
                            class="{{ $left['class'] }}"
                            id="{{ $left['id'] }}"
                                {{ $left['blank'] ? 'target="_blank"' : '' }}
                                >{{ $left['title'] }}
                            @if(isset($menu_item_active) && $left['item'] == $menu_item_active)
                                <span class="sr-only">(current)</span>
                            @endif
                        </a>
                    </li>
                @endforeach
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @foreach($menu_items_right as $right)
                    <li class="{{ isset($menu_item_active) && $left['item'] == $menu_item_active ? 'active' : '' }}">
                        <a href="{{ $right['url'] }}"
                            class="{{ $right['class'] }}"
                            id="{{ $right['id'] }}"
                                {{ $right['blank'] ? 'target="_blank"' : '' }}
                                >{{ $right['title'] }}
                            @if(isset($menu_item_active) && $right['item'] == $menu_item_active)
                                <span class="sr-only">(current)</span>
                            @endif
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>