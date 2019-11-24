
<?php
$count = $_GET['key'];
error_reporting(0);
switch( $count )
	{
		case 1:$news = simplexml_load_file('http://news.google.com/news?ned=in&topic=tc&output=rss&num=20');
		break;
		case 2:$news = simplexml_load_file('http://news.google.com/news?ned=in&topic=s&output=rss&num=20');
		break;
		case 3:$news = simplexml_load_file('http://news.google.com/news?ned=in&topic=w&output=rss&num=20');
		break;
		case 4:$news = simplexml_load_file('http://news.google.com/news?ned=in&topic=e&output=rss&num=20');
		break;
		default:$news = simplexml_load_file('http://news.google.com/news?ned=in&topic=h&output=rss&num=20');	
	}
$feeds = array();

$i = 0;

foreach ($news->channel->item as $item) 
{
    preg_match('@src="([^"]+)"@', $item->description, $match);
    $parts = explode('<font size="-1">', $item->description);

    $feeds[$i]['title'] = (string) $item->title;
    $feeds[$i]['link'] = (string) $item->link;
    $feeds[$i]['image'] = $match[1];
    $feeds[$i]['site_title'] = strip_tags($parts[1]);
    $feeds[$i]['story'] = strip_tags($parts[2]);

    $i++;
}

foreach($feeds as $newsfeed)
{echo "<div class='card'>";
                            echo"<div class='content'>";
                                echo"<div class='row'>";
                                    echo"<div class='col-md-2 col-xs-12 col-sm-12'>";
                                        echo"<div class='icon-big icon-warning text-center'>";
                                            echo "<img class='img-rounded' src='http:".$newsfeed['image']."'>";
                                        echo"</div>";
                                    echo"</div>";
                                    echo"<div class='col-md-10 col-xs-12 col-sm-12'>";
                                        echo"<div class='numbers1'>";
                                            echo"<div class='col-md-10 col-xs-12'><h5>".$newsfeed['title']."</h5></div>";
                                            
                                        echo"</div>";
                                    echo"</div>";
                                echo"</div>";
                                echo"<div class='footer'>";
                                    echo"<hr />";
                                    echo"<div class='story'>";
                                        echo $newsfeed['story'];
                                    echo"</div>";
									echo"<hr />";
                                    echo"<a class='btn btn-wd btn-default' target='_blank' href='".$newsfeed['link']."'>Read More</a>";
                                echo"</div>";
                            echo"</div>";
                        echo"</div>";
}
?>