<!DOCTYPE html>
<meta charset="utf-8" />
<HTML>
    <head>
        <!--<link rel="stylesheet" href="Css/sitiobewhtml5.css">-->
        <title>Sitio web en HTML5</title>
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css"> <!--Bulma-->       
    </head>

    <body>
        
        <header>
            
            <div class="logo has-text-centered"><img class="logo" src="Imágenes/farofaro.png" width="200" ></div>
            <div class="has-text-centered"id="reloj" style="font-size: 15px; "></div>
            <script src="Javascript/reloj.js"></script>
             
        </header>

          <nav class="level">
            <p class="level-item has-text-centered">
              <a class="link is-info" href="#Inicio">INICIO</a>
            </p>
            <p class="level-item has-text-centered">
              <a class="link is-info" href="#Deportes">DEPORTES</a>
            </p>
            <p class=" title level-item has-text-centered">
              EL FARO
            </p>
            <p class="level-item has-text-centered">
              <a class="link is-info" href="#Negocios">NEGOCIOS</a>
            </p>
            <p class="level-item has-text-centered">
              <a class="link is-info" href="#Contacto">CONTACTO</a>
            </p>
          </nav>
        
    <main>
        

        <section class="section has-background-warning ">
            <div class="columns">
                <div class="column">
                    <a href="https://www.surfline.com/">
                    <img src="Imágenes/LOGOSURFLINE.png" width="100px"></a>    
                </div>
                <div class="column">
                    <a href="https://www.erizosstore.com/">
                    <img src="Imágenes/erizos.png" width="100px"></a>    
                </div>
                <div class="column">
                    <a href="https://www.aiep.cl/">
                    <img src="Imágenes/aiep.png" width="200px"></a>    
                </div>
                <div class="column">
                    <a href="https://www.heineken.com/cl/es/nuestros-productos">
                    <img src="https://www.heineken.com/media-la/01pfxdqq/heineken-original-bottle.png?anchor=center&mode=crop&width=432&height=648&quality=85 " width="100px"><br>
                    </a>
                </div>
            </div>
        </section>      
            
        <section Id="noticias" class="section">
            <h1 class="title has-text-warning">Novedades</h1>
            <div class="columns">
                <div class="column is-half-centered m-5 has-background-text-25">
                    <h2 class="subtitle">Cargar noticia</h2>
                    <form Id="form-adicionar" onclick="event">
                        <label>Título de la noticia:</label><br>
                        <input type="text" Id="titulo"><br>
                        <label>Categoría:</label><br>
                        <input type="text" Id="categoria"><br>
                        <label>Descripción de la noticia:</label><br>
                        <textarea type="text" Id="descripcion"></textarea><br>
                        <input Id="cargar-noticia" type="submit" value="Cargar noticia" />     
                    </form> 
                </div>
                <div class="column m-5 has-text-centered has-background-text-25">
                    <img src="https://campeonatochileno.cl/uploads/campeonato-itau/imagen/1705684413176_DWS_2024_1.svg" width="250px">
                    <a href="https://campeonatochileno.cl/estadisticas/campeonato-itau"> <p class="subtitle">Estadísticas del fútbol chileno</p></a>
                    <a href="https://campeonatochileno.cl/programacion/0/campeonato-itau"><p class="subtitle">Resultados y programación</p></a>
                </div>

                <div class="column m-5 has-background-text-25"><a href="https://elpais.com/chile/2024-04-19/el-comunismo-chileno-entre-la-calle-y-el-gobierno.html">
                    <p class="title">El comunismo chileno, entre la calle y el Gobierno</p>
                    El PC busca tener un pie en las instituciones y otro en la protesta social, 
                    intentando, de ese modo, rebasar las barreras que impone la democracia a los partidos políticos</a></div>

                <div class="column has-background-text-25"><a href="https://elpais.com/chile/2024-04-21/cristina-dorador-biologa-el-amor-conlleva-a-una-relacion-estable-microbiana.html">
                    <p class="subtitle">Cristina Dorador, bióloga: “El amor conlleva a una relación estable microbiana”</p>
                    <img src="https://imagenes.elpais.com/resizer/H3GpPoD1kdLfBDxYPwBfUZXuan8=/1200x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/HLOLQHY7CFAYDKQRNCOEOILOLI.png"></a>
                </div>
                <div class="column has-text-centered">
                    <a href="#otrostemas">
                    <p class="title">Otros temas</p>
                    <img src="https://www4.minijuegosgratis.com/v3/games/thumbnails/209606_1.jpg"></a>
                </div>
              </div>
        </section>

        <section Id="Inicio" class="section is-justify-content-center is-align-content-center">
            <h1 class="title has-text-warning has-text-centered">Inicio</h1>
                <div class="columns is-desktop has-text-centered">   

                    <div class="column is-three ">
                            <h4 class="subtitle has-text-white">Cambio de hora en Chile 2024: ¿se adelanta o atrasa el reloj?</h4>
                            <p>A principios de este mes de abril está pactada la primera
                            modificación de las dos que se esperan durante el año.</p> 
                            <p>Como un ajuste que aplicará para casi todo el territorio
                            nacional, la entrada al horario de invierno excluye a la región 
                            de Magallanes y la Antártica Chilena, donde aplica un solo 
                            huso oficial (GMT-3).</p>
                            <p>Mientras, también implicará que los amaneceres y atardeceres serán
                            más temprano de lo usual, de tal forma que de ahí en más algunos 
                            podrían despertar con la luz del sol.</p>
                            <p>El cambio de hora en el país, y por tanto el inicio del horario 
                            de invierno, será este sábado 6 de abril.
                            En dicha jornada cuando sean las 23:59 horas los chilenos y chilenas 
                            tendrán que atrasar el reloj en 60 minutos. De tal forma la nueva  
                            marca será las 22:59, concretando una hora más de descanso
                            para las personas.</p>
                            

                        <div class="columns is-4 is-desktop">

                            <div class="column m-5 has-background-text-25 has-text-centered">
                                <h4 class="subtitle has-text-white">Declaración de renta 2024</h4>
                                <iframe width="500" height="300" src="https://www.youtube.com/embed/TsEw5hLjR9Q" title="Cómo realizar mi declaracion de renta 2024 con liquidacion de sueldo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>  
                            </div>
                           
                            <div class="column m-5 has-background-text-25 has-text-centered">
                                <h4 class="subtitle has-text-white">Ley de Seguridad Privada: En qué consiste y cuál es el rol de los guardias</h4>
                                <a href="https://www.cooperativa.cl/noticias/pais/seguridad-ciudadana/ley-de-seguridad-privada-en-que-consiste-y-cual-es-el-rol-de-los/2024-04-01/194122.html">AUDIO DESTACADO</a><br /> 
                                <img src="Imágenes\seguridad.jpg" width="500">
                                <p>Fuente: Cooperativa</p>
                            </div>   
                        </div>
                    </div> 
                </div>          
        </section>
        
        <section Id="Deportes" class="section">
            <h1 class="title has-text-warning has-text-centered">Deportes</h1>
                <div class="columns has-text-centered"> 

                    <div class="column is-three">
                            <h4 class="subtitle has-text-white">Universidad de Chile enfrenta a Cobreloa</h4>
                            <p>Este domingo el Romántico Viajero tendrá un exigente
                            desafío al visitar a Cobreloa por la sexta fecha del 
                            Campeonato Nacional, un compromiso que esta jornada  
                            fue adelantado por nuestro técnico Gustavo Álvarez en
                            conferencia de prensa.</p>   
                            <p>Sobre la dificultad física de jugar en Calama, el 
                            estratega se mostró confiado en la condición física
                            del equipo:"Hemos tenido tres semanas seguidas de seis
                            días que fueron las tres primeras fechas, así que 
                            estamos acostumbrados y llegaremos muy bien para el
                            partido en la altura. A la altura hay que respetarla no temerle".</p>
                             <iframe width="560" height="315" src="https://www.youtube.com/embed/Ik9FwiOS02I" title="[EN VIVO] Conferencia Gustavo Álvarez - Previa Partido Cobreloa" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>  
                            </br>

                        <div class="columns is-4 is-desktop">
  
                            <div class="column m-5 has-background-text-25 has-text-centered">
                                <h4 class="subtitle has-text-white">Antofagasta Bodyboard Festival 2024</h4>
                                 <p>El Antofagasta Bodyboard Festival nació hace 12 años como 
                                 una herramienta para apoyar a niños, niñas y jóvenes 
                                 vulnerables de la Región de Antofagasta, entregándoles una
                                 oportunidad de crecimiento ajena a sus realidades sociales.
                                 Asimismo, con el avanzar de sus versiones, el evento ha ido
                                 considerando diversas actividades en favor de la región, 
                                 como una feria de emprendimientos, talleres sobre medio 
                                 ambiente, limpiezas del borde costero, entre otras, buscando
                                 así ser un evento de contribución no solo deportiva, sino también social.</p>
                                 <img src="Imágenes\body.jpg" width="500">
                                 <p>Por ello se espera que esta 12° versión no sea diferente,
                                 y contempla bandas locales en vivo para cada fecha, con una
                                 clasificatoria para el evento final, emprendedores locales, 
                                 talleres deportivos y la asistencia total de más de 20.000 
                                 personas que disfrutarán de este deporte.</p>
                                 <p>Para la versión 2024, el ABF considera una vez más importantes
                                 premios para los y las ganadoras de cada categoría, con wild
                                 cards y free pass para el Campeonato Mundial ABF 2024, pasajes
                                 internacionales para asistir a otras fechas del tour, 
                                 inscripciones a eventos internacionales, dinero en efectivo, 
                                 implementos deportivos, entre otros.</p>
                            </div>

                            <div class="column m-5 has-background-text-25 has-text-centered">
                                <h4 class="subtitle has-text-white">¿Copa América? Cuándo son los próximos partidos de la selección chilena</h4>
                                <img srcset="https://ds-images.bolavip.com/news/image?src=https%3A%2F%2Fimages.redgol.cl%2Fwebp%2Ffull%2FRDG_20240326_RDG_342663_chile-proximo-desafio-copa-america-scaled-e1711469329285.webp&amp;width=490&amp;height=275 490w, https://ds-images.bolavip.com/news/image?src=https%3A%2F%2Fimages.redgol.cl%2Fwebp%2Ffull%2FRDG_20240326_RDG_342663_chile-proximo-desafio-copa-america-scaled-e1711469329285.webp&amp;width=400&amp;height=200 740w"
                                    width="500px" alt="Chile tendrá un 2024 muy intenso." class="jsx-1473758275 article-picture__img-container__image">
                                <p>La siguiente fecha FIFA es en el mes de junio de este 2024,
                                para la disputa de la Copa América. Es de esperar que en la previa
                                del torneo La Roja dispute algún partido amistoso para llegar
                                mejor preparado a la competición. Además de los posibles duelos
                                de exhibición, estos son los encuentros ya pactados de Chile:</p>
                                <p>Copa América de Estados Unidos</p>
                                <p>21 de junio: Chile vs Perú – 20:00 horas<br/>
                                25 de junio: Chile vs Argentina – 21:00 horas<br/>
                                29 de junio: Chile vs Canadá – 20:00 horas</p>
                            </div>    
                         </div>
                    </div> 
                </div>                   
        </section>  

        <section Id="Negocios" class="section">
            <h1 class="title has-text-warning has-text-centered">Negocios</h1>
                <div class="columns has-text-centered"> 
                    <div class="column is-three">                     
                            <h4 class="subtitle has-text-white">Bolsa de Santiago cierra un brillante primer trimestre</h4>
                            <img src="Imágenes\bolsa.jpg" width="450">
                            <p>Por tercera sesión consecutiva, el IPSA -principal indicador 
                            de la Bolsa de Comercio de Santiago- cerró en un máximo histórico; 
                            pero el de este viernes tuvo un condimento adicional, al superar 
                            por primera vez los 6.600 puntos. Lo que coincidió con el cierre 
                            del primer trimestre de 2024, dándole aún más luz al brillante 
                            arranque bursátil del año en el país.</p>
                            <p>Para Jorge Tolosa, operador de renta variable de Vector Capital, 
                            el buen rendimiento de la bolsa local en los últimos días se 
                            explica, en buena medida, por las mejores perspectivas económicas  
                            que hay para Chile. "Esa es un poco la razón del alza que hubo en 
                            los últimos días", sostuvo. También comentó que, pensando en el  
                            segundo trimestre, el IPSA podría llegar a tocar los 7.000 puntos,  
                            "sobre todo por el hecho de que vamos a tener un segundo trimestre  
                            probablemente muy activo en términos de recorte de tasa a nivel local".
                            Pero lo de la bolsa chilena no es solo cosa de los últimos días,
                            pues los primeros meses de 2024 han sido de bonanza para las acciones  
                            locales. De esto es, precisamente, de lo que han dado cuenta diversos  
                            informes internacionales, que apuestan por la Bolsa de Santiago. 
                            "Los astros se están alineando" a favor de las acciones chilenas, 
                            indicó hace algunas semanas, BCA Research en un informe. 
                            A dicha entidad se suman, en su recomendación de las acciones chilenas, 
                            JP Morgan y Bice Inversiones. Los argumentos que plantean son
                            principalmente tres: acciones "baratas", un ambiente macroeconómico
                            favorable (con recuperación del crecimiento y bajas de tasas
                            del Banco Central) y un riesgo político que ya no es tal, tras el
                            término de los dos procesos constitucionales.</p>
                       
                        <div class="columns is-4 is-desktop">

                            <div class="column m-5 has-background-text-25 has-text-centered"> 
                                <h4 class="subtitle has-text-white">El desempleo en Chile llega al 8,5%</h4>
                                <p>El desempleo en Chile no afloja y sigue con su tendencia al alza,
                                la que se ha consolidado con un decimosexto incremento anual
                                consecutivo. El Instituto Nacional de Estadísticas (INE) ha informado
                                este jueves que la tasa de desocupación nacional que corresponde al 
                                trimestre diciembre de 2023 -febrero de 2024 ha alcanzado un 8,5%.
                                La cifra significó una subida del 0,1 puntos porcentuales en doce meses.
                                El reporte del organismo estadístico chileno ha explicado que el
                                incremento en la desocupación se debe a que el alza de la fuerza de 
                                trabajo —que está definida como las personas en edad de trabajar que 
                                tienen la capacidad de ser ocupados o desocupados— alcanzaron un 3,2%,
                                un número superior al presentado por las personas ocupadas, que 
                                marcaron un 3,1%. Esta variación se mantenido en los últimos informes, 
                                en donde también se ha observado una presión de la fuerza de trabajo
                                por sobre la capacidad de ocupación del mercado laboral.</p>
                                <p>Las personas desocupadas aumentaron a un 4,9%, cifra que fue 
                                incidida por el 4,5% de personas cesantes y del 8,5% de quienes 
                                buscan empleo por primera vez. Respecto al mismo periodo del año
                                anterior, las tasas de participación y de ocupación se situaron 
                                en 62,3% y 57,0%, creciendo 1,4 puntos y 1,2 puntos respectivamente. 
                                Por otro lado, la población fuera de la fuerza de trabajo disminuyó 2,7%.</p>
                                <p>En las mujeres, la tasa de desocupación se situó en 9,0%, sin  
                                presentar variación en doce meses, producto del aumento en igual  
                                proporción de la fuerza de trabajo y las ocupadas (4,2%). En los hombres,
                                la desocupación fue de 8,1%, con un alza de 0,2 puntos. en doce meses,
                                a raíz del incremento de 2,5% de la fuerza de trabajo, mayor al 2,3%  
                                registrado por los ocupados, al mismo tiempo, los desocupados aumentaron 5,5%.</p>
                                <img src="Imágenes\desempleo.jpg" width="500">
                            </div>

                            <div class="column m-5 has-background-text-25 has-text-centered">
                                <h4 class="subtitle has-text-white">La consolidación del emprendimiento en Chile</h4>
                                <p>Negocios</p>
                                <img src="Imágenes\emprende.jpg" width="500">
                                <p>El emprendimiento en Chile siempre ha jugado un papel  
                                importante en el tejido empresarial, y cada día se consolida más.
                                Un estudio del Global Entrepreneurship Monitor 2019 señala que, en 
                                ese año, en el país había un 37% de población emprendedora en  
                                etapa inicial (menos de 42 meses), mientras que un 58% de los no  
                                emprendedores habían manifestado su intención de intentarlo en  
                                los tres años siguientes.En línea con lo anterior, un reciente  
                                estudio de Ipsos evidenció que Chile es el país que más posee  
                                “espíritu emprendedor”, ubicándolo en el sexto lugar entre 28 naciones 
                                con el porcentaje más alto de ciudadanos enfocados en crear empresas.</p>
                                <p>En lo que a emprendimiento Chile respecta, 46% de los habitantes
                                del país realizó un emprendimiento en pandemia, y un 37% lo ha considerado.</p>
                                <p>La mujer irrumpe con fuerza en el emprendimiento en Chile 
                                El estudio de Ipsos señala que, a nivel mundial, el espíritu   
                                emprendedor entre las mujeres creció un 4% entre 2018 y diciembre 
                                de 2020. Tendencia a la que el país no es ajeno y ya venía
                                evidenciándose desde años atrás.</p>
                                <p>En 2019, por ejemplo, la Radiografía del Emprendimiento 
                                en Chile -de la Asociación de Emprendedores de Chile (ASECH) 
                                mostró que la presencia de las mujeres en este ámbito llegó 
                                a un 34,3%, 2 puntos porcentuales más arriba que la cifra  
                                reportada por la encuesta en 2018.</p>
                                <p>Por supuesto, emprender es un reto. Todos los estudios citados  
                                líneas atrás coinciden en que el financiamiento ha sido una de las 
                                principales barreras que afronta el emprendimiento Chile. Aunque 
                                también se citan otras variables, como la economía o las carencias 
                                en cuanto a conocimiento, entre otras razones.</p>
                           
                            </div>
                        </div>
                    </div>
                </div>         
        </section> 
        

        <section class="section" Id="otrostemas">
            <h1 class="title has-text-warning has-text-centered">Otros temas</h1>
                <div class="Columns">
                   <div class="column">
                        <p class="title">VIDEOJUEGOS GRATIS</p>
                        <a href="https://www.minijuegos.com/videojuegos">
                        <img src="https://www4.minijuegosgratis.com/v3/games/thumbnails/209606_1.jpg"><br> Pulsa aquí</a>
                   </div>
                
                    <div class="column">
                        <form action="Controlador.php" method="POST">
                            <p class="title">Registrate</p>
                            Nombre : <br><input type="text" name="nombreregistro" autofocus required>
                            <br>
                            Apellido: <br><input type="text" name="apellidoregistro" autofocus required>
                            <br>
                            Correo electrónico: <br><input type="email" name="correoregistro" autofocus required>
                            <br>
                            Contraseña: <br> <input type="password" name="claveregistro" autofocus requerid>
                            <br>
                            Confirmar contraseña: <br> <input type="password" name="confirmaciondeclave" autofocus required>
                            <br>
                            <br>
                            <input type="submit" value="Registrarse">
                        </form>
                    </div>
                </div>
        </section>

    </main>

    <script src="Javascript/js.js"></script>
    
    <footer class="footer">
    <section Id="Contacto" class="section">
            <div>
                <h2 class="subtitle">Contacto</h2>
                <form action="Controlador.php" method="POST">
                    Nombre: <br><input type="text" name="nombre" autofocus required>
                    <br>
                    Correo electrónico: <br><input type="email" name="correoelectronico"> 
                    <br>
                    Asunto: <br><input type="text" name="asunto">
                    <br>
                    Mensaje: <br><textarea type="text" name="mensaje"></textarea>
                    <br>
                    <input type="submit" value="Enviar">        
                </form>  
            </div> 
        </section>
        <div class="div">
          <p class="content has-text-centered">
            <strong >Sitio web "El Faro", Taller de aplicaciones para internet, 2024.</strong></br>
            Carlos Rojas Rodríguez
          </p>
        </div>
      </footer>
  
    </body>
    </HTML>