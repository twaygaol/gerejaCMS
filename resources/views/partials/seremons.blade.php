<div id="seremons" class="fullwidth-block" data-bg-color="#4a3173">
					<div class="container">
						<div class="row">
						<div class="col-md-5">
							<h3 class="section-title">Jadwal Ibadah</h3>
							<ul class="seremon-list">
								@foreach ($jadwalIbadah as $jadwal)
									<li>
										<h3 class="seremon-title">
											<a href="#">{{ $jadwal->jenis_ibadah }}</a>
										</h3>
										<p>{{ $jadwal->tempat }}</p>
										<div class="seremon-meta">
											<span><i class="fa fa-calendar"></i> <strong>Date:</strong> {{ $jadwal->hari }} - {{ $jadwal->waktu_mulai->format('H:i') }} s/d {{ $jadwal->waktu_selesai->format('H:i') }}</span>
											<span><i class="fa fa-rute"></i> <strong>Tempat:</strong> {{ $jadwal->tempat }}</span>
										</div>
									</li>
								@endforeach
							</ul>
						</div>

							<div class="col-md-5 col-md-offset-2">
								<h3 class="section-title">Jadwal Pelayanan</h3>
								<ul class="seremon-list">
								@foreach ($jadwalPelayanan as $pelayanan)
									<li>
										<h3 class="seremon-title"><a href="#">{{ $pelayanan->namaPelayanan }}</a></h3>
										<div class="seremon-meta">
											<span><i class="fa fa-calendar"></i> <strong>Date:</strong> {{ $pelayanan->jdwlMulai->format('d/m/Y') }}</span>
											<span><i class="fa fa-user"></i> <strong>Pelayan:</strong> {{ $pelayanan->pengurus->nama }}</span>
										</div>
										<a href="#" class="button secondary"><img src="images/icon-headset.png" alt="" class="icon"> Audio record</a>
										<a href="#" class="button secondary"><img src="images/icon-film.png" alt=""> Video record</a>
									</li>
								@endforeach
								</ul>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- #seremons -->