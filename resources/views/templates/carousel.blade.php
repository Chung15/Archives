<?php 
  /**
  *@params path to images
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
            //dd($images);
        }
        return $images;
    }
   
   

    function getCarousel() {
        $images = getCarousselImages("images/carousel_images");
        $result = '<div class="col-md-8">';
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
                      Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки 

                      </section></div>';




        $result .= '</div>';

        return $result;
    }
   echo  getCarousel();

 ?>

