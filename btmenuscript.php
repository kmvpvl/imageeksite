<div class="btn-group"><center>
<button type="button" class="btn btn-dark" id="ref-howmuch" style="margin: 3px 0px 0px 3px;">Сколько стоит?</button>
<button type="button" class="btn btn-warning" id="ref-where" style="margin: 3px 0px 0px 3px;">Где?</button> 
<button type="button" class="btn btn-secondary" id="ref-schedule" style="margin: 3px 0px 0px 3px;">Расписание</button> 
<button type="button" class="btn btn-info" id="ref-modules" style="margin: 3px 0px 0px 3px;">Модули</button>
<button type="button" class="btn btn-success" id="ref-desc" style="margin: 3px 0px 0px 3px;">Описание</button> 
</center>
</div>
<script>
$("#ref-howmuch").bind('click', function() {
    loadContent("howmuch.php");
});
$("#ref-desc").bind('click', function() {
    loadContent("desc.php");
});
$("#ref-schedule").bind('click', function() {
    loadContent("schedule.php");
});
$("#ref-modules").bind('click', function() {
    loadContent("courses.php");
});
$("#ref-where").bind('click', function() {
    loadContent("where.php");
});</script>