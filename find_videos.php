<?
        print"<ul id='list'>";   
        $moodToLookup = $_POST['mood'];
        $moodToLookup = urlencode($moodToLookup);
        $urlEncodedVideo2 = urlencode($moodToLookup);
        
        $url2  = "https://www.googleapis.com/youtube/v3/search?part=id%2Csnippet&q=%22";
        $url2 .=  urlencode($moodToLookup) ;
        $url2 .= '%20';
        $url2 .= "videos" ; //previously live "uplifting, depressed videos, etc."
    $url2 .= "%22&order=relevance&maxResults=50&type=video&pageToken=";
    $url2 .= "&key=AIzaSyAqzIWpO7rxjkyKHwPe37SDdDSnS_pDYLs&alt=json";
        

        
    $ch2 = curl_init();
    curl_setopt($ch2, CURLOPT_HEADER, 0);
    curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch2, CURLOPT_URL, $url2);
    $cr2 = curl_exec($ch2);
    curl_close($ch2);
        
        $jsonResponse2= json_decode($cr2);
        
        for($i=0;$i<10;$i++)
        {
        $moodForYoutube = $jsonResponse2->items[$i]->snippet->title;
        $moodForYoutube2 = $jsonResponse2->items[$i]->id->videoId;
        print "$moodForYoutube";
        print "</br>";
        echo "<IFRAME SRC='http://www.youtube.com/embed/$moodForYoutube2?modestbranding=1&controls=0' SCROLLING='no' WIDTH='854' HEIGHT='480' FRAMEBORDER='no'></IFRAME>";

    print"</li>";
        }
        
    print"</ul>";
        
        
        ?>