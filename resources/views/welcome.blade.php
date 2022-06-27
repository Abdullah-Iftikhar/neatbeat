
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<link href="{{ URL::asset('css/meins.css') }}" rel="stylesheet">
<link href="{{ URL::asset('js/meins.js') }}" rel="script">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NeatBeat | Music</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
    </head>
    
        


        <body>

<div>

        <div class="grid">
  <!--Left side-->
  <div id="west" class="column effect-hover">
    <div class="content">
      <i class="fa fa-venus" aria-hidden="true">

     

   
      <h2>Ich bin<span>Künstler</span>   </i> </h2>
      <h3>Producer beauftragen</h3> <a href="{{ url('/home') }}">
      <p>Hier entlang...</p></a>
    </div>		    
  </div>




  <!--Right side-->
  <div id="east" class="column effect-hover">
    <div class="content">
      <i class="fa fa-mars" aria-hidden="true"></i>
      <h2>Ich bin<span>Producer</span></h2>
      <h3>Künstler helfen</h3>
      <p>Hier entlang</p>
    </div>			
  </div>
  <!--Logo-->
 
  


<!--Left side content-->
<div id="west-overlay" class="overlay">
     <div class="grid">      
       <div class="column">
         <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/927610/pexels-photo-14400.jpeg"/>
       </div>       
        <div class="column">  
          <div class="product-content">
             <h1>Rainbow Chasers</h1>
            <p>With these, you're the center of the Universe, floating in microgravity between distant stars. This is what you want.</p>
            <div class="price">
              <span class="currency">$</span>
              <span class="amount">89.99</span>
            </div>
            <a href="#" class="buy-button">           
              <span>Buy Me</span>
            </a>
            <div class="size-guide-link underline-link">Size guide</div>
          </div>
       </div>         
     </div><!--End Grid-->
  
     <div class="close-icon">
        <div></div>
        <div></div>
      </div> 
</div>
<!--Right side content-->
<div id="east-overlay" class="overlay">
     <div class="grid">      
       <div class="column">
         <img src="https://images.unsplash.com/photo-1552745026-b9c0536969d0?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ"/>
       </div>       
        <div class="column">  
          <div class="product-content">
             <h1>Path Makers</h1>
            <p>With these, you're the center of the Universe, floating in microgravity between distant stars. This is what you want.</p>
            <div class="price">
              <span class="currency">$</span>
              <span class="amount">149.99</span>
            </div>
            <a href="#" class="buy-button">           
              <span>Buy Me</span>
            </a>
               <div class="size-guide-link underline-link">Size guide</div>
          </div>
       </div>         
     </div><!--End Grid-->
  
     <div class="close-icon">
        <div></div>
        <div></div>
      </div> 
</div>





        
          
    </body>


























</html>
