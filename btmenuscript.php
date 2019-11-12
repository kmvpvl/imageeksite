<div class="btn-group"><center>
<button type="button" class="btn btn-dark" id="ref-howmuch">Сколько стоит?</button>
<button type="button" class="btn btn-warning" id="ref-where">Где?</button> 
<button type="button" class="btn btn-secondary" id="ref-schedule">Расписание</button> 
<button type="button" class="btn btn-info" id="ref-modules">Модули</button>
<button type="button" class="btn btn-success" id="ref-desc">Описание</button> 
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