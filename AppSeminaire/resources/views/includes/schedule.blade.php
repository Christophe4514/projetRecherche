    <!-- ======= Schedule Section ======= -->
    <section id="schedule" class="section-with-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Calendrier</h2>
                <p>ici nous vous présentons l'agenda de notre Evenement</p>
            </div>

            <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
                <li class="nav-item">
                    <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab">Jour de
                        l'évenement:</a>
                </li>
                {{-- <li class="nav-item">
              <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab">Day 2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#day-3" role="tab" data-bs-toggle="tab">Day 3</a>
            </li> --}}
            </ul>

            {{-- <h3 class="sub-heading">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius
                necessitatibus voluptatem quis labore perspiciatis quia.</h3> --}}

            <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

                <!-- Schdule Day 1 -->
                <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

                    @foreach ($interventions as $item)
                        <div class="row schedule-item">
                            <div class="col-md-2"><time>{{ $item->heure_debut_intervention }} à
                                    {{ $item->heure_fin_intervention }}</time></div>
                            <div class="col-md-10">
                                {{-- <div class="speaker">
                                    <img src="{{ asset('front-end/img/speakers/1.jpg') }}" alt="Brenden Legros">
                                </div> --}}
                                <h4>Theme {{$item->num_intervation}}: <span>{{ $item->theme->sujet }}</span></h4>
                                <p>{{ $item->seminaire->nom }}.</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>

    </section><!-- End Schedule Section -->
