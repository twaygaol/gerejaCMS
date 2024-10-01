<div id="families" class="fullwidth-block">
					<div class="container">
						<h2 class="section-title">Galeri</h2>
						<p class="section-intro">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco.</p>

						<div class="family-list">
						@foreach ($galeri as $p)
							<figure class="family">
								<img src="{{ asset('storage/' . $p->gambar) }}" alt="{{ $p->nama }}" class="pastor-image">
								<figcaption>
									<h3 class="family-name">{{$p->deskripsi}}</h3>
									<span class="arrow"></span>
								</figcaption>
							</figure>
						@endforeach
						</div>

						<hr class="space">
						<div class="text-center">
							<a href="#" class="button">View all Galeri</a>
						</div>
					</div> <!-- .container -->
				</div> <!-- #families -->