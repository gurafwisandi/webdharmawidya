@if ($content != null)
    <h2 class="entry-heading">{{ $content->title }}</h2>
    <p class="entry-desc">
        {!! $content->description !!}
    </p>
@else
    <h2 class="entry-heading">Tidak ada data</h2>
@endif
