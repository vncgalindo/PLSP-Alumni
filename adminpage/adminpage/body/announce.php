
<div class="col-sm-12 col-md-12 col-lg-12">
  <form method="post">
  <div class="card-body">
    <div class="form-group">
      <label for="inputName">Announcement Title</label>
      <input type="text" id="inputName" name="title" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="inputDescription">Content</label>
      <textarea id="inputDescription" name="content" class="form-control" rows="4" required></textarea>
    </div>
    <div class="form-group">
      <label for="inputProjectLeader">Announcement Date</label>
      <input type="text" id="inputProjectLeader" name="date" class="form-control" required>
    </div>
    <div class="row no-print">
      <div class="col-12">
        <button type="submit" name="new" class="btn btn-secondary float-right"><i class="fas fa-check"></i> 
        Submit
        </button>
      </div>
    </div>
  </div>
  </form>
</div>
<?php
if(isset($_POST['new']))
{
  $title = $_POST['title'];
  $content = $_POST['content'];
  $date = $_POST['date'];
  mysqli_query($conn, "INSERT INTO announcement (`title`, `content`, `date`) VALUES ('$title', '$content', '$date')");
  echo "
    <script>
        setTimeout(function(){
            document.getElementById('toast-container').style.display = 'none';
        }, 4000);
    </script>"; 
}
if(isset($_POST['new']))
{
?>
  <div id="toast-container" class="toast-top-right">
    <div class="toast toast-success" aria-live="polite">
      <div class="toast-message">Event successfully added</div>
    </div>
  </div>
  <?php
}
?>