<style = "text/css">
body
{
text-align:center;
}
</style>
<div class = "hero-unit">
<?php echo form_open("home/insert");?>
<input type = "text" name = "title" placeholder = "Titel..." value = "Manguste" disabled>
<br>
<textarea name = "artikel" placeholder = "Artikel"></textarea>
<br>
<input type = "text" name = "expansion" placeholder = "Zusatz Artikel...">
<br>
<input type = "text" name = "expansion2" placeholder = "Zusatz Artikel...#2">
<br>
<input type = "submit" value = "Absenden!" class = "btn">
</form>
</div>

<?php
if(isset($get))
{
foreach($get as $result)
{
echo "<div class = 'well'>";
echo "<h5>Titel</h5>";
echo "<p>".$result->title."</p>";
echo "<h4>Artikel</h4>";
echo "<p>".$result->artikel."</p>";
echo "<h4>Verwandte Themen</h4>";
echo "<p><a href='".$result->ex1."'>".$result->ex1."</a></p>";
echo "<p><a href='".$result->ex2."'>".$result->ex2."</a></p>";
echo "</div>";
}
}