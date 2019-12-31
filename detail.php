<?php
if ((function_exists('session_status')
    && session_status() !== PHP_SESSION_ACTIVE) || !session_id()) {
    session_start();
}
$id = $_GET['id'];
include './connect.php';
$result_users = mysqli_query($conn, "select * from academicians where academician_id='$id'");
$result_degrees = mysqli_query($conn, "select * from degrees where academician_id='$id'");
$result_researches = mysqli_query($conn, "select * from researches where academician_id='$id'");
function fetchArray($object)
{
    $result = mysqli_fetch_all($object);
    return $result;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Detail</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
</head>

<body>
    <div class="container-fluid">
        <div class="header" style="background-color: #45a1ff;">
            <div class="row">
                <div class="col-md-10">
                    <h6 class="display-4">Department Of CSE</h6>
                    <h4>School Of Engineering, Uttara University</h4>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-primary" href="/logout.php" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        logout
                    </a>

                    <form id="logout-form" action="/logout.php" method="POST" style="display: none;">
                    </form>
                </div>
            </div>
        </div>
        <div class="body" style="background-color: lightgrey;">
            <div id="academic">
                <br />
                <?php while ($row = mysqli_fetch_array($result_users)) : ?>
                    <div class="row mb-2" style="background-color: coral;">
                        <div class="col-md-2" style="display:flex;justify-content: center;">
                            <!-- <img src="" alt="alt image"> -->
                            <div class="image" style="height:100px;width:100px;background-color: grey;"></div>
                        </div>
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-md-2">
                                    <p>
                                        <h5>Name:</h5>
                                    </p>
                                    <p>
                                        Phone:
                                    </p>
                                    <p>
                                        Email:
                                    </p>
                                </div>
                                <div class="col-md-10">
                                    <p>
                                        <h5>
                                            <a href="detail.php?id=<?php echo $row['academician_id']; ?>"><?php echo $row['name']; ?></a>
                                        </h5>
                                    </p>
                                    <p><?php echo $row['phone']; ?></p>
                                    <p><?php echo $row['email']; ?></p>
                                    <p><?php echo $row['address']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                            <h5>Degrees</h5>
                            <?php $find_user = fetchArray($result_degrees); ?>
                            <?php for ($i = 0; $i < count($find_user); $i++) : ?>
                                <p>
                                    <?php echo $find_user[$i][1]; ?>
                                </p>
                            <?php endfor; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                            <h5>Research</h5>
                            <?php $find_user = fetchArray($result_researches); ?>
                            <?php for ($i = 0; $i < count($find_user); $i++) : ?>
                                <p>
                                    <?php echo $find_user[$i][1]; ?>
                                </p>
                            <?php endfor; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <footer style="
      display: flex;
    justify-content: center;
    padding: 5px;
    background-color: #45a1ff;
    color: #fff;
      ">
            <p>© 2019 JUS</p>
        </footer>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>