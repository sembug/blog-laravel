<div id="sidebar" class="four columns">

    <div class="widget widget_search">
      <h3>Search</h3>
      <form action="#">

         <input type="text" value="Search here..." onblur="if(this.value == '') { this.value = 'Search here...'; }" onfocus="if (this.value == 'Search here...') { this.value = ''; }" class="text-search">
         <input type="submit" value="" class="submit-search">

      </form>
   </div>
    @include('_categories_list')

    @include('_tags_list')

</div> <!-- end sidebar -->
