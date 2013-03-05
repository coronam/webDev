<html>
  <head><title>Google Stock Price</title>
  <script type='text/javascript'>
    // Parses returned response and extracts
    // the title, links, and text of each news story.
    function top_stories(o){
      var items = o.query.results.quote;
      var output = '';
      var price = items.LastTradePriceOnly;
	  output += "<center><h1><big><big><big>$" + price + "<h1></center>";
      // Place news stories in div tag
      document.getElementById("results").innerHTML = output;  
    }
    </script>
  </head>
  <body>
  <center><script type="text/javascript"><!-- 
google_ad_client = "ca-pub-7917555364127273"; 
/* Test GoogleStockPrice */ 
google_ad_slot = "4221987147"; 
google_ad_width = 728; 
google_ad_height = 90; 
//--> 
</script> 
<script type="text/javascript" 
src="http://pagead2.googlesyndication.com/pagead/show_ads.js"> 
</script> 
 </center>
	<center><h1><big><big><big> Google Inc. </center></h1>
    <p id="results"></p>

    <script src='http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20yahoo.finance.quotes%20where%20symbol%20in%20(%22GOOG%22)&format=json&diagnostics=true&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=top_stories'></script>
	
	<h3> side banner</h3>
	
	<script type="text/javascript"><!-- 
google_ad_client = "ca-pub-7917555364127273"; 
/* Test Google Stock Price Side Banner */ 
google_ad_slot = "8652186745"; 
google_ad_width = 120; 
google_ad_height = 240; 
//--> 
</script> 
<script type="text/javascript" 
src="http://pagead2.googlesyndication.com/pagead/show_ads.js"> 
</script> 
  </body>
</html>