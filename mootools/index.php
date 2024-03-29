<?php include "config.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
  <title>Fancy Zoom by Chris Van Pelt &amp; John Nunemaker</title> 
  <link rel="stylesheet" href="../css/common.css" type="text/css" /> 
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/mootools/1.2.1/mootools-yui-compressed.js"></script>
  <script type="text/javascript" src="js/fancyzoom.js"></script>
  <script type="text/javascript" charset="utf-8">
    document.addEvent('domready', function() {
      $$("div.photo a").each(function(el) { 
        new FancyZoom(el, {
          scaleImg:true,
          onShow: function(e) {
            var fancy = this
            var a = fancy.content_div.getElement('a')
            if(a && a.getElement('.loading')) {
              var loaded = function() {
                fancy.loaded = true
                fancy.options.width = this.width
                fancy.options.height = this.height
                a.empty().adopt(this)
                FancyZoom.show(e)
              }
              var image = new Image()
              image.onload = loaded
              image.src = a.href
            }
          },
          max: 480
        })
      })
      new FancyZoom('medium_box_link', {width:400, height:300});
      new FancyZoom('large_box_link');
      new FancyZoom('flash_box_link');
    });
  </script>
  
  <style type="text/css" media="screen">
    #large_box {width:800; height:600;}
  </style>
</head> 
<body> 
<div id="wrapper"> 
  <div id="header"> 
    <h1>Fancy Zoom (Mootools)</h1> 
    <p>Zoomy JavaScript based loosely on Fancy Zoom by Cabel Sasser.</p> 
    
    <ul id="nav">
      <li><a href="../jquery/index.html">jQuery</a></li> 
      <li><a href="../jquery/index.html">Prototype</a></li> 
      <li><a href="http://github.com/jnunemaker/fancy-zoom/">Github</a></li> 
      <li><a href="http://jnunemaker.lighthouseapp.com/projects/16389-fancyzoom/overview">Lighthouse</a></li> 
    </ul> 
  </div> 
  
  <div id="content">
    <p>This works with any html (images, text, headings, flash). The only caveat is it doesn't currently work with AJAX. Whatever you want to zoom to must be html already on the page. Below are several examples. Width and height of zoom box are configurable through optional setting or css.</p>
    
    <h2>Demos</h2>
    
    <div id="photos">
      <h3>Images</h3> 
      <?php $sql=mysql_query("select * from donate_item");
	  		while($fetch=mysql_fetch_array($sql))
			{
	  ?>
      <div class="photo">
        <a href="#<?php echo $fetch['id'];?>">
          <img src="images/<?php echo $fetch['image'];?>" alt="Github helmet" style="width:50px; height:50px;" />
        </a>
      </div>
     <?php } ?>
     
     
      <?php $sql=mysql_query("select * from donate_item");
	  		while($fetch=mysql_fetch_array($sql))
			{
	  ?>
      <div id="<?php echo $fetch['id'];?>">
        <a href="#<?php echo $fetch['id'];?>">
          <img src="images/<?php echo $fetch['image'];?>" alt="Github helmet" style="width:50px; height:50px;" />
          <?php echo $fetch['item_id'];?>
        </a>
      </div>
     <?php } ?>
     
      <div id="github">
        <a href="http://farm4.static.flickr.com/3250/2765022017_356efe6a25.jpg#helmet">
          <img src="./images/loading.gif" alt="loading" class="loading" />
        </a>
      </div>
      <div id="hotdog">
        <a href="http://farm4.static.flickr.com/3150/2726282580_05ed83e3c0.jpg#hotdog">
          <img src="./images/loading.gif" alt="loading" class="loading" />
        </a>
      </div>
      <div id="turtles">
        <img src="http://farm4.static.flickr.com/3088/2709825025_fb6d71b455.jpg" alt="Turtles" />
        <p id="turtles_caption">It's true, they do bite!</p>
      </div>
    </div>
    
    <div id="text">
      <h3>Text</h3>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vivamus vitae risus vitae lorem iaculis placerat. Aliquam sit amet felis. Etiam congue. Donec risus risus, pretium ac, tincidunt eu, tempor eu, quam. Morbi blandit mollis magna. Suspendisse eu tortor. <a href="#medium_box" id="medium_box_link">Here is a medium box</a> blandit rhoncus. Ut a pede ac neque mattis facilisis. Nulla nunc ipsum, sodales vitae, hendrerit non, imperdiet ac, ante. <a href="#large_box" id="large_box_link">Here is a large box</a>. Morbi sit amet mi. Ut magna. Curabitur id est. Nulla velit. Sed consectetuer sodales justo. Aliquam dictum gravida libero. Sed eu turpis. Nunc id lorem. Aenean consequat tempor mi. Phasellus in neque. Nunc fermentum convallis ligula. <a href="#flash_box" id ="flash_box_link">You can even embed flash</a>.</p>
      
      <div id="medium_box">
        <h2>Here is a medium box</h2>
        <p><strong>The width and height of this box are set in the options for this fancy zoom.</strong> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vivamus vitae risus vitae lorem iaculis placerat. Aliquam sit amet felis. Etiam congue. Donec risus risus, pretium ac, tincidunt eu, tempor eu, quam. Morbi blandit mollis magna. Suspendisse eu tortor. Donec vitae felis nec ligula blandit rhoncus.</p>
        
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vivamus vitae risus vitae lorem iaculis placerat. Aliquam sit amet felis. Etiam congue. Donec risus risus, pretium ac, tincidunt eu, tempor eu, quam. Morbi blandit mollis magna. Suspendisse eu tortor. Donec vitae felis nec ligula blandit rhoncus.</p>
      </div>
      
      <div id="large_box">
        <h2>Here is a large box</h2>
        <p><strong>The width and height for this box are inferred from css. See the style tag in the &lt;head&gt; of this document.</strong> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vivamus vitae risus vitae lorem iaculis placerat. Aliquam sit amet felis. Etiam congue. Donec risus risus, pretium ac, tincidunt eu, tempor eu, quam. Morbi blandit mollis magna. Suspendisse eu tortor. Donec vitae felis nec ligula blandit rhoncus.</p>
        
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vivamus vitae risus vitae lorem iaculis placerat. Aliquam sit amet felis. Etiam congue. Donec risus risus, pretium ac, tincidunt eu, tempor eu, quam. Morbi blandit mollis magna. Suspendisse eu tortor. Donec vitae felis nec ligula blandit rhoncus.</p>
      </div>
      
      <div id="flash_box">
        <object type="application/x-shockwave-flash" width="400" height="300" data="http://www.flickr.com/apps/video/stewart.swf?v=59154" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"> 
          <param name="flashvars" value="intl_lang=en-us&amp;photo_secret=1869930911&amp;photo_id=2756538377"></param> 
          <param name="movie" value="http://www.flickr.com/apps/video/stewart.swf?v=59154"></param> 
          <param name="bgcolor" value="#000000"></param> 
          <param name="allowFullScreen" value="true"></param>
          <embed type="application/x-shockwave-flash" src="http://www.flickr.com/apps/video/stewart.swf?v=59154" bgcolor="#000000" allowfullscreen="true" flashvars="intl_lang=en-us&amp;photo_secret=1869930911&amp;photo_id=2756538377" height="300" width="400"></embed>
        </object>
      </div>
    </div>
    
    <h2>Installation</h2>
    
    <p>Add the following scripts and checkout the notes below (or view the source of this page).</p>
    
<pre><code>&lt;script "http://ajax.googleapis.com/ajax/libs/mootools/1.2.1/mootools-yui-compressed.js"&gt;&lt;/script&gt; 
&lt;script type="text/javascript" src="js/fancyzoom.js"&gt;&lt;/script&gt;</code></pre>
    
    <h2>Notes</h2>
    <p>new FancyZoom(id) where id is the id of the <a> tag you would like to zoom. The <a> tag should have an  href that anchors to the id of the box that contains the contents that should be zoomed. For example:</p>

      <pre><code>&lt;a href="#small_box" id="small"&gt;Small Box!&lt;/a&gt;
&lt;div id="small_box"&gt;
  &lt;p&gt;Here is the contents that will appear in the zoom.&lt;/p&gt;
&lt;/div&gt;
&lt;script type="text/javascript"&gt;
  new FancyZoom('small');
&lt;/script&gt;

// other examples
&lt;script type="text/javascript"&gt; 
  window.addEvent('domready', function() {
    $$('a.fancy').each(function(el) { new FancyZoom(el, {width:500, height:300}); });
    
    new FancyZoom('small', {scaleImg: true}); // Scales images inside while zooming
    
    new FancyZoom('medium');
    
    // width and height are optional. defaults to css specifications of width and height. 
    // if width and height are passed in, they override whatever may be in css.
    new FancyZoom('large', {width:600, height:400});
    
    /* This is an example of loading the image dynamically once the zoom is initiated.
     * This particular example assumes that you have a link inside of your content div
     * which contains an element (a spinning gif loader) with the class loading.  eg:
     *  &lt;a href="#"&gt;&lt;img src="/images/loading.gif" alt="loading" class="loading"/&gt;&lt;/a&gt;
     * The first two images above are loaded this way
     */
     new FancyZoom('custom', {
       scaleImg: true,
       onShow: function(e) {
         var fancy = this
         var a = fancy.content_div.getElement('a')
         if(a.getElement('.loading')) {
           var loaded = function() {
             fancy.loaded = true
             fancy.options.width = this.width
             fancy.options.height = this.height
             a.empty().adopt(this)
             FancyZoom.show(e)
           }
           var image = new Image()
           image.onload = loaded
           image.src = a.href
         }
       },
       //Make the images no wider than 480
       max:480
     })
  });
&lt;/script&gt;</code></pre>

    <p>If the images are not in a directory named 'images' that is relative to the html file you can configure it like so:</p>

<pre><code>&lt;script type="text/javascript"&gt;
  // note that once this option is passed in, it remains the same for every other instance of FancyZoom on the same page
  new FancyZoom('medium', {directory:'directory'});
&lt;/script&gt;</code></pre>
    
  </div> 
 
  <div id="footer">
    <p>
      Created by <a href="http://vandev.com">Chris Van Pelt</a> of <a href="http://doloreslabs.com/">Dolores Labs</a> | original implementation by 
      <a href="http://orderedlist.com/contact/">John Nunemaker</a>
    </p> 
  </div> 
</div>
</body> 
</html>