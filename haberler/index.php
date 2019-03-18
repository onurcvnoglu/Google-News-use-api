<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Türkiye Haber</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="ie.css" /><![endif]-->
</head>
<body>
<!-- BEGIN wrapper -->
<div id="wrapper">
  <!-- BEGIN header -->
  <div id="header">
    <ul>
      <li><a href="#">Anasayfa</a></li>
      <li><a href="#">Hakkında</a></li>
      <li><a href="#">İletişim</a></li>
    </ul>
    <p class="rss"> <a href="#">Posts</a> | <a href="#">Comments</a> | <a href="#">Email</a> </p>
    <h1 style="color: #FFFFFF">Gündem<sup style="color: red">Türkiye</sup></h1>
      <img style="position: absolute; right: 190px; top: 30px" src="images/bayrak.jpg" alt="" width="400" height="130"/>
    <div class="ad"><a href="#"><img src="images/ad468x60.gif" alt="" /></a></div>
  </div>
  <!-- END header -->
  <!-- BEGIN content -->
  <div id="content">
    <!-- begin post -->
      <?php
      include 'haber.php';
      ?>
    <!-- end post -->
  </div>
  <!-- END content -->
  <!-- BEGIN sidebar -->
  <div id="sidebar">
    <!-- begin search -->
    <form action="#">
      <input type="text" name="s" id="s" value="" />
      <button type="submit">Search</button>
    </form>
    <!-- end search -->
    <!-- begin popular articles -->
    <div class="box">
      <h2>Popüler Başlıklar</h2>
      <ul>
        <li><a href="#"></a>1</li>
        <li><a href="#"></a>2</li>
        <li><a href="#"></a>3</li>
        <li><a href="#"></a>4</li>
        <li><a href="#"></a>5</li>
      </ul>
    </div>
    <!-- end popular articles -->
    <!-- begin flickr rss -->
    <div class="box">
      <h2>Flickr RSS</h2>
      <p class="flickr"> <a href="#"><img src="images/thumb02.jpg" alt="" /></a> <a href="#"><img src="images/thumb03.jpg" alt="" /></a> <a href="#"><img src="images/thumb04.jpg" alt="" /></a> <a href="#"><img src="images/thumb05.jpg" alt="" /></a> <a href="#"><img src="images/thumb06.jpg" alt="" /></a> <a href="#"><img src="images/thumb07.jpg" alt="" /></a> </p>
    </div>
    <!-- end flickr rss -->
    <!-- begin featured video -->
    <div class="box">
      <h2>Featured Video</h2>
      <div class="video"><img src="images/video.jpg" alt="" /></div>
    </div>
    <!-- end featured video -->
    <!-- BEGIN left -->
    <div class="l">
      <!-- begin categories -->
      <div class="box">
        <h2>Categories</h2>
        <ul>
          <li><a href="#">Advertising</a></li>
          <li><a href="#">Entertainment</a></li>
          <li><a href="#">Fashion</a></li>
        </ul>
      </div>
      <!-- end categories-->
    </div>
    <!-- END left -->
    <!-- BEGIN right -->
    <div class="r">
      <!-- begin archives -->
      <div class="box">
        <h2>Archives</h2>
        <ul>
          <li><a href="#">March 2009</a></li>
          <li><a href="#">February 2009</a></li>
          <li><a href="#">January 2009</a></li>
          <li><a href="#">December 2008</a></li>
        </ul>
      </div>
      <!-- end archives -->
    </div>
    <!-- END right -->
  </div>
  <!-- END sidebar -->
</div>
<!-- END wrapper -->
<!-- BEGIN footer -->
<div id="footer">
  <p>Copyright &copy; 2019 - <a href="#">Gündem Türkiye</a> </p>
</div>
<!-- END footer -->
</body>
</html>
