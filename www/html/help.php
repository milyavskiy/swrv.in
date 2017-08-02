<!DOCTYPE html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
    <meta name="description" content="Help: Use any subdomain or path to shorten a URL or point your DNS to <?php require('../required/config.php'); echo HOST; ?>"/>

    <title>Help: Make Redirects, Shorten Links and URLs - <?php echo HOST; ?></title>

    <style>
      html
      {
        height: 95%;
      }

      body
      {
        background-color: #FFFFFF;
        padding: 1%;
        height: 90%;
      }

      a:link, a:visited
      {
        color: #009999;
      }

      #box
      {
        background-color: #99FFCC;
        border-radius: 20px;
        border: none;
        padding: 1%;
        width: 55%;
        min-width: 290px;
        min-height: 420px;
        font-size: 130%;
        text-align: center;
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-top: 2%;
      }
    </style>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-58216706-1', 'auto');
      ga('send', 'pageview');
    </script>

  </head>

  <body>
    <div id="box">
      <p>
        What can you do <a href="<?php echo PROT.HOST; ?>">here</a>?
      </p>

      <p>
        You can use <em>any</em> subdomain or path you like as a URL shortner.
      </p>

      <p>
        You can also point your A-record to <strong><?php echo IP; ?></strong><br/>
        or a CNAME record to <strong><?php echo HOST; ?></strong> then add a <a href = "/">redirect</a>.<br/>
      </p>

      <p>
        Some examples:<br/>
        <a href="http://swrv.in/path">swrv.in/path</a> |
        <a href="http://subdomain.swrv.in">subdomain.swrv.in</a> |
        <a href="http://subdomain.swrv.in/path">subdomain.swrv.in/path</a><br/>
        <a href="http://cname.swervein.com">cname.swervein.com</a><br/>
      </p>

      <p>
        Try a random one: <?php echo "<a href=\"".PROT.RND."\">".RND."</a>\n"; ?>
      </p>
    </div>
  </body>
</html>
