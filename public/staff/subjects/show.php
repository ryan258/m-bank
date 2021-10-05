<?php require_once('../../../private/initialize.php'); ?>

<?php
// $id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = $_GET['id'] ?? '1'; // PHP > 7.0
echo h($id);
?>

<?php $page_title = 'Show Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject show">
    <h1>Subject ID: <?php echo h($id); ?></h1>
  </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>