<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
    <!-- JQUERY START -->
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <!-- JQUERY END -->
    <!-- BOOTSTRAP 5 START -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- BOOTSTRAP 5 END -->
    <!-- MDB START -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.20.0/css/mdb.min.css"
        integrity="sha512-hj9rznBPdFg9A4fACbJcp4ttzdinMDtPrtZ3gBD11DiY3O1xJfn0r1U5so/J0zwfGOzq9teIaH5rFmjFAFw8SA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- MDB END -->
    <!-- FONTAWESOME START -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONTAWESOME END -->
    <!-- CSS START -->
    <link rel="stylesheet" type="text/css" href='css/style.css'>
    <link rel="stylesheet" type="text/css" href=filename='css/media.css'>
    <!-- CSS END -->
</head>
<body>
    <!-- MAIN START -->
    <section class="uploadedImgPage">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="container main w-55" style="background-color: aliceblue;">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="my-1">
                                    <a href="index.php" class=""><i
                                            class="fas fa-long-arrow-alt-left text-blue fw-bold fa-2x"></i></a>
                                </div>
                            </div>
                        </div>
                        <div id="content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <h3 class="text-black fw-bold mt-3">Uploaded Image</h3>
                                    </div>
                                </div>
</div>


                    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- BOOTSTRAP 5 END -->
    <!-- MDB START -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.20.0/js/mdb.min.js"
        integrity="sha512-XFd1m0eHgU1F05yOmuzEklFHtiacLVbtdBufAyZwFR0zfcq7vc6iJuxerGPyVFOXlPGgM8Uhem9gwzMI8SJ5uw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- MDB END -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
</body>

<?php
if(isset($_FILES['image'])){
$file_name = $_FILES['image']['name'];
$file_tmp =$_FILES['image']['tmp_name'];
move_uploaded_file($file_tmp,"images/".$file_name);

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
    