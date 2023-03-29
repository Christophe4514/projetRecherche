    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6">
            <h2>About The Event</h2>
            <p>Séminaire organisé par la Faculté de Sciences et Technologies de l'Université de Kinshasa. <br>
            Modérateur : <em style="font-size: 2rem">{{$seminaire->moderateur->grade}}</em> <strong class="text-success" style="font-size: 2rem">{{$seminaire->moderateur->nom}}</strong></p>
          </div>
          <div class="col-lg-3">
            <h3>Lieu</h3>
            <p>{{$seminaire->lieu}},Unikin/fac sce</p>
          </div>
          <div class="col-lg-3">
            <h3>Quand </h3>
            <p>{{ $seminaire->jour}}, {{$seminaire->num_jour}}/{{$seminaire->mois}}/{{$seminaire->annee}}<br> de {{$seminaire->heure_debut}}-{{$seminaire->heure_fin}}</p>
          </div>
        </div>
      </div>
    </section>
   <!-- End About Section -->