<?php
if ((function_exists('session_status')
    && session_status() !== PHP_SESSION_ACTIVE) || !session_id()) {
    session_start();
}
include './connect.php';
$result_users = mysqli_query($conn, "select * from academicians");
$result_degrees = mysqli_query($conn, "select * from degrees");
$result_researches = mysqli_query($conn, "select * from researches");
// print_r($result);
function findUserDegrees($id)
{
    global $conn;
    $sql = "select * from degrees where academician_id = '$id'";
    $result = mysqli_query($conn, $sql);
    $fetch_array = mysqli_fetch_all($result);
    return $fetch_array;
}
function findUserResearches($id)
{
    global $conn;
    $sql = "select * from researches where academician_id = '$id'";
    $result = mysqli_query($conn, $sql);
    $fetch_array = mysqli_fetch_all($result);
    return $fetch_array;
}

// print_r(findUser(1));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <title>Academician</title>
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
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#academic">Academic</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#career">Career</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#contact_us">Contact Us</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div id="home" class="container tab-pane active">
                    <br />
                    <h3>HOME</h3>
                    <p style="text-align: justify;">
                        The bachelor program B.Sc. (Eng.) in Computer Science & Engineering, offers the students a strong background in the core technical areas and exposure to the cutting-edge technologies where their engineering contribution will be utilized. The course involves study of computer architecture, computer systems and networks, theory and design of digital system and software engineering.
                    </p>
                    <p style="text-align: justify;">
                        Within the context of lifelong learning, the university will build on its national and international reputation for innovative student-centered programs that enable students from diverse backgrounds to achieve their educational goals. The university is committed to building up academic excellence through curriculum, teaching, scholarship and services designed to help build up knowledge-based society with ensuring quality education. Tailoring the moral values and nurturing latent power of students will be facilitated to obtain placement in job market in such a manner as is ethically justified, religiously attestable, culturally harmonious and intellectually competent.
                    </p>
                </div>
                <div id="academic" class="container tab-pane fade">
                    <br />
                    <?php while ($row = mysqli_fetch_array($result_users)) : ?>
                        <div class="row mb-2">
                            <div class="col-md-2" style="display:flex;justify-content: center;">
                                <img src="<?php echo $row['image']; ?>" alt="alt image" style="height:100px;width:100px;">
                                <!-- <div class="image" style="height:100px;width:100px;background-color: grey;"></div> -->
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-10">
                                        <table class="table table-sm">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="<?php echo ($row['academician_id'] == 1) ? '/jus_j/' : ''; ?>"><?php echo $row['name']; ?></a></td>
                                                    <td><?php echo $row['phone']; ?></td>
                                                    <td><?php echo $row['email']; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5"></div>
                            <div class="col-md-5">
                                <h5 style="display:flex;justify-content: center;">Degrees</h5 style="justify-content: center;">
                                <?php $find_user = findUserDegrees($row['academician_id']); ?>
                                <?php for ($i = 0; $i < count($find_user); $i++) : ?>
                                    <p>
                                        <?php echo $find_user[$i][1]; ?>
                                    </p>
                                <?php endfor; ?>
                                <h5 style="display:flex;justify-content: center;">Research</h5 style="justify-content: center;">
                                <?php $find_user = findUserResearches($row['academician_id']); ?>
                                <?php for ($i = 0; $i < count($find_user); $i++) : ?>
                                    <p>
                                        <?php echo $find_user[$i][1]; ?>
                                    </p>
                                <?php endfor; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div id="career" class="container tab-pane fade">
                    <br />
                    <h3>Career</h3>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque laudantium, totam rem aperiam.
                    </p>
                </div>
                <div id="contact_us" class="container tab-pane fade">
                    <br />
                    <h3>Contact Us</h3>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque laudantium, totam rem aperiam.
                    </p>
                </div>
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