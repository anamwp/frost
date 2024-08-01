<article @php(post_class( 'bg-slate-200 p-8 rounded-md hover:bg-slate-300' ))>
  <header>
    <h2 class="entry-title text-xl mb-3">
      <a href="{{ get_permalink() }}" class="no-underline">
        {!! $title !!}
      </a>
    </h2>

    @include('partials.entry-meta')
  </header>

  <div class="entry-summary mt-2 line-clamp-3">
    @php(the_excerpt())
  </div>
</article>
