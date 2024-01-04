<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.scss">
    <title>Document</title>
</head>
<body>

<section class="header">
<div class="artist__header">
        
        <div class="artist__info">
        
          <div class="profile__img">
          
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/g_eazy_propic.jpg" alt="G-Eazy" />
            
          </div>
          
          <div class="artist__info__meta">
          
            <div class="artist__info__type">Artist</div>
            
            <div class="artist__info__name">G-Eazy</div>
            
            <div class="artist__info__actions">
            
              <button class="button-dark">
                <i class="ion-ios-play"></i>
                Play
              </button>
              
              <button class="button-light">Follow</button>
              
              <button class="button-light more">
                <i class="ion-ios-more"></i>
              </button>
              
            </div>
            
          </div>
          
          
        </div>
        
        <div class="artist__listeners">
        
          <div class="artist__listeners__count">15,662,810</div>
          
          <div class="artist__listeners__label">Monthly Listeners</div>
          
        </div>
        
        <div class="artist__navigation">
        
          <ul class="nav nav-tabs" role="tablist">
            
            <li role="presentation" class="active">
              <a href="#artist-overview" aria-controls="artist-overview" role="tab" data-toggle="tab">Overview</a>
            </li>
            
            <li role="presentation">
              <a href="#related-artists" aria-controls="related-artists" role="tab" data-toggle="tab">Related Artists</a>
            </li>
            
            <!--<li role="presentation">
              <a href="#artist-about" aria-controls="artist-about" role="tab" data-toggle="tab">About</a>
            </li>-->
            
          </ul>
          
          <div class="artist__navigation__friends">
          
            <a href="#">
              <img src="http://zblogged.com/wp-content/uploads/2015/11/17.jpg" alt="" />
            </a>
            
            <a href="#">
              <img src="http://zblogged.com/wp-content/uploads/2015/11/5.png" alt="" />
            </a>
            
            <a href="#">
              <img src="http://cdn.devilsworkshop.org/files/2013/01/enlarged-facebook-profile-picture.jpg" alt="" />
            </a>
            
          </div>
          
        </div>
        
      </div>

</section>
    
    <script>
        // Sliders

var slider = document.getElementById('song-progress');

noUiSlider.create(slider, {
	start: [ 20 ],
	range: {
		'min': [   0 ],
		'max': [ 100 ]
	}
});

var slider = document.getElementById('song-volume');

noUiSlider.create(slider, {
	start: [ 90 ],
	range: {
		'min': [   0 ],
		'max': [ 100 ]
	}
});


// Tooltips

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Viewport Heights

$(window).on("resize load", function(){
  
  var totalHeight = $(window).height();

  var headerHeight = $('.header').outerHeight();
  var footerHeight = $('.current-track').outerHeight();
  var playlistHeight = $('.playlist').outerHeight();
  var nowPlaying = $('.playing').outerHeight();

  var navHeight = totalHeight - (headerHeight + footerHeight + playlistHeight + nowPlaying);
  var artistHeight = totalHeight - (headerHeight + footerHeight);

  console.log(totalHeight);
  
  $(".navigation").css("height" , navHeight);
  $(".artist").css("height" , artistHeight);
  $(".social").css("height" , artistHeight);
  
});
    


  

// Collapse Toggles

$(".navigation__list__header").on( "click" , function() {
  
  $(this).toggleClass( "active" );
  
});


// Media Queries

$(window).on("resize load", function(){
	if ($(window).width() <= 768){	
		
    $(".collapse").removeClass("in");
    
    $(".navigation").css("height" , "auto");
    
    $(".artist").css("height" , "auto");
    
	}	
});

$(window).on("resize load", function(){
	if ($(window).width() > 768){	
		
    $(".collapse").addClass("in");
    
	}	
});

    </script>
</body>
</html>