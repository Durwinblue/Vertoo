<?php
$page_text_ID = 5;
include("header.php");
$page_text = DB::queryFirstField("SELECT value from settings where name=%s", 'sub_text_' . $lang);

?>
<div class="driver">
    <h4><?php echo texts(5, $lang); ?></h4>
    <p><?php echo $page_text;?></p>
</div>
<?php include("footer.php"); ?>