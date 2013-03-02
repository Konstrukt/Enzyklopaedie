<style = "text/css">
body
{
text-align:center;
}
</style>
<div class = "hero-unit">
<?php echo form_open("home/insert");?>
<input type = "text" name = "title" placeholder = "Titel...">
<br>
<textarea name = "artikel" placeholder = "Artikel"></textarea>
<br>
<input type = "text" name = "expansion" placeholder = "Zusatz Artikel...">
<br>
<input type = "text" name = "expansion2" placeholder = "Zusatz Artikel...#2">
<br>
<input type = "submit" value = "Absenden!" class = "btn">
</form>
<div class = "well">
<?php
if(isset($get))
{
echo "<ul>";
echo "Index";
foreach($get as $getall)
{
//echo "<li><a href='".$getall->title."'>".$getall->title."</a></li>";
echo "<li><a href='".$getall->ex1."'>".$getall->ex1."</a></li>";
echo "<li><a href='".$getall->ex2."'>".$getall->ex2."</a></li>";
}
}
?>
</ul>
</div>
</div>

<?php
if(isset($get))
{
foreach($get as $result)
{
echo "<div class = 'well'>";
echo "<h3>".$result->title."</h3>";
echo "<h4><u>Artikel</u></h4>";
echo "<b>".$result->artikel."</b>";
echo "<h4><u>Verwandte Themen</u></h4>";
echo "<p><a href='".$result->ex1."'>".$result->ex1."</a></p>";
echo "<p><a href='".$result->ex2."'>".$result->ex2."</a></p>";
echo "</div>";
}
}