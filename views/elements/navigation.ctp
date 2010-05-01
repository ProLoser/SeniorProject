<ul>
    <li><?php echo $html->link(__('Home', true),'/',array('title' => 'Home')); ?></li>
    <li><?php echo $html->link(__('Programs', true),array('controller'=>'programs','action'=>'display','index'),array('title' => 'Programs'));?>
        <ul>
            <li><?php echo $html->link(__('Australia', true),array('controller'=>'programs','action'=>'Australia'),array('title' => 'Australia'));?></li>
            <li><a href="page-gallery.html">Costa Rica</a></li>
            <li><a href="fullwidth.html">Dominican Republic</a></li>
            <li><a href="page.html">Eastern Europe</a></li>
            <li><a href="page.html">Ecuador</a></li>
            <li><a href="page.html">New Zealand</a></li>
            <li><a href="page.html">South Africa</a></li>
            <li><a href="page.html">Thailand</a></li>
        </ul>
    </li>
    <li><a href="adv-main.html">Adventure</a>
        <ul>
            <li><a href="adv-Aus.html">Australia</a></li>
            <li><a href="adv-CosR.html">Costa Rica</a></li>
            <li><a href="adv-DomR.html">Dominican Republic</a></li>
            <li><a href="adv-EaEu.html">Eastern Europe</a></li>
            <li><a href="adv-Ecua.html">Ecuador</a></li>
            <li><a href="adv-NewZ.html">New Zealand</a></li>
            <li><a href="adv-SouAfr.html">South Africa</a></li>
            <li><a href="adv-Thai.html">Thailand</a></li>
        </ul>
    </li>
    <li><a href="#">Volunteer</a>
        <ul>
            <li><a href="../volunteer/vol-Aus.html">Australia</a></li>
            <li><a href="../volunteer/vol-CosR.html">Costa Rica</a></li>
            <li><a href="../volunteer/vol-DomR.html">Dominican Republic</a></li>
            <li><a href="../volunteer/vol-EaEu.html">Eastern Europe</a></li>
            <li><a href="../volunteer/vol-Ecua.html">Ecuador</a></li>
            <li><a href="../volunteer/vol-NewZ.html">New Zealand</a></li>
            <li><a href="../volunteer/vol-SouAfr.html">South Africa</a></li>
            <li><a href="../volunteer/vol-Thai.html">Thailand</a></li>
        </ul>
    </li>
    <li><a href="page.html">ISV Family</a>
        <ul>
            <li><a href="../sb-classic/index.html">Applicant</a></li>
            <li><a href="../sb-dark/index.html">Contracted Student</a></li>
            <li><a href="../sb-light-blue/index.html">Alumni</a></li>
            <li><a href="../sb-light-red">Campus Clubs</a></li>
            <li><a href="../sb-light-green">Fundraising</a></li>
            <li><a href="../sb-dark-blue">ISV Foundation</a></li>
            <li><a href="../sb-dark-red">About ISV</a></li>
        </ul>
    </li>
    <li><?php echo $html->link(__('Apply Now', true),array('controller'=>'users','action'=>'add'),array('title' => 'Apply Now'));?></li>
</ul>