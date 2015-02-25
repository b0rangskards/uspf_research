<header class="header">
    <div class="shapes"></div>
       
        <h1 class="headline" data-left="14.41%">
            <a href="#">Center for Research</a>
        </h1>        
        <h2 class="slogan" data-left="36.09%">University of Southern Philippines Foundation</h2>

<nav class="nav">
     <ul class="hmenu">
        <li>
            {{ link_to_route('home', 'Home');  }}
        </li>
        <li>
            {{ link_to_route('compilation', 'Research Compilation');  }}
        </li>
        <li>
            {{ link_to_route('gallery', 'Photo Gallery');  }}
        </li>
        <li>
           {{ link_to_route('staff', 'Staff');  }}
        </li>
        <li>
           {{ link_to_route('aboutus', 'About USPF Research');  }}
        </li>
        <li>
            {{ link_to_route('contactus', 'Contact Us');  }}
        </li>
        <li>
            <a href="logout.php">
                <?php //echo $_SESSION['firstname']; ?>
                <small style="color:red;">Sign out</small>
            </a>
        </li>
    </ul> 
</nav>

</header>