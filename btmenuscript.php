
<a id="ref-schedule" href="#">РАСПИСАНИЕ</a>
<a id="ref-howmuch" href="#">СКОЛЬКО СТОИТ?</a>
<a id="ref-desc" href="#">ОПИСАНИЕ</a>
<script>
$("#ref-howmuch").bind('click', function() {
    loadContent("howmuch");
});
$("#ref-desc").bind('click', function() {
    loadContent("desc");
});
$("#ref-schedule").bind('click', function() {
    loadContent("schedule");
});
</script>