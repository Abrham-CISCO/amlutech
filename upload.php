<title>Processing the uploaded file</title>
<H1>The file have been uploaded</H1>
<?php move_uploaded_file($_FILES['uploadFile']['tmp_name'],"{$_FILES['uploadFile']['name']}")?>