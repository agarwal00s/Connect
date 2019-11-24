<?php
    $dom = new DOMDocument('1.0','UTF-8');
	$dom->formatOutput = true;
	$root = $dom->createElement('preferences');
    $dom->appendChild($root);

    $news=$dom->createElement('news');
    $root->appendChild($news);
            $news->appendChild( $dom->createElement('topic', 'NA') );
            $news->appendChild( $dom->createElement('topic', 'NA') );
            $news->appendChild( $dom->createElement('topic', 'NA') );

    $debate=$dom->createElement('debate');
    $root->appendChild($debate);
            $debate->appendChild( $dom->createElement('topic', 'NA') );
            $debate->appendChild( $dom->createElement('topic', 'NA') );
            $debate->appendChild( $dom->createElement('topic', 'NA') );
            $debate->appendChild( $dom->createElement('topic', 'NA') );    
    
    $blog=$dom->createElement('blog');
    $root->appendChild($blog);
            $blog->appendChild( $dom->createElement('topic', 'NA') );
            $blog->appendChild( $dom->createElement('topic', 'NA') );
            $blog->appendChild( $dom->createElement('topic', 'NA') );
            $blog->appendChild( $dom->createElement('topic', 'NA') );

    $a2a=$dom->createElement('a2a');
    $root->appendChild($a2a);
            $a2a->appendChild( $dom->createElement('topic', 'NA') );
            $a2a->appendChild( $dom->createElement('topic', 'NA') );
            $a2a->appendChild( $dom->createElement('topic', 'NA') );
            $a2a->appendChild( $dom->createElement('topic', 'NA') );

    echo '<xmp>'. $dom->saveXML() .'</xmp>';
    $dom->save('./users/'.$user.'/settings.xml') or die('XML Create Error');
?>
            