<!-- ======= Speakers Section ======= -->
<section id="speakers">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Orateurs </h2>
        <p>Nous vous présentons nos Orateurs de l'évenement</p>
      </div>

      <div class="row">
        @foreach ($orateurs as $item)
        <div class="col-lg-4 col-md-6">
          <div class="speaker" data-aos="fade-up" data-aos-delay="100">
            <img src="storage/orateur_images/{{ $item->photo }}" alt="Speaker 1" class="img-fluid">
            <div class="details">
              <p class="text-primary">{{$item->nom}} {{$item->postnom}} {{$item->prenom}}</p>
              <p>{{$item->grade}}</p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

  </section><!-- End Speakers Section -->