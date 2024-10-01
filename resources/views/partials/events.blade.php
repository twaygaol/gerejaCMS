<!-- Main Content -->
<div id="events" class="fullwidth-block">
    <div class="container">
        <h2 class="section-title">Our Articles</h2>
        <div class="text-center">
            <a href="#" class="prev-events"><img src="images/arrow-left.png" alt="Previous"></a>
            <a href="#" class="next-events"><img src="images/arrow-right.png" alt="Next"></a>
        </div>
        <div class="row">
            @foreach ($artikel as $p)
            <div class="col-md-3 col-sm-6">
                <div class="event">
                    <img src="{{ asset('storage/' . $p->gambar) }}" alt="{{ $p->nama }}" class="event-image">
                    <h3 class="event-title"><a href="{{ route('artikel.show', $p->id) }}">{{ $p->judul_artikel }}</a></h3>
                    <div class="event-meta">
                        <span class="date"><i class="fa fa-calendar"></i>{{ $p->tgl_artikel->format('d/m/Y') }}</span>
                        <span class="location"><i class="fa fa-user"></i>Pengurus Gereja</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div> <!-- .row -->
    </div> <!-- .container -->
</div> <!-- #events -->
