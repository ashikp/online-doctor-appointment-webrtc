<?php 
if(!isset($object)){
    include_once 'class/Appointment.php';
    $object = new Appointment;
}

?>
<div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
    <ul class="navigation clearfix">
    <li class="dropdown">
        <a href="index.php">Home</a>
    </li>
    <li class="dropdown">
        <a href="about-us.php">About</a>
    </li>
    <li class="dropdown">
        <a href="doctors.php">Doctors</a>
    </li>
    <li class="dropdown">
        <a href="<?php echo $object->base_url?>#timeline">Appoinment Schedule</a>
    </li>
    <li class="dropdown">
        <a href="#">Doctor's Blog</a>
    </li>
    <li>
        <a href="login.php">Login/Register</a>
    </li>
    </ul>
</div>