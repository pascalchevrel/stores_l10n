     <!-- Main jumbotron for a primary marketing message or call to action -->
<div class="page-header">
    <h1>Dashboard and API for Google Play / Apple Appstore listings translation</h1>
</div>
<ul id="filters" class="nav nav-pills">
    <li class="filter active"><a href="#play_release" id="play_release">Google Play Release</a></li>
    <li class="filter"><a href="#play_beta" id="play_beta">Google Play beta</a></li>
</ul>

<?=$stores['play']['release']?>
<?=$stores['play']['beta']?>

<script src="media/assets/jquery/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('table').hide();
    $('#play_release_table').show();
    $('#filters a').click(function(e) {
        e.preventDefault();
        $('#filters li').removeClass('active');
        $('table').hide();
        $('#' + e.target.id + '_table').show();
        $('#' + e.target.id).parent().addClass('active');
    });
    // We want URL anchors to also work as filters
    var anchor = location.hash.substring(1);
    if (anchor !== '') {
        $('#' + anchor).click();
    } else {
        $('#filters li').removeClass('active');
        $('#play_release').parent().addClass('active');
    }
});
</script>
