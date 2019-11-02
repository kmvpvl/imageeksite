
<a id="ref-schedule" href="#" style="color:black;">РАСПИСАНИЕ</a>
<a id="ref-howmuch" href="#" style="color:black;">СКОЛЬКО СТОИТ?</a>
<a id="ref-desc" href="#" style="color:black;">ОПИСАНИЕ</a>
<a id="ref-modules" href="#" style="color:black;">МОДУЛИ</a>
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