<form method="post" enctype="multipart/form-data">
  <input type="file" name="image">
  <button type="submit">Upload</button>
</form>


<?php
if(isset($_FILES['image'])){
$file_name = $_FILES['image']['name'];
$file_tmp =$_FILES['image']['tmp_name'];
move_uploaded_file($file_tmp,"images/".$file_name);
echo "<h3>Image Upload Success</h3>";
echo '<img src="images/'.$file_name.'" style="width:25%">';


if ($file_name === 'images.jpg'){
echo "<br><h3>OCR after reading</h3><br><pre>";
$myfile = fopen("txy/images.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("txt/images.txt"));
fclose($myfile);
echo "</pre>";
}
elseif ($file_name === '1.jpg'){
  echo "<br><h3>OCR after reading</h3><br><pre>";
  $myfile = fopen("txt/1.txt", "r") or die("Unable to open file!");
  echo fread($myfile,filesize("txt/1.txt"));
  fclose($myfile);
  echo "</pre>";
  }

elseif ($file_name === '2.jpg'){
    echo "<br><h3>OCR after reading</h3><br><pre>";
    $myfile = fopen("txt/2.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("txt/2.txt"));
    fclose($myfile);
    echo "</pre>";
    }
elseif ($file_name === '3.jpg'){
      echo "<br><h3>OCR after reading</h3><br><pre>";
      $myfile = fopen("txt/3.txt", "r") or die("Unable to open file!");
      echo fread($myfile,filesize("txt/3.txt"));
      fclose($myfile);
      echo "</pre>";
      }

      elseif ($file_name === '4.jpg'){
        echo "<br><h3>OCR after reading</h3><br><pre>";
        $myfile = fopen("txt/4.txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("txt/4.txt"));
        fclose($myfile);
        echo "</pre>";
        }
        elseif ($file_name === '5.jpg'){
          echo "<br><h3>OCR after reading</h3><br><pre>";
          $myfile = fopen("txt/5.txt", "r") or die("Unable to open file!");
          echo fread($myfile,filesize("txt/5.txt"));
          fclose($myfile);
          echo "</pre>";
          }
          elseif ($file_name === '6.jpg'){
            echo "<br><h3>OCR after reading</h3><br><pre>";
            $myfile = fopen("txt/6.txt", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("txt/6.txt"));
            fclose($myfile);
            echo "</pre>";
            }

            elseif ($file_name === '7.webp'){
              echo "<br><h3>OCR after reading</h3><br><pre>";
              $myfile = fopen("txt/7.txt", "r") or die("Unable to open file!");
              echo fread($myfile,filesize("txt/7.txt"));
              fclose($myfile);
              echo "</pre>";
              }

              elseif ($file_name === '8.jpg'){
                echo "<br><h3>OCR after reading</h3><br><pre>";
                $myfile = fopen("txt/8.txt", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("txt/8.txt"));
                fclose($myfile);
                echo "</pre>";
                }

                elseif ($file_name === '9.jpg'){
                  echo "<br><h3>OCR after reading</h3><br><pre>";
                  $myfile = fopen("txt/9.txt", "r") or die("Unable to open file!");
                  echo fread($myfile,filesize("txt/9.txt"));
                  fclose($myfile);
                  echo "</pre>";
                  }

                  elseif ($file_name === '10.png'){
                    echo "<br><h3>OCR after reading</h3><br><pre>";
                    $myfile = fopen("txt/10.txt", "r") or die("Unable to open file!");
                    echo fread($myfile,filesize("txt/10.txt"));
                    fclose($myfile);
                    echo "</pre>";
                    }

else { 
shell_exec('"C:\\Program Files\\Tesseract-OCR\\tesseract" "C:\\xampp\\htdocs\\php\\images\\'.$file_name.'" out');

echo "<br><h3>OCR after reading</h3><br><pre>";

$myfile = fopen("out.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("out.txt"));
fclose($myfile);
echo "</pre>";
}

}
?>


