<div class="widget widget_tags">
   <h3>Post Tags.</h3>

   <div class="tagcloud group">
        @foreach ($tags as $item)
        <a href="#">{{$item->title}}</a>
        @endforeach
   </div>

</div>
