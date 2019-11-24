<?php
$index=simplexml_load_file('./blog/index.xml');
$counter=0;
echo '<div class="row">';
foreach ($index->name as $value) {
    $xml=simplexml_load_file('./blog/'.$value.'.xml');
    $counter=$counter+1;
    $topic=$xml->topic;
    $author=$xml->author;
    foreach($xml->tags->tag as $tags){
        $tag=$tags;
    }
    echo '
        <div class="col-lg-6 col-md-6">
            <div class="card card-user">
                <div class="image">
                        <img src="./blog/'.$tag.'.jpg" alt="..."/>
                </div>
                <div class="content">
                    <div class="author">
                      <img class="avatar border-white" src="./users/'.$author.'/'.$author.'.jpg" alt="..."/>
                      <h3 class="title">'.$topic.'<br/>
                      </h3>
                    </div>
                    <br/>
                    <hr/>
                    <div class="row">
                        <div class="description text-center col-md-3 col-xs-6">
                            TAGS
                        </div>
                        <div class="text-center col-md-6 col-xs-6">
                            <btn class="btn btn-wd btn-warning btn-fill ">'.$tag.'</btn>
                        </div>
                    </div>
                    <hr/>
                </div>
                <div class="text-center">
                    <div class="row">
                        <div class="col-md-4 col-xs-4">
                            <br/>
                            <div class="text-center">
                                <btn data-toggle="modal" data-target="#viewBlog'.$topic.'" class="btn btn-md btn-success btn-icon btn-fill" id="'.$topic.'" onclick="viewBlogModal(id)"><i class="fa fa-eye"></i>VIEW</btn>
                            </div>
                            <br/>
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <br/>
                            <div class="text-center">
                                <btn data-toggle="modal" data-target="#saveBlog" class="btn btn-md btn-info btn-icon btn-fill" id="Cricket" onclick="saveBlogModal(id)"><i class="fa fa-bookmark"></i>SAVE</btn>
                            </div>
                            <br/>
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <br/>
                            <div class="text-center">
                                <btn class="btn btn-md btn-danger btn-icon btn-fill"><i class="fa fa-times"></i>CLOSE</btn>
                            </div>
                            <br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        if($counter===2){
            echo '</div>
                <div class="row">';
            $counter=0;    
            }
}
echo '</div>';
 ?>
