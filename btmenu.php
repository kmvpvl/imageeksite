<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" style="color: white;">I'm a geek <img src="img/logoimageek.png" alt="Logo" style="width:30px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a id="btn-schedule" class="nav-link" href="#">РАСПИСАНИЕ</a>
      </li>
      <li class="nav-item">
        <a id="btn-desc" class="nav-link" href="#">ОПИСАНИЕ</a>
      </li>
      <li class="nav-item">
        <a id="btn-howmuch" class="nav-link" href="#">СКОЛЬКО СТОИТ?</a>
      </li>    
      <!--li class="nav-item">
        <a class="nav-link" href="#">ДОСТУП</a>
      </li-->    
    </ul>
  </div>  
</nav>
<script>
var _cur_content;
var _cur_navigate;
function scrollToChapter(_newChapter){
/*    $('#content-div').animate({
        scrollTop: $(_newChapter).offset().top
    }, 2000);  */  
} 
$("#btn-howmuch").bind('click', function() {
    loadContent("howmuch.php");
    scrollToChapter("#section-howmuch");

});
$("#btn-desc").bind('click', function() {
    loadContent("desc.php");
    scrollToChapter("#section-desc");
});
$("#btn-schedule").bind('click', function() {
    loadContent("schedule.php");
    scrollToChapter("#section-schedule");
});
</script>

