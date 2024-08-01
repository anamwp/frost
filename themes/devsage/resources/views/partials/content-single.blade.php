<article @php(post_class('h-entry w-3/5 mx-auto py-10'))>
  <header class="mb-5">
    <h1 class="p-name text-2xl font-bold font-roboto">
      {!! $title !!}
    </h1>

    @include('partials.entry-meta')
  </header>

  <div class="e-content mb-5">
    @php(the_content())
  </div>

  @if ($pagination)
    <footer class="mt-5">
      <nav class="page-nav" aria-label="Page">
        {!! $pagination !!}
      </nav>
    </footer>
  @endif

  @php(comments_template())
</article>
