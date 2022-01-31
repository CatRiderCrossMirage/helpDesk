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
    <link rel="stylesheet" type="text/css" href="assets/style.css">

    <title>IT Help</title>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="####">
        <img
            src="pic/itTraining.png"
            height="70"
            alt=""
            loading="lazy"
            style="margin-top: -1px;"
        />
        </a>
    <button 
        class="navbar-toggler" 
        type="button" 
        data-toggle="collapse" 
        data-target="#navbarTogglerDemo02" 
        aria-controls="navbarTogglerDemo02" 
        aria-expanded="false" 
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div 
        class="collapse navbar-collapse" 
        id="navbarTogglerDemo02">
        <ul class="navbar-nav" style="margin-left:auto;">
            <li class="nav-item dropdown">
                <button 
                    class="btn btn-light nav-link dropdown-toggle" 
                    type="button"
                    role="button" 
                    id="navDropdown" 
                    data-toggle="dropdown" 
                    aria-haspopup="true" 
                    aria-expanded="false"
                >
                    Program filter
                </button>

                <div class="dropdown-menu" aria-labelledby="navDropdown">
                    <a class="dropdown-item" href="#">
                        <img
                            src="pic/autocad-144.png"
                            height="20"
                            alt=""
                            loading="lazy"
                            style="margin-left: 0.5rem;"
                        >
                        Autocad
                    </a>
                    <a class="dropdown-item" href="#">
                        <img
                            src="pic/archiCAD.png"
                            height="20"
                            alt=""
                            loading="lazy"
                            style="margin-left: 0.5rem;"
                        >
                        ArchiCAD
                    </a>
                    <a class="dropdown-item" href="#">
                        <img
                            src="pic/autoDeskRevit.png"
                            height="20"
                            alt=""
                            loading="lazy"
                            style="margin-left: 0.5rem;"
                        >
                        AutoDeskRevit
                    </a>
                    <a class="dropdown-item" href="#">
                        <img
                            src="pic/Enscape.png"
                            height="20"
                            alt=""
                            loading="lazy"
                            style="margin-left: 0.5rem;"
                        >
                        Enscape
                    </a><a class="dropdown-item" href="#">
                        <img
                            src="pic/lumion.jpg"
                            height="20"
                            alt=""
                            loading="lazy"
                            style="margin-left: 0.5rem;"
                        >
                        Lumion
                    </a>
                    <a class="dropdown-item" href="#">
                        <img
                            src="pic/sketchup.png"
                            height="20"
                            alt=""
                            loading="lazy"
                            style="margin-left: 0.5rem;"
                        >
                        Sketchup
                    </a><a class="dropdown-item" href="#">
                        <img
                            src="pic/photoshop.png"
                            height="20"
                            alt=""
                            loading="lazy"
                            style="margin-left: 0.5rem;"
                        >
                        Photoshop
                    </a>
                    <a class="dropdown-item" href="#">
                        <img
                            src="pic/Illustrator.jpg"
                            height="20"
                            alt=""
                            loading="lazy"
                            style="margin-left: 0.5rem;"
                        >
                        Illustrator
                    </a>
                    <a class="dropdown-item border-top" href="#">
                        <i class="bi bi-folder-fill"></i> Other
                    </a>
                </div>
            </li>
        </ul>
        
        <form class="form-inline d-flex input-group w-auto" style="margin-left:auto;">
            <input
                type="search"
                class="form-control mr-sm-2 rounded"
                placeholder="Search"
                aria-label="Search"
                aria-describedby="search-addon"
                id="navbarNav"
            />
            <button
                class="btn btn-primary"
                id="navbarNav"
            >
                <i class="bi bi-search"></i>
            </button>
            &nbsp;
            <a href="####">
                <button
                    type="button"
                    class="btn btn-success"
                    id="navbarNav"
                >
                <i class="bi bi-box-arrow-in-right"></i>  Log-in
                <!-- <i class="bi bi-box-arrow-in-left"></i> Log-out -->
                </button>
            </a>
            &nbsp;
            <a href="post.php">
                <button
                    type="button"
                    class="btn btn-primary"
                    id="navbarNav"
                >
                <i class="bi bi-pencil-square"></i>  POST
                <!-- <i class="bi bi-box-arrow-in-left"></i> Log-out -->
                </button>
            </a>&nbsp;
        </form>
    </div>
    </nav>
    <!-- content -->
    <!-- question NEW! -->
    <div class="row">

        <button
            type="button"
            class="btn btn-sm btn-outline-warning  m-2"
            style="width:100%;hight:50px;"
        >
            <i class="bi bi-question-lg"></i>
                anything can be content here <br>
                fdagdfgdfgdfsadsfdsafsdafsdafsdafsafd
        </button>
        <!-- <div class="col-11 p-4 my-3 border-bottom">
                new question here
        </div> -->
        
        <button
            type="button"
            class="btn btn-sm btn-outline-warning  mb-2"
            style="width:100%;hight:50px;"
        >
            <i class="bi bi-question-lg"></i>
                anything can be content here <br>
                fdagdfgdfgdfsadsfdsafsdafsdafsdafsafd
        </button>
        
        <button
            type="button"
            class="btn btn-sm btn-outline-warning  mb-2"
            style="width:100%;hight:50px;"
        >
            <i class="bi bi-question-lg"></i>
                anything can be content here <br>
                fdagdfgdfgdfs
        </button>
        
    <!-- question Answer! -->
    <!-- <i class="bi bi-check-square-fill">
        Maybe useful for you
        https://stackoverflow.com/questions/41574776/what-is-class-mb-0-in-bootstrap-4 
    -->
    <button
                type="button"
                class="btn btn-outline-success btn-sm mb-2"
                style="width:100%;hight:50px;"
            >
                <i class="bi bi-check-square-fill"></i>
                    anything can be content here <br>
                    fdagdfgdfgdfsadsfdsafsdafsdafsdafsafd
            </button>
    
</body>
</html>