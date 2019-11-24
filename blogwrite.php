<?php
	session_start();
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$topic=$_POST["debatetopicbox"];
		$author=$_SESSION["username"];
		$tags=$_POST["tags"];
		$texts=$_POST["text"];
		$dom = new DOMDocument('1.0','UTF-8');
		$dom->formatOutput = true;

		$root = $dom->createElement('blog');
		$dom->appendChild($root);

		$root->appendChild( $dom->createElement('topic', $topic) );
		$root->appendChild( $dom->createElement('author', $author) );
		$tagsXML = $dom->createElement('tags');
		$root->appendChild($tagsXML);
		$tagsXML->appendChild( $dom->createElement('tag', $tags) );
		$root->appendChild( $dom->createElement('content', $texts) );
		echo '<xmp>'. $dom->saveXML() .'</xmp>';
		$dom->save('./blog/'.$topic.'.xml') or die('XML Create Error');

		$xmlDoc = new DOMDocument('1.0','UTF-8');
		$xmlDoc->formatOutput = true;
		$xmlDoc->load('./blog/index.xml');
		$xmlRoot=$xmlDoc->getElementsByTagName ("blog");
		foreach ($xmlRoot as $xmlDocRoot) {
		    $xmlDocRoot->appendChild( $xmlDoc->createElement('name', $topic) );
		    $xmlDoc->save('./blog/index.xml');    # code...
		}

	}
?>
