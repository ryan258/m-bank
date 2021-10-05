<?php require_once('../../../private/initialize.php'); ?>

<?php $id = $_GET['id'] ?? '1'; ?>
<?php $page_title = 'Show Staff Page: ' . $id; ?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>

  
  <div id="content">
    <a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a>
  
    <div class="page show">
      <h1>Page: <?php echo h($id); ?></h1>
  
      <div class="actions">
        <a class="action" href="<?php echo url_for('/staff/pages/edit.php?id=' . h(u($id))); ?>">Edit</a>
        <a class="action" href="<?php echo url_for('/staff/pages/delete.php?id=' . h(u($id))); ?>">Delete</a>
      </div>
  
      <div class="attributes">
        <dl>
          <dt>Subject ID</dt>
          <dd><?php echo h($id); ?></dd>
        </dl>
      </div>
    </div>
  </div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>