<?php 
  /**
  *@params path to images on the server
  */
  function getCarousselImages($dir) {
        $images = array();
        $dh = opendir($dir);
        if (is_dir($dir)) {
            while ($file = readdir($dh)) {
                if ($file != "." AND $file != "..") {
                    $images[] = "$dir/$file";
                }
            }
            closedir($dh);
        }
        return $images;
    }
   
   
// Create a template for the carousel view
    function getCarousel() {
        $images = getCarousselImages("images/carousel_images");
        $result = '<div class="col-md-6" id="carousel">';
        $result .= '<div class="row">';
        $result .= '<section>';
        $result .= '<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">';
        
        //<!-- Indicators -->
        $result .= '<ol class="carousel-indicators">';
        for ($x = 0; $x < sizeof($images); $x++) {
            if($x == 0){
              $result .= '<li data-target="#carousel-example-generic" data-slide-to="'.$x.'" class="active"></li>';
            }else{
              $result .= '<li data-target="#carousel-example-generic" data-slide-to="'.$x.'"></li>';  
            }
        }
        $result .= '</ol>';
        
        //<!-- Wrapper for slides -->
        $result .= '<div class="carousel-inner" role="listbox">';
        $result .=     '<div class="item active">';
        $result .=           '<img src="'.$images[0].'" alt="..." height="500px" width="750px">';
        $result .='          <div class="carousel-caption">
                                 <p id="active-slide-text">
                                   Днипропетровск национальный университет
                                </p>
                             </div>';
        $result .= '    </div>';
        for ($i =1; $i <sizeof($images); $i++ ){
            $result .= '<div class="item">
                            <img src="'.$images[$i].'" alt="..." height="500px" width="750px">
                            <div class="carousel-caption">
                            
                            </div>
                        </div>';
        }
        //<!-- Controls -->
        $result .= '<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>';
        $result .= '</div></section></div>';

        $result .= '<div class="row">';
         $result .= '<section>
                      <br>
                        <label>Кратко о кафедре </label>
                          <p>
                      Заведующий кафедрой – <strong>Байбуз Олег Григорьевич</strong>, доктор технических наук, профессор.</p>

                        <p>Учебный процесс, проводимый кафедрой, обеспечивают <strong>3 профессора, 10 доцентов, 5 старших преподавателей, 7 ассистентов.</strong>
                        </p>

                        <p> На кафедре преподаются дисциплины: «Объектно-ориентированное программирование», «Базы данных», «Интернет-технологии», «Компьютерная графика», «Основы теории распознавания речи», «Анализ алгоритмов», «Методы обработки и визуализации многомерных данных», «Качество программного обеспечения и тестирования» и другие.
                         

                      </p></section></div>';




        $result .= '</div>';

        return $result;
    }
   echo  getCarousel();

 ?>

