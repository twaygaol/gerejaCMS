<div id="pastors" class="fullwidth-block" data-bg-color="#4a3173">
					<div class="container">
						<h2 class="section-title">Pelayan Gereja</h2>
						<p class="section-intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dolorum accusantium in. Consequatur, optio. Dolore debitis velit corporis. Nostrum, facilis magni recusandae quaerat doloremque perferendis nulla ducimus ad labore cumque.</p>

						<div class="row">
						@foreach ($pengurus as $p)
							<div class="col-md-2 col-sm-3 col-xs-6">
								<div class="pastor">
									<img src="{{ asset('storage/' . $p->gambar) }}" alt="{{ $p->nama }}" class="pastor-image">
									<h3 class="pastor-name">{{ $p->nama }}</h3>
									<small class="date">{{ $p->jabatan }}</small>
								</div>
							</div>
							@endforeach
						</div> <!-- .row -->

						<!-- <div class="text-center">
							<a href="#" class="button">View all our pastors</a>
						</div> -->
					</div> <!-- .container -->
				</div> <!-- #pastors -->