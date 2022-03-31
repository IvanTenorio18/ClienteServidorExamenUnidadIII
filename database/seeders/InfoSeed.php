<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use DB;
class InfoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('romainfos')->insert([

            'id' => 1,
            'nombre' =>'<h1>1. Palacio Barberini</h1>',
            'informacion' => '<h4>El Palacio Barberini, situado muy cerca de Plaza Barberini y una de las vías más importantes de la ciudad, Via del Tritone, es uno de los lugares turísticos de Roma que merece la pena visitar. Antigua residencia de la familia Barberini hace honor a uno de los linajes papales más famosos.</h4>
            <h4>El Palacio Barberini, además, ha pasado a ser sede de la Galleria Nazionale d’Arte Antica. Se ha convertido así en uno de los museos más prestigiosos y con mayor número de obras de arte de la Ciudad Eterna.</h4>
            <h4>El palacio es obra del arquitecto barroco Carlo Maderno. Sin embargo, trabajaron en él también Gian Lorenzo Bernini y Francesco Borromini. Allí podrás admirar, entre otras, obras de Tiziano, el Greco, Caravaggio, Rafael, Guido Reni. Déjate deslumbrar también por el gigantesco techo con el “Triunfo de la Divina Providencia” de Pietro da Cortona… Un oasis de tranquilidad en medio de una ciudad populosa.</h4>',
            'imagen' => '<img src="images/palaciobarberini.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('romainfos')->insert([

            'id' => 2,
            'nombre' =>'<h1>2. El Coliseo Romano</h1>',
            'informacion' => '<h4>El anfiteatro más famoso del mundo: el Coliseo de Roma. En su elipse encontramos el doble teatro de la vida. Por una parte, la arena de las luchas, el escenario en el que se representa la tragedia del combate por la supervivencia, mientras se juega la vida. Por otra parte, la grandiosa disposición de los espacios para contener una muchedumbre que gravita festivamente entorno al sol de la arena.</h4>
            <h4>Tan colosal edificio y sus significados fue quedándose enterrado entre laureles, entre sus bloques caídos. La ciudad despoblada ya no se congregaba en su recinto convertido en una isla en medio de campos.</h4>
            <h4>Ahora, cuando llegamos en avión a la ciudad y lo sobrevolamos nos sentimos privilegiados. Sabemos entonces lo que significa llegar a Roma. No es un gran museo que contenga cientos de obras maestras. Él sólo convierte en arte el aire y los espacios. Él sólo parece lo más grandioso de la ciudad aun estando en ruinas. Son restos que hablan de ausencias en un lenguaje tan fuerte y vivo que incluso parece vencer el paso del tiempo, los dolores y la caída en el olvido. Se alza para que entremos y contemplemos la historia de Roma como espectáculo que surge entre sus piedras.</h4>',
            'imagen' => '<img src="images/coliseoromano.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('romainfos')->insert([

            'id' => 3,
            'nombre' =>'<h1>3. Campo dei Fiori</h1>',
            'informacion' => '<h4>Una plaza entre las orillas del Tíber y Plaza Navona.  Lugar de encuentro para residentes de la ciudad y para los visitantes que se pierden por las callejuelas que la rodean. La particularidad de esta plaza reside en que todas las mañanas se organiza un mercadillo de fruta, uno de los más populosos y pintorescos de la ciudad de Roma.</h4>
            <h4>Un mercado que antes se celebraba en la plaza del Campidoglio, luego en Plaza Navona y que ahora se encuentra aquí. En un palacete cercano vivió Vannozza Cattanei, la amante de Alejandro VI y madre de César y Lucrecia. Es una plaza con tantos recuerdos de los Borgia en Roma.</h4>
            <h4>En el lugar donde estaba situado el patíbulo podemos ver un monumento que representa a este fraile dominico. Actualmente, la plaza de Campo dei Fiori se han convertido en un símbolo de la vida bohemia y lugar de marcha.
            Es una plaza que hace resaltar los aspectos de la vida sencilla que también os ofrece esta ciudad. Un patio escondido tras el Arco degli Acetari, un horno que hace una pizza buenísima o el antiguo bar en vicolo del Gallo. Todo ello forma el precioso contexto de vida cotidiana durante tu visita a Roma.</h4>',
            'imagen' => '<img src="images/campodeifiori.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('romainfos')->insert([

            'id' => 4,
            'nombre' =>'<h1>4. Basílica de San Pedro del Vaticano</h1>',
            'informacion' => '<h4>La basílica de San Pedro fue construida sobre la tumba del apóstol San Pedro. En la colina del Vaticano, en tiempos del Imperio Romano existía un cementerio en donde fue enterrado el apóstol.
            La antigua basílica de tiempos del emperador Constantino se mantuvo en pie hasta el siglo XV cuando iniciaron unos trabajos que no se concluirían hasta el s. XVII.</h4>
            <h4>Muchos artistas han hecho de este lugar uno de los más bellos y espectaculares de cuantos pueden disfrutarse en Roma. De hecho, nada más entrar en la basílica a tu derecha, recibirás el saludo de la hermosísima Piedad de Miguel Ángel.</h4>',
            'imagen' => '<img src="images/basilicasanpedro.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('romainfos')->insert([

            'id' => 5,
            'nombre' =>'<h1>5. Santa Maria in Trastevere</h1>',
            'informacion' => '<h4>Esta basílica se encuentra en pleno centro de uno de los barrios más turísticos de Roma. Santa  Maria  in  Trastevere  se  presenta  como  una  de  las  basílicas  más antiguas de Roma y la primera que fue dedicada a la Virgen María.</h4>
            <h4>El lugar de la fundación no es casual. Según la tradición, la iglesia se fundó en la “Taberna Meritoria”, un lugar en el que brotó una fuente oleosa en el año 38 a.  C. Más adelante, en el siglo III, Calixto I, el mismo papa que da nombre a las famosas Catacumbas de San Calixto, fundó un pequeño lugar de culto.</h4>
            <h4>La iglesia se abre a una de las plazas más grandes del barrio del Trastevere, llena de vida tanto de día como de noche. Lugar de encuentro para pasear, pasar el día o simplemente compartir una agradable velada.
            Lo mejor es sentarse en uno de los muchos bares o restaurantes que salpican sus calles y que ofrecen menús a precios muy variados.</h4>',
            'imagen' => '<img src="images/trastevere.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('romainfos')->insert([

            'id' => 6,
            'nombre' =>'<h1>6. Castillo de Sant’Angelo</h1>',
            'informacion' => '<h4>El Castillo de Sant’Angelo es uno de los mejores ejemplos de la conservación y reutilización de un edificio a lo largo de la historia.</h4>
            <h4>Fue construido en su orígen como mausoleo del emperador Adriano y su familia. Recibe su nombre actual en el año 590 cuando el papa Gregorio I observó en la cúspide del castillo al Arcángel San Miguel envainando su espada. En ese momento finalizó la peste que había azotado Roma.
            En el siglo XX el castillo pasó a manos del estado convirtiéndolo en el museo que actualmente podemos visitar.</h4>
            <h4>Desde la terraza del Castel Sant’Angelo podrás disfrutar de una estupenda vista de la ciudad. Un lugar especial por su historia, situación y belleza.</h4>',
            'imagen' => '<img src="images/castillosanangelo.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('romainfos')->insert([

            'id' => 7,
            'nombre' =>'<h1>7. Museos Capitolinos</h1>',
            'informacion' => '<h4>En la antigua colina del Capitolio se alza sobre la ciudad de Roma uno de los lugares turísticos de Roma con más historia. Se trata, además, de uno de los mejores museos del mundo construido sobre el lugar del antiguo templo de la tríade capitolina. Alberga obras de gran valor y, de hecho, fue el primer museo público conocido como tal e inaugurado en 1734  por el  Papa  Clemente  XIII.</h4>
            <h4>La primera donación que formará el núcleo inicial de los Museos Capitolinos fue realizada por Sixto IV. Este papa regaló en 1471 al pueblo romano algunas estatuas que estaban ubicadas en el palacio de Letrán: la Loba Capitolina, el Espinario, el Camilo, la estatua ecuestre de Marco Aurelio y varias partes de la escultura colosal de Constantino.
            Sin duda, es uno de los museos más especiales que posee Roma.</h4>
            <h4>De hecho, la plaza del Campidoglio (el antiguo Asilum) es en sí misma una obra de arte magnífica. Conciertos de música, la estrella abierta que cubre el suelo de la plaza, ideada por Miguel Ángel, las fachadas y escalinata de acceso la convierten en un lugar que sin duda tienes que visitar. Una experiencia única.</h4>',
            'imagen' => '<img src="images/museocapitolinos.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('romainfos')->insert([

            'id' => 8,
            'nombre' =>'<h1>8. La Academia de España y el Gianicolo</h1>',
            'informacion' => '<h4>El Gianicolo es sin duda uno de los lugares más especiales de la ciudad de Roma.
            La historia del lugar se remonta a tiempos míticos, evocadores del dios Jano. En este lugar a finales del s. XV se inicia la construcción de un complejo (San Pietro in Montorio) que será una de las ‘islas’ españolas más importantes de la ciudad.</h4>
            <h4>Aquí tiene su sede la Real Academia de España en Roma, con numerosas actividades culturales. Además de disfrutar de las vistas desde lo alto de la colina, su entorno está plagado de diversos atractivos.
            El Templete del Bramante os espera para una visita a lo mejor de la arquitectura del Renacimiento en Roma.</h4>',
            'imagen' => '<img src="images/academiadeespana.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('romainfos')->insert([

            'id' => 9,
            'nombre' =>'<h1>9. Galeria Borghese</h1>',
            'informacion' => '<h4>Construido en el interior de la Villa Borghese, este museo fue en su día el palacio de esta adinerada y poderosa familia sienesa. Un lugar de interés único por la riqueza de sus colecciones de arte.</h4>
            <h4>Visitar la Galería Borghese en tu próximo viaje a Roma puede ser un estupendo objetivo. Por su situación en el maravilloso parque. Con sus salas llenas de obras maestras. Gracias a la tranquilidad que se respira durante las visitas. Es un lugar perfecto para experimentar Roma.</h4>
            <h4>Ten en cuenta que para visitar la Galería Borghese debes reservar con antelación. Por otro lado planifica bien tu visita, ya que los lunes está cerrado.</h4>',
            'imagen' => '<img src="images/galeriaborghese.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('romainfos')->insert([

            'id' => 10,
            'nombre' =>'<h1>10. Santa Maria sopra Minerva</h1>',
            'informacion' => '<h4>La plaza de Minerva acoge esta antigua iglesia muy cerca del famoso Panteón. De estilo gótico, Santa María Sopra Minerva es una de las iglesias fuera de lo común en la ciudad de Roma tanto por su arquitectura como por las obras artísticas que conserva en su interior.</h4>
            <h4>La historia de la iglesia se remonta al siglo VIII. En este tiempo existía en el mismo lugar una pequeña capilla dedicada a la Virgen. Tras pasar por diversas órdenes religiosas, la capilla pasó a los dominicos en 1275, quienes iniciaron la construcción del complejo monástico.
            La iglesia se inició en 1280 y para su construcción sus arquitectos se inspiraron en la Basilica de Santa Maria Novella en Florencia.</h4>
            <h4>En su interior un techo estrellado recibe al visitante. La única luz proviene de los altos ventanales de miles de colores que se encuentran en la nave central. Aportan a la iglesia un aire místico muy distinto a las sensaciones producidas por el resto de las iglesias de Roma.</h4>',
            'imagen' => '<img src="images/santamaria.png" class="img-responsive" alt="">',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
