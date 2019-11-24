<?php
error_reporting(0);
$news = simplexml_load_file('http://api.forismatic.com/api/1.0/?method=getQuote&key=457653&format=xml&lang=en');
if($news!=NULL)
	{	foreach ($news as $item) 
		{   echo "<div class='card'>";
				echo"<div class='content'>";
					echo "<div class='row'>";
						echo "<div class='col-md-12 col-xs-12'>";
							echo "<blockquote class='blockquote-reverse'>
								<p>$item->quoteText</p>
								<footer>$item->quoteAuthor</footer>
								</blockquote>";
						echo "</div>";
					echo "</div>";
				echo "</div>";		
			echo "</div>";
		}		
	}
else echo "Could not fetch the data please check your connection.\nWe regret for the inconvenience caused.";	
?>