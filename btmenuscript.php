
<a id="ref-schedule" href="#">РАСПИСАНИЕ</a>
<a id="ref-howmuch" href="#">СКОЛЬКО СТОИТ?</a>
<a id="ref-desc" href="#">ОПИСАНИЕ</a>
<a id="ref-modules" href="#">МОДУЛИ</a>
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
</script>