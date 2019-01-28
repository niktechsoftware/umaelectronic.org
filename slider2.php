<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


<script type='text/javascript' src='http://code.jquery.com/jquery-1.4.3.min.js'></script>
<style type="text/css">
	html,body{margin:0}
 ul.slide{margin:0;
          padding:0;
          height:180px;
          list-style-type:none;}
 ul.slide li{float:left;
 			margin:5px;
             list-style-type:none;}
 ul.slide img{border:1px solid silver;
             height:180px;}
table tr td{
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;
	color:#333;
	}
</style>
<script type='text/javascript'>
(function($)
   {
     var methods = 
       {
         init : function( options ) 
         {
           return this.each(function()
             {
               var _this=$(this);
                   _this.data('marquee',options);
               var _li=$('>li',_this);
                   
                   _this.wrap('<div class="slide_container"></div>')
                        .height(_this.height())
                       .hover(function(){if($(this).data('marquee').stop){$(this).stop(true,false);}},
                              function(){if($(this).data('marquee').stop){$(this).marquee('slide');}})
                        .parent()
                        .css({position:'relative',overflow:'hidden','height':$('>li',_this).height()})
                        .find('>ul')
                        .css({width:screen.width*2,position:'absolute'});
           
                   for(var i=0;i<Math.ceil((screen.width*3)/_this.width());++i)
                   {
                     _this.append(_li.clone());
                   } 
             
               _this.marquee('slide');});
         },
      
         slide:function()
         {
           var $this=this;
           $this.animate({'left':$('>li',$this).width()*-1},
                         $this.data('marquee').duration,
                         'swing',
                         function()
                         {
                           $this.css('left',0).append($('>li:first',$this));
                           $this.delay($this.data('marquee').delay).marquee('slide');
             
                         }
                        );
                             
         }
       };
   
     $.fn.marquee = function(m) 
     {
       var settings={
                     'delay':2000,
                     'duration':900,
                     'stop':true
                    };
       
       if(typeof m === 'object' || ! m)
       {
         if(m){ 
         $.extend( settings, m );
       }
 
         return methods.init.apply( this, [settings] );
       }
       else
       {
         return methods[m].apply( this);
       }
     };
   }
 )( jQuery );
 
 //Plugin end
 
 //call
 $(document).ready(
   function(){$('.slide').marquee({delay:3000});}
 );

</script>
</head>

<body>
<ul class="slide">
  
  <li>
  	<img src="images/content/company/Icon.JPG" />
  </li>
   <li>
  	<img src="images/content/company/ksou.jpg" />
  </li>
   <li>
  	<img src="images/content/company/Maharshi-Dayanand-University.jpg" />
  </li>
   <li>
  	<img src="images/content/company/mahatma-gandhi-university-Logo.gif" />
     <li>
  	<img src="images/content/company/manav_bharti_university-.jpg" />
  </li>
   <li>
  	<img src="images/content/company/sainath.gif" />
  </li>
   <li>
  	<img src="images/content/company/subharti_university_lgo.jpg" />
  </li>
  </li>
</ul>

</body>
</html>