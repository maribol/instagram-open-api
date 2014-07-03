Instagram Open API
===============

You can use this open API to get information about an instagram user and their latest pictures/videos.
You don't need any api key to use this Service.

<pre>
  $insta = new Instagram();
  $info = $insta->get('maribolro');
  print_r($info);
</pre>
