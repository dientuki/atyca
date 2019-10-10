@extends('layouts.ads-site')

@section ('content')

<article class="entry ">
  <h1 class="entry-title">Salidas Grupales</h1>
  <div class="entry-content">
    <p>
      Las Salidas Grupales ofrecen la posibilidad de viajar en grupo con un coordinador permanente, con personas con las que compartirás el mismo interés, en una fecha definida y con un circuito a recorrer. Siempre es una excelente opción para personas que viajan solas o que no encuentran acompañante, como para todos aquellos que deseen compartir gastos y abaratar costos. Además, permite la posibilidad de conocer gente y entablar nuevas amistades, ya que el viaje se desarrolla en un marco de continua contención y apoyo, en el que solo debes disfrutar del mismo sin preocuparte por absolutamente nada.
    </p>

    <section class="tariff clearfix" id="salidas-cards">

<!--


<a class="card" target="_blank" href="https://docs.google.com/document/d/1gzFnbRP_OxFsyg-_AK_wK_Mxo5GAVZgvj_a9kA7uB-g/edit?usp=sharing" title="Puerto Iguazú">
<div class="tariff-box paq1" style="">

  <div class="tit" >CUBA TOTAL</div>
    <div class="img" ></div>
    <div class="det" >La Habana - Trinidad - Camaguey - Santiago de Cuba - Cayo S. María<br><span class="bold">14 Días, 13 Noches</span></div>
    <div class="date" >13 de Marzo de 2018</div>



</div></a>





<a class="card" target="_blank" href="https://docs.google.com/document/d/1UnLWnvkxCsvRKdbQsTqWoEnIIGTlSDBD_9A_aMtU5cI/edit?usp=sharing" title="Puerto Iguazú">
<div class="tariff-box paq2" style="">

  <div class="tit" >GUATEMALA</div>
    <div class="img" ></div>
    <div class="det" >Guatemala - Panajachel - Flores - Antigua Guatemala<br><span class="bold">9 Días, 8 Noches</span></div>
    <div class="date" >23 de Abril de 2018</div>



</div></a>

<a class="card" target="_blank" href="https://docs.google.com/document/d/1YVnkg7XIB1latgnjVxFz76lA-QxtquD53kklX_GG7bY/edit?usp=sharing" title="Experiencia Inca">
<div class="tariff-box paq4" style="">

  <div class="tit" >NORTE, PUNA Y SALARES</div>
    <div class="img" ></div>
    <div class="det" >Tucumán – Cafayate – Salta – Purmamarca – Salares<br><span class="bold">8 días, 8 noches</span></div>
    <div class="date" >19 de mayo de 2018</div>

</div></a>


<a class="card" target="_blank" href="https://docs.google.com/document/d/1-CbwCeelfUyebi9BKTh0OYn3A_Mo01fc3mgVs6LfiIg/edit?usp=sharing" title="Puerto Iguazú">
  <div class="tariff-box paq3" style="">

    <div class="tit" >PUERTO IGUAZÚ</div>
    <div class="img" ></div>
    <div class="det" >Cataratas Argentinas - Cataratas Brasileras<br><span class="bold">5 días, 4 noches</span></div>
    <div class="date" >20 de junio de 2018</div>



  </div></a>

  <a class="card" target="_blank" href="https://docs.google.com/document/d/1yiiVNgwH_gCYjQGKNYOQLntFHEpWSkevK6vN0Dph1bU/edit?usp=sharing" title="Puerto Iguazú">
    <div class="tariff-box paq5" style="">

      <div class="tit" >ECUADOR</div>
      <div class="img" ></div>
      <div class="det" >Quito - Mitad del Mundo - Cuenca - Ingapirca - Guayaquil y mas<br><span class="bold">8 días, 7 noches</span></div>
      <div class="date" >20 de Julio de 2018</div>

    </div></a>


    <a class="card" target="_blank" href="https://docs.google.com/document/d/1EHAPASoM__hvhZTom02jieTMUrPI_UwvhK5KNRa_nVk/edit?usp=sharing" title="Experiencia Inca">
      <div class="tariff-box paq6" style="">

        <div class="tit" >Experiencia Inca</div>
        <div class="img" ></div>
        <div class="det" >Lima - Valle Sagrado - Machu Picchu - Cusco<br><span class="bold"> 8 días, 7 noches</span></div>
        <div class="date" >2 de septiembre de 2018</div>



      </div></a>

-->   <!--

      <a class="card" target="_blank" href="https://docs.google.com/document/d/1bxpCpTWSXv6FpuGo5009_BnQOCNI4ML19dzOSAIE12g/view?usp=sharing" title="Calafate y Ushuaia">
        <div class="tariff-box paq8" style="">

          <div class="tit" >USHUAIA y CALAFATE</div>
          <div class="img" ></div>
          <div class="det" >Ushuaia - El Calafate<br><br><span class="bold">8 días, 7 noches</span></div>
          <div class="date" style="color: red;" >CUPO COMPLETO</div>



        </div></a>

        <a class="card" target="_blank" href="https://docs.google.com/document/d/1LgClQkJ-bE_EiBgWKE1GxHeBtF26ZQTWU4gFNYVm--M/view?usp=sharing" title="Puerto Iguazú">
          <div class="tariff-box paq3" style="">

            <div class="tit" >PUERTO IGUAZÚ</div>
            <div class="img" ></div>
            <div class="det"  >Cataratas Argentinas - Cataratas Brasileras<br><span class="bold">5 días, 4 noches</span></div>
            <div class="date" style="color: red;" >CUPO COMPLETO</div>



          </div></a>

       <a class="card" target="_blank" href="https://docs.google.com/document/d/10-ATPrB2_12Z1CrICU0xNxcPc9zbh1ELdHYWx-BZ8_k/edit?usp=sharing" title="Uruguay">
            <div class="tariff-box paq10" style="">

              <div class="tit" >URUGUAY

              </div>
              <div class="img" ></div>
              <div class="det" >Colonia del sacramento, Montevideo, Punta del este<br><span class="bold">4 días, 3 noches</span></div>
              <div class="date" >22 de Noviembre de 2018</div>



            </div></a>





   <a class="card" target="_blank" href="https://docs.google.com/document/d/1911YkSQ7ML0ne0YCxnYHtS6H9Fq3olLbIf8ZKxnYVww/view?usp=sharing" title="Festival de Cine en Cuba">
<div class="tariff-box paq7" style="">

  <div class="tit" >Festival de Cine en Cuba</div>
    <div class="img" ></div>
    <div class="det" >La Habana - Cayo Santa Maria<br><br><span class="bold">14 días, 13 noches</span></div>
            <div class="date" style="color: red;" >CUPO COMPLETO</div>



</div></a>
 -->


   <a class="card" target="_blank" href="#" title="Navegá la cordillera">
<div class="tariff-box paq10" style="">

  <div class="tit" >Navegá la cordillera</div>
    <div class="img" ></div>
    <div class="det" >Bariloche, Peulla, Puerto Varas<br><br><span class="bold">8 días, 7 noches</span></div>
        <div class="date"  >FINALIZADO</div>



</div></a>

   <a class="card"  href="https://docs.google.com/document/d/1_B8asAXVANQFYOVw-eUOP0fl5IY1MBY0nBPHwmESWSI/view?usp=sharing" title="Norte con Iruya">
<div class="tariff-box paq1" style="">

  <div class="tit" >Norte con Iruya</div>
    <div class="img" ></div>
    <div class="det" >Salta, Purmamarca, Iruya.<br><br><span class="bold">8 días, 7 noches</span></div>
    <div class="date" >20 de julio de 2019 - Vac. de invierno</div>



</div></a>


<a class="card"  href="https://docs.google.com/document/d/1IS4WB7qzN9vqBHB7HpVoPKTX7dsrW70SgiTcIwZAglw/edit?usp=sharing" title="Puerto Iguazú">
  <div class="tariff-box paq3" style="">

    <div class="tit" >CATARATAS DEL IGUAZÚ</div>
    <div class="img" ></div>
    <div class="det" >Cat. Argentinas - Cat. Brasileras<br><br><span class="bold">5 días, 4 noches</span></div>
    <div class="date"  >28 de julio 2019 – Vac. de invierno.</div>



  </div></a>


<a class="card"  href="https://docs.google.com/document/d/1dweEcskTkPdZd6eRyoTyO5MWupdtkR3678DpbMXVGrk/edit?usp=sharing_eip&ts=5cdb003e" title="Puerto Iguazú">
  <div class="tariff-box paq3" style="">

    <div class="tit" >CATARATAS DEL IGUAZÚ</div>
    <div class="img" ></div>
    <div class="det" >Cat. Argentinas - Cat. Brasileras<br><br><br></div>
    <div class="date" style="line-height: 18px;">28 de julio 2019 – Vac. de invierno<br>11 de octubre 2019 – Feriado</div>



  </div></a>

  <a class="card" target="_blank" href="https://docs.google.com/document/d/1tp_6xcTo8eiuSWTS7r5g1uqbxUqzj7dGzn0i1sT_cC4/edit?ts=5cdb0866" title="Calafate y Ushuaia">
        <div class="tariff-box paq8" style="">

          <div class="tit" >USHUAIA y CALAFATE</div>
          <div class="img" ></div>
          <div class="det" >Ushuaia - El Calafate<br><br><span class="bold">8 días, 7 noches</span></div>
          <div class="date">25 de enero 2020 - Verano</div>




        </div></a>




</div></a>

<!--
    <a class="card" target="_blank" href="https://docs.google.com/document/d/1GW8Vy3oCx5DvCvscZobSAre9nId7BC9jQCnBX4J9ABU/edit?usp=sharing" title="Mexico">
<div class="tariff-box paq9" style="">

  <div class="tit" >MEXICO ARQUEOLOGICO
</div>
    <div class="img" ></div>
    <div class="det" >México DF - Taxco - Oaxaca - San Cristóbal de las Casas - Palenque - Campeche - Mérida - Riviera Maya<br><span class="bold">15 días, 14 noches</span></div>
    <div class="date" >4 de Noviembre de 2018</div>



</div></a>
-->




</section>

</div>
</article>


@endsection
