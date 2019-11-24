<?php
    $dom = new DOMDocument('1.0','UTF-8');
	$dom->formatOutput = true;
	$root = $dom->createElement('profile');
    $dom->appendChild($root);

    $root->appendChild( $dom->createElement('username', $user) );
    $root->appendChild( $dom->createElement('fullname', $fullname) );
    $root->appendChild( $dom->createElement('email', $email) );
    $root->appendChild( $dom->createElement('dob', $DOB) );
    $root->appendChild( $dom->createElement('aboutme', 'Live Love Laugh') );
    $points=$dom->createElement('points');
    $root->appendChild($points);
        $upvotes=$dom->createElement('upvotes');
        $points->appendChild($upvotes);
            $upvotes->appendChild( $dom->createElement('debate', '0') );
            $upvotes->appendChild( $dom->createElement('blog', '0') );
            $upvotes->appendChild( $dom->createElement('a2a', '0') );
        $views=$dom->createElement('views');
        $points->appendChild($views);	
            $views->appendChild( $dom->createElement('debate', '0') );
            $views->appendChild( $dom->createElement('blog', '0') );
            $views->appendChild( $dom->createElement('a2a', '0') );
    $root->appendChild( $dom->createElement('following', '0') );
    $root->appendChild( $dom->createElement('followers', '0') );

    echo '<xmp>'. $dom->saveXML() .'</xmp>';
    $dom->save('./users/'.$user.'/profile.xml') or die('XML Create Error');
?>
            