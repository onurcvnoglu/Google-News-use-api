<?php
/**
 * Json ile googledan haberleri almak ve yayınlama işlemi
 */
$json_url="https://newsapi.org/v2/top-headlines?country=tr&apiKey=1b572bc5c5d5446b8da8f5a52e032d1e";
$json_file = file_get_contents($json_url, true);
$haber_data=json_decode($json_file);
for ($i=0;$i<20;$i++){
    /*echo $haber_data->articles[$i]->title.'</br>';
    echo '<a href="'.$haber_data->articles[$i]->url.'">Habere Gitmek için Tıkla</a></br>';
    echo $haber_data->articles[$i]->description.'</br>';
    echo $haber_data->articles[$i]->content.'</br>';
    echo "-----------".'<br>';
    */

    echo '<div class="post">
      <p class="details1">'.$haber_data->articles[$i]->publishedAt.' / <a href="'.$haber_data->articles[$i]->url.'">Habere Gitmek İçin Tıkla</a></p>
      <div class="buffer">
        <div class="content"> <a href="#"><img src="'.$haber_data->articles[$i]->urlToImage.'" /></a>
          <h2>'.$haber_data->articles[$i]->title.'</h2>
        </div>
      </div>
    </div>';
}

?>