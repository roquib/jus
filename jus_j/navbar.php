<div id="navi_content">
    <ul>

        <li><a href="index.php" class="<?php if ($_SESSION['tab'] == 'home') {
                                            echo "active";
                                        } else {
                                            echo  '';
                                        }  ?>">Home</a></li>
        <li><a href="research.php" class="<?php if ($_SESSION['tab'] == 'research') {
                                                echo "active";
                                            } else {
                                                echo  '';
                                            }  ?>">Research</a></li>
        <li><a href="publication.php">Publication</a></li>
        <li><a href="supervision.php">Supervision</a></li>
        <li><a href="teaching.php">Teaching</a></li>
        <li><a href="awards.php">Awards & Achievements</a></li>

        <li><a href="experiences.php">Professional Experiences</a></li>
        <li><a href="links.php">Links</a></li>

        <li><a href="gallery.php">Gallery</a></li>
        <li class="dropdown">
            <a class="dropbtn" href="#">More
                <i class="fa fa-caret-down"></i>
            </a>
            <div class="dropdown-content">
                <a href="membership.php">Membership</a>
                <a href="reviewer.php">Reviewer</a>
                <a href="OrganActive.php">Organizational Activities</a>
                <a href="consultancy.php">Consultancy</a>
                <a href="examinar.php">Examinar</a>
                <a href="invitedlecturer.php">Invited Lecturer</a>
                <a href="speaker.php">Speaker Presenter</a>
            </div>
        </li>
    </ul>
</div>