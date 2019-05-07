 <!-- <?php
 if (version_compare(PHP_VERSION, '5.6.0') >= 0) {
     echo ' [OK] PHP version is newer than 5.6: '.phpversion();
 } else {
     echo ' [ERROR] Your PHP version is too old for CKFinder 3.x.';
 }
 
 if (!function_exists('gd_info')) {
     echo ' [ERROR] GD extension is NOT enabled.';
 } else {
     echo ' [OK] GD extension is enabled.';
 }
 
 if (!function_exists('finfo_file')) {
     echo ' [ERROR] Fileinfo extension is NOT enabled.';
 } else {
     echo ' [OK] Fileinfo extension is enabled.';
 }
 ?>
<!DOCTYPE html>
<html>
 <head>
  <title>How to Upload Image using ckeditor in PHP</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
 </head>
 <body>
  <div class="container">
   <br />
   <h3 align="center">How to Upload Image using ckeditor in PHP</h3>
   <br />
   <div class="panel panel-default">
    <form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="panel-heading">
     <h3 class="panel-title">How to Upload Image using ckeditor in PHP</h3>
    </div>
    <div class="panel-body">
     <textarea name="content" id="content" class="form-control ckeditor"></textarea>
    </div>
    <div class="form-group">
      <button type="submit" name="submit" class="btn btn-primary form-control">Submit</button>
    </div>
    </form>
   </div>
  </div>

  <div class="container" style="margin-top:50px;">
    <div class="row">
      <div class="col-md-9">
        <?php
        $conn=mysqli_connect('localhost','root','','apa');
        $query=$conn->query("SELECT * FROM content"); 
        ?>
        <?php while($loop=mysqli_fetch_assoc($query)):?>

          <?= $loop['content'];?>

        <?php endwhile; ?>
      </div>
    </div>    
  </div>
 </body>
</html>

<script>
 CKEDITOR.replace( 'content', {
  height: 300,
  filebrowserUploadUrl: "upload.php"
 });
</script> -->


<!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <title>CKEditor 5 Integration Example</title>
 </head>
 <body>
     <div id="editor"></div>
 
     <script src="ckeditor/ckeditor.js"></script>
     <script src="/ckfinder/ckfinder.js"></script>
     <script type="text/javascript">
 
     ClassicEditor
         .create( document.querySelector( '#editor' ), {
             ckfinder: {
                 uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
             },
             toolbar: [ 'ckfinder', 'imageUpload', '|', 'heading', '|', 'bold', 'italic', '|', 'undo', 'redo' ]
         } )
         .catch( function( error ) {
             console.error( error );
         } );
 
     </script>
 </body>
 </html>