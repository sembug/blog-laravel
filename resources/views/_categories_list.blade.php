<div class="widget widget_categories group">
    <h3>Categories.</h3>
    <ul>
        @foreach ($categories as $item)
            <li><a href="#" title="">{{ $item->title }}</a> ({{ count($item->posts()) }})</li>
        @endforeach
    </ul>
</div>
