<?php
use Coffee\Placeholder\PlaceholderManager;
?>
<button id="hello-btn"> Click Here !!</button>

<?php PlaceholderManager::captureStart('to-end'); ?>
<script>
$( () => {
    $('#hello-btn').on('click', () => {
    alert("Button clicked");
});
});
</script>
<?php PlaceholderManager::captureEnd('to-end'); ?>

<?php PlaceholderManager::captureStart('to-end'); ?>
<script>
    alert("Page loaded");
</script>
<?php PlaceholderManager::captureEnd('to-end'); ?>