<html lang="en">
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>World of Kubernetes</title>
  </head>
  <body>
    <div align="center">
      <img width="400px" height="400px" src="kubernetes-logo.png">
      <h1>Welcome to the world of <span style="color: blue;">Kubernetes</span>!</h1>
      <h2>There is plenty to explore here ...</h2>
      <h2>You can start with the name: <span style="color: blue;">κυβερνήτης</span> &rArr; <span style="color: blue;">kubernetes</span> &rArr; <span style="color: blue;">k8s</span> :)</h2>
      <h2>Then, be brave and run a pod with two containers :)</h2>
      <br /><br /><br />
      This content is comming from the second container:<br />
      <?php
        $fn = "data/generated-data.txt";
        
        if (file_exists($fn)) {
            $f = fopen($fn,"r");
  
            while(! feof($f))  {
                $result = fgets($f);
                echo $result."<br />\n";
            }

            fclose($f);
        }
        else echo "No data to read.";
      ?>
      <br /><br /><br />
      Running on <b><?php echo gethostname(); ?></b>
    </div>
  </body>
</html> 
