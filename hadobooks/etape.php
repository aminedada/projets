<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Hadobooks</title>
   <link type="image/x-icon" href="image/icon_1009.png" rel="shotcut icon"></link>
   <link type="text/css" href="css2.css" REL="StyleSheet" ></link>
  </head>
  <body>
   <div id="lol">
   <?php
   include 'header.php';
if (isset($_POST['isbn']) || isset($_POST['isbn1']))
  {
    if (isset($_POST['isbn']))
      $isbn = $_POST['isbn'];
    else
      $isbn = $_POST['isbn1'];
    $livre = str_replace(' ', '+', $isbn);
    $isbn = isset($livre) ? $livre : '';  
    $request = 'https://www.googleapis.com/books/v1/volumes?q=' . $isbn;  
    $response = file_get_contents($request);  
    $results = json_decode($response);  
    if($results->totalItems > 0)
      {  
	for ($i = 0; $i<10; $i++)
	  {   
	    $book = $results->items[$i];  
      
	    $infos['isbn'] = $book->volumeInfo->industryIdentifiers[0]->identifier;  
	    $infos['titre'] = $book->volumeInfo->title;  
	    $infos['auteur'] = $book->volumeInfo->authors[0];
	    $infos['langue'] = $book->volumeInfo->language;  
	    $infos['publication'] = $book->volumeInfo->publishedDate;  
	    $infos['pages'] = $book->volumeInfo->pageCount;  
	    $infos['description'] = $book->volumeInfo->description;
	    $infos['lien'] = $book->volumeInfo->previewLink;
      
	    if( isset($book->volumeInfo->imageLinks) ){  
	      $infos['image'] = str_replace('&edge=curl', '', $book->volumeInfo->imageLinks->thumbnail);  
	    }  
	    $a=0;
	    if($a<10)
	      {
		echo '<center><h2>'.$infos['titre']. '</h2></center>';  
		echo '<center><h3>'.$infos['auteur'].'</h3></center>';
		echo '<center><img src='.$infos['image'].'/>'.'<br/></center>';
		echo '<div id="test"><p>'.$infos['description'].'</p></div>';
		echo '<a href='.$infos['lien'].'>Acheter</a>'.'<br/>';
		echo '<a href=http://www.allocine.fr/recherche/?q='.$isbn.'>Bande-annonce</a>'."</br>";
		echo '<a href=https://www.youtube.com/results?search_query='.$isbn.'&lclk=movie&filters=movie>Youtube</a>'."</br>";
		echo '<a href=https://www.youtube.com/results?filters=playlist&lclk=playlist&search_query='.$isbn.'>Musique</a>'."</br>";
		include 'com.php';
		$a++;
	      } 
	  }
      }  
    else{  
      echo 'Livre introuvable';  
    } 
  }
?>
</div>
</body>
</html>
