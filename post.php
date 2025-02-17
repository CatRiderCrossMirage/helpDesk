<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- start bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- https://icons.getbootstrap.com/ -->
    <link rel = "icon" type = "image/png" size="16x16" href = "pic/html.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />

    <title>IT Help</title>
</head>
<body>
    <div class="container">

    <form action="upload.php" class="offset-md-3 col-md-6" method="post" enctype="multipart/form-data">
        <!-- post here -->
        <div class="row m-2">
            <div class="form-outline">
                <input type="text" id="form1" name="topic" class="form-control"></input>
                <label for="form1" class="form-label">กรุณากรอกหัวข้อที่ถาม</label>
            </div>
        </div>
        <div class="row m-2">
            <div class="form-outline">
                <input type="text" id="form1" name="writher" class="form-control"></input>
                <label for="form1" class="form-label">กรุณากรอกชื่อ</label>
            </div>
        </div>
        <div class="row m-2">
            <div class="form-outline ">
                <textarea id="form10" name="content"  
                        class="md-textarea form-control" rows="5"></textarea>
                <label for="form10" class="form-label"><i class="bi bi-pencil"></i>คุณต้องการถามอะไร?</label>
            </div>
        </div>
        <!-- upload here -->
        <div class="row m-2">
            <input type="file" id="file-input" name="image[]" 
                    onchange="preview()" multiple>
            <label for="file-input" style="background-color: #025bee;">
                <i class="fas fa-image fa-lg"></i> &nbsp;Choose A Photo
            </label>
            <p id="num-of-files">No Files Chosen</p>
            <div id="images"></div>

        </div>
        <!-- button -->
        <div class="row m-2">
                <button type="submit" name="submit" class="btn btn-success btn-lg">Post</button>
        </div>

    </form>
    
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
    <script src="js/script.js"></script>
</body>
</html>