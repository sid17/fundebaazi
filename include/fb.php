<script src="js/jquery-1.10.2.js"></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1401736050078489&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<style >
#sidebar-wrapper 
{
    margin-left: 0px;
    left: 0px;
    width: 300px;
    background: #222;
    position: fixed;
    height: 100%;
    z-index: 10000;
    transition: all .6s ease 0s;
}
#sidebar-wrapper.active  {
    left: -500px;
}
#main_icon
{
    float:right;
   padding-right: 65px;
   padding-top:20px;
}
.sub_icon
{
    float:right;
   padding-right: 65px;
   padding-top:10px;
}
@media (max-width:767px) {
    #wrapper {
    padding-left: 70px;
    transition: all .4s ease 0s;
}
#sidebar-wrapper {
    left: 0px;
}
 #sidebar-wrapper.active {
    left: -150px;
    width: 150px;
    transition: all .1s ease 0s;
}
}
</style>
<div style="position:fixed;height:100%;width:5%;top:50%;left:0px;" id="toggle-side"></div>
<div id="sidebar-wrapper" class="active">
<div class="fb-like" data-href="https://www.facebook.com/FundeBaazi" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
<div class="fb-like-box" data-href="https://www.facebook.com/FundeBaazi" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
</div>
<!--<li class="sidebar-brand"><span id="menu-toggle"><span id="main_icon" class="glyphicon glyphicon-align-justify"></span></span></li>-->
<script>
$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
});

$( "#toggle-side" ).mouseenter(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
});

$( "#sidebar-wrapper" ).mouseleave(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
});
</script>

