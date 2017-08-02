<!DOCTYPE html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
    <meta name="description" content="Use any subdomain or path to shorten a URL or point your DNS to <?php echo HOST; ?>"/>

    <title>Make Redirects, Shorten Links and URLs - <?php echo HOST; ?></title>

    <style>
      body
      {
        background-color: #FFFFFF;
      }

      h1
      {
        text-align: center;
        margin: 5%;
        color: #009999;
        font-size: 300%;
      }

      a:link, a:visited
      {
        font-style: italic;
        color: #009999;
      }

      label
      {
        font-size: 170%;
        margin-left: 1%;
      }

      #submit_add
      {
        font-size: 130%;
      }

      #from_url, #to_url
      {
        width: 76%;
        font-size: 130%;
      }

      #join1, #join2
      {
        width: 36%;
        min-width: 230px;
        display: inline-block;
        white-space: nowrap;
        margin-right: 2%;
      }

      #stat
      {
        background-color: #99FFCC;
        border-radius: 20px;
        border: none;
        padding: 1%;
        width: 29%;
        min-width: 290px;
        max-width: 590px;
        font-size: 150%;
        text-align: center;
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-top: 5%;
        overflow: hidden;
        text-overflow: ellipsis;
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

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script>
    $(function ()
    {
      $('#add').submit(function ()
      {
        $.ajax(
        {
          data: 
          {
            from_url: $('#from_url').val(), to_url: $('#to_url').val()
          },
          url: '/add.php',
          type: 'POST',
          complete: function (XMLHttpRequest, textStatus)
          {
            $('#stat').val(XMLHttpRequest.responseText);
          }
        });
        return false;
      });
    });
    </script>
  </head>

  <body>
    <h1>[<a href="/help.php" title="Help">Swrv in</a>]</h1>

    <form action="/add.php" method="post" id="add">
      <label for="from_url">Redirect&nbsp;from</label>

      <div id="join1">
        <label for="from_url"><?php echo PROT ?></label><input type="text" name="from_url" id="from_url" <?php echo $msg; ?> required>
      </div>

      <div id="join2">
        <label for="to_url">To:</label><input type="text" name="to_url" id="to_url" placeholder="http://www.example.com/" required>
      </div>

      <input type="submit" value="Add" id="submit_add">

      <input type="text" name="stat" id="stat" value="<?php echo $err_msg; ?>" readonly>
    </form>
  </body>
</html>
