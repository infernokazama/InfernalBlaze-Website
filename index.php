<?php include 'header.php'; ?>


    <div class="container">
      
<div class="bs-docs-section" style="background-color:#242424; padding-left:10px; padding-right:10px; padding-top:10px;padding-bottom:10px;" >
<!--CONTENT-->  
<div style="height:10px;"></div>   
<!--<div class="bs-example">
              <div class="alert alert-dismissable alert-warning">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <h2>Hey Over Here!</h2>
                <h4>This is only a test site</h4>
              </div>
            </div>-->
<div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-captions" data-slide-to="1" class=""></li>
          <li data-target="#carousel-example-captions" data-slide-to="2" class=""></li>
          <li data-target="#carousel-example-captions" data-slide-to="3" class=""></li>
        </ol>
        <div class="carousel-inner">
          <div class="item">
            <img style="height:467px; width:100%;border-radius:25px;" src="http://st.gdefon.com/wallpapers_original/wallpapers/508352_wargaming-net_world-of-tanks_wot_mir-tankov_is_1920x1080_(www.GdeFon.ru).jpg">
            <div class="carousel-caption">
              <h3 class="font"><span class="label label-danger">Wargming.net Game Series</span></h3>
              <h4 class="font"><span class="label label-danger">Clan Division Moderator: VORTEX1409</span></h4>
            </div>
          </div>
          <div class="item active">
            <img  style="height:467px; width:100%;border-radius:25px;" src="http://sticktwiddlers.com/wp-content/uploads/2012/05/halo-4-box-banner.jpg">
            <div class="carousel-caption">
              <h3 class="font"><span class="label label-primary">Halo: Combat Evolved & Halo Custom Edition</span></h3>
              <h4 class="font"><span class="label label-primary">Clan Division Moderator: JASPER</span></h4>
            </div>
          </div>
          <div class="item">
            <img style="height:467px; width:100%;border-radius:25px;" src="http://mmohuts.com/wp-content/gallery/news2/tribesascendlavarena_primary.jpg?ec9f9b">
            <div class="carousel-caption">
              <h3 class="font"><span class="label label-warning">Tribes: Ascend</span></h3>
              <h4 class="font"><span class="label label-warning">Clan Division Moderator: INFERNOKAZAMA</span></h4>
            </div>
          </div>
          <div class="item">
            <img style="height:467px; width:100%;border-radius:25px;" src="images/arma-slider.jpg">
            <div class="carousel-caption">
              <h3 class="font"><span class="label label-default">Armed Assault Series</span></h3>
              <h4 class="font"><span class="label label-default">Clan Division Moderator: VORTEX1409</span></h4>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-captions" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-captions" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>  
  
<div style="height:70px;"></div>  
  
<div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-8">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <center><h2><span class="font">INFERNAL BLAZE</span></h2>
            <p>Welcome Back! We are glad to see that you stopped by!</p>
            <hr>
            <div class="btn-group btn-group-justified font" >
                <a data-toggle="modal" href="#history" class="btn btn-default">Our History</a>
                <a data-toggle="modal" href="#roster" class="btn btn-default">Our Members</a>
                <a data-toggle="modal" href="#mission" class="btn btn-default">Our Mission</a>
                <a data-toggle="modal" href="#servers" class="btn btn-default">Our Servers</a>
              </div></center>
              
            <hr>
            
          </div>
          <hr>
          <div class="row">
            <div class="col-xs-12 col-sm-12">
              <center><h2 class="font">About Us</h2></center>
              <div class="well"><p>We are a clan that is focused on the fun of the game. We do not care how skilled you are, as long as you are enjoying yourself. Like you, we wanted to create an environment where people can share their best gaming experiences with other people from all across the world. We are a fair-play clan and practice such. We want to have a clean playing environment for all our players. This means no Aimbots or cheating allowed. All ages are accepted into this clan, but you must have a good attitude and a willing to help out your fellow gamers. We also hope you can add our servers to your favorite servers to play! Our Servers are rated among the best quality servers players hop on. We offer a range of game types in our servers from Snipers to all out Mayhem with our trademark and popular HellZone server. Do not miss your opportunity to join in on the fun!</p></div>
             
            </div><!--/span--><hr>
<script>
$(function () {
  var all_classes = "";
  var timer = undefined;
  $.each($('li', '.social-class'), function (index, element) {
    all_classes += " btn-" + $(element).data("code");
  });
  $('li', '.social-class').mouseenter(function () {
    var icon_name = $(this).data("code");
    if ($(this).data("icon")) {
      icon_name = $(this).data("icon");
    }
    var icon = "<i class='fa fa-" + icon_name + "'></i>";
    $('.btn-social', '.social-sizes').html(icon + "Sign in with " + $(this).data("name"));
    $('.btn-social-icon', '.social-sizes').html(icon);
    $('.btn', '.social-sizes').removeClass(all_classes);
    $('.btn', '.social-sizes').addClass("btn-" + $(this).data('code'));
  });
  $($('li', '.social-class')[Math.floor($('li', '.social-class').length * Math.random())]).mouseenter();
});
</script>
</div><!--/row-->
<hr>
<center><h2 class="font">Honorable Quotes</h2></center>
<div class="well"><center>
<blockquote>
   <p>Causeing Havoc Since 2006!</p>
   <small>InfernalBlaze Clan</small>
</blockquote>
<blockquote>
   <p>We Do Not Make Gamers. We Make Gamers Better!</p>
   <small>InfernalBlaze Clan</small>
</blockquote>
<blockquote>
   <p>A Community is only as active as the members.</p>
   <small>InfernoKazama</small>
</blockquote>
<blockquote>
   <p>Wars may be fought with weapons, but they are won by men.</p>
   <small>ARMA 3</small>
</blockquote>
<blockquote>
   <p>Survive, Adapt, Win.</p>
   <small>ARMA 3</small>
</blockquote>
<blockquote>
   <p>Soldiers are only as good as the tools they possess.</p>
   <small>VORTEX1409</small>
</blockquote>
  </center></div>
  <hr>
  <center><h2 class="font">Live Broadcast</h2></center>
  <div class="well">   <center>     
<object type="application/x-shockwave-flash" height="378" width="620" id="live_embed_player_flash" data="http://www.twitch.tv/widgets/live_embed_player.swf?channel=ibclan" bgcolor="#000000"><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="always" /><param name="allowNetworking" value="all" /><param name="movie" value="http://www.twitch.tv/widgets/live_embed_player.swf" /><param name="flashvars" value="hostname=www.twitch.tv&channel=ibclan&auto_play=true&start_volume=25" /></object><a href="http://www.twitch.tv//ibclan" class="trk" style="padding:2px 0px 4px; display:block; width:345px; font-weight:normal; font-size:10px; text-decoration:underline; text-align:center;">Watch live video from IBClan on www.twitch.tv</a>
</center></div>



        </div><!--/span-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
         <div class="panel panel-danger">
              <div class="panel-heading">
                <h3 class="panel-title font">GAMES WE SUPPORT</h3>
              </div>
              <div class="panel-body">
                <center><table style="filter:alpha(opacity=100); opacity:1;" width="143" border="0"><tbody><tr>
<td width="32"><img src="http://www.infernalblaze.com/images/hceicon.png" alt="Halo PC &amp; CE" title="Halo PC &amp; CE" width="32" height="32" smartload="8"></td>
<td width="32"><img src="http://www.infernalblaze.com/images/woticon.png" alt="World Of Tanks" title="World Of Tanks" width="32" height="32"></td>
<td width="32"><img src="http://www.infernalblaze.com/images/wowpicon.png" alt="World Of Warplanes" title="World Of Warplanes" width="39" height="32" smartload="9"></td>
<td width="29"><img src="http://www.infernalblaze.com/images/wowsicon.gif" alt="World Of Warships" title="World Of Warships" width="32" height="32"></td></tr><tr>
<td width="29"><img src="http://fc06.deviantart.net/fs71/f/2012/264/3/f/arma_iii__icon__by_lnoir3l-d5fhs0u.png" alt="Armed Assault Series" title="Armed Assault Series" width="32" height="32"></td>
<td width="29"><img src="http://fc02.deviantart.net/fs71/f/2011/254/c/b/arma_2__oa_icon_05_by_papirnehezek-d49j0i2.png" alt="Armed Assault Series" title="Armed Assault Series" width="32" height="32"></td>
<td width="29"><img src="http://www.nimbleminds.eu/forum/icon/TribesAscend.png" alt="Tribes: Ascend" title="Tribes: Ascend" width="32" height="32"></td>
<td width="29"><img src="http://icondatabase.net/sites/default/files/icons/omnom-icons-remade-34499/omnom-icons-remade-minecraft-icon-34551.png" alt="Minecraft" title="Minecraft" width="32" height="32"></td>
</tr></tbody></table></center>
              </div>
         </div>
         
         <div class="panel panel-danger">
              <div class="panel-heading">
                <h3 class="panel-title font">Share Our CLan</h3>
              </div>
              <div class="panel-body">
                <div class="text-center">
        <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
        <a class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>
        <a class="btn btn-social-icon btn-google-plus"><i class="fa fa-google-plus"></i></a>
        <a class="btn btn-social-icon btn-tumblr"><i class="fa fa-tumblr"></i></a>
        <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
      </div>
              </div>
         </div>
         
         
         <div class="panel panel-danger">
              <div class="panel-heading">
                <h3 class="panel-title font">DONATIONS</h3>
              </div>
              <div class="panel-body">
                <center>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top"> <input type="hidden" name="cmd" value="_s-xclick"><input type="hidden" name="hosted_button_id" value="ZF972ACV6ZJ9Q"><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"><img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1" smartload="10">
</form> Donate to the Infernal Blaze Gaming Community today! All donations we receive will help cover server and website costs that the clan has. We are non-profit.</center>
              </div>
         </div>
         <div class="panel panel-danger">
              <div class="panel-heading">
                <h3 class="panel-title font">Our Ranks</h3>
              </div>
              <div class="panel-body"><center>
                <a data-toggle="tooltip" title="«IB» Administrators"><img src="http://infernalblaze.com/forum/images/ranks/Admin1.png"></a>
                <a data-toggle="tooltip" title="‹IB› Moderators"><img src="http://infernalblaze.com/forum/images/ranks/MOD1.png"></a>
                <a data-toggle="tooltip" title="{IB} Moderators in Training"><img src="http://infernalblaze.com/forum/images/ranks/MIT.png"></a>
                <a data-toggle="tooltip" title="{IB} Veterans"><img src="http://infernalblaze.com/forum/images/ranks/veteran1.png"></a>
                <a data-toggle="tooltip" title="{IB} Members"><img src="http://infernalblaze.com/forum/images/ranks/member1.png"></a>
                <a data-toggle="tooltip" title="-IB- Recruits"><img src="http://infernalblaze.com/forum/images/ranks/recruit1.png"></a>
              </center></div>
         </div>
         
         
         
         <div class="panel panel-danger">
              <div class="panel-heading">
                <h3 class="panel-title font">Recent Visitors</h3>
              </div>
              <div class="panel-body"><center>
                <script type="text/javascript" src="http://jj.revolvermaps.com/2/1.js?i=9iamdwb2wr6&amp;s=190&amp;m=0&amp;v=true&amp;r=false&amp;b=000000&amp;n=false&amp;c=ff0000" async="async"></script>
                
              </center></div>
         </div>
         
         <div class="panel panel-danger">
              <div class="panel-heading">
                <h3 class="panel-title font">Our Allies</h3>
              </div>
              <div class="panel-body"><center>
                
                
              </center></div>
         </div>	
         
         <div class="panel panel-danger">
              <div class="panel-heading">
                <h3 class="panel-title font"></h3>
              </div>
              <div class="panel-body"><center>
                
                
              </center></div>
         </div>	
         
         
         
        </div><!--/span-->
      </div><!--/row-->



  

    </div>
         
      
      
      

<!--CONTENT END-->       
      </div>


<?php include 'footer.php'; ?>