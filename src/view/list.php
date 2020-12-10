<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">StudentManager</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">List Student <span class="sr-only">(current)</span></a>
            </li>
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="index.php?page=scorelist">Bang Diem</a>-->
<!--            </li>-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<div class="col-4"><a href="index.php?page=add" class="btn btn-success">Add Student</a>
    <a href="index.php?page=scorelist" class="btn btn-success">Add Score</a></div>
<!--<a href="index.php?page=addscore" class="btn btn-success">Add Score</a></div>-->

<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Ma sinh vien</th>
        <th scope="col">Ten</th>
        <th scope="col">Dien thoai</th>
        <th scope="col">Dia chi</th>
        <th scope="col">Diem Toan</th>
        <th scope="col">Diem Van</th>
        <th scope="col">Diem Anh</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($sinhviens as $key=>$sinhvien):?>
        <tr>
            <th scope="row"><?php echo $key+1?></th>
            <td><?php echo $sinhvien['masinhvien']?></td>
            <td><?php echo $sinhvien['name']?></td>
            <td><?php echo $sinhvien['phone']?></td>
            <td><?php echo $sinhvien['address']?></td>
            <td><?php echo $sinhvien['diemtoan']?></td>
            <td><?php echo $sinhvien['diemvan']?></td>
            <td><?php echo $sinhvien['diemanh']?></td>
            <td><a href="index.php?page=delete&diemthiid=<?php echo $sinhvien['diemthiID'] ?>&sinhvienid=<?php echo $sinhvien['sinhvienID'] ?>" onclick="return confirm('Are you sure')" class="btn btn-danger">Delete</a></td>

        </tr>
    <?php endforeach?>
    </tbody>
</table>
<footer class="page-footer font-small mdb-color lighten-3 pt-4">


    <!-- Footer Elements -->
    <div class="container">

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-lg-2 col-md-12 mb-4">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-2 col-md-6 mb-4">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(78).jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-2 col-md-6 mb-4">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(79).jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-2 col-md-12 mb-4">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(81).jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-2 col-md-6 mb-4">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(82).jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-2 col-md-6 mb-4">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(84).jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>

    <footer class="footer bg-dark text-white shape-parent overflow-hidden text-center pt-160 pb-60 ">
        <div class="footer-copyright text-center py-3">
            <div class="footer-copyright mb-5">© Student Manager 2020-2021</div>
        </div>
        <!--    <div class="footer-copyright text-center py-3" style="background-color: #343a40; color: white">© Student Manager 2020-2021</div>-->
    </footer>
    <!-- Footer Elements -->

    <!-- Copyright -->

    <!-- Copyright -->


</footer>

</body>
</html>

<!-- Footer -->

<!-- Footer -->
