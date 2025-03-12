<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#project-elements" aria-expanded="false" aria-controls="project-elements">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Projects</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="project-elements">
                <ul class="nav flex-column sub-menu rounded-bottom">
                    <li class="nav-item"><a class="nav-link" href="addProjects.php">Add Projeces</a></li>
                    <li class="nav-item"><a class="nav-link" href="viewProjects.php">View Projects</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#promo-elements" aria-expanded="false" aria-controls="promo-elements">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Promotions</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="promo-elements">
                <ul class="nav flex-column sub-menu rounded-bottom">
                    <li class="nav-item"><a class="nav-link" href="addPromotions.php">Add Promotions</a></li>
                    <li class="nav-item"><a class="nav-link" href="viewPromotions.php">View Promotions</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Training-elements" aria-expanded="false" aria-controls="Training-elements">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Training</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Training-elements">
                <ul class="nav flex-column sub-menu rounded-bottom">
                    <li class="nav-item"><a class="nav-link" href="addTrainings.php">Add Trainings</a></li>
                    <li class="nav-item"><a class="nav-link" href="viewTrainings.php">View Trainings</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Team-members" aria-expanded="false" aria-controls="Team-members">
                <!-- <i class="icon-columns menu-icon"></i> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" style="margin-right: 1rem;" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                </svg>
                <span class="menu-title">Team Members</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Team-members">
                <ul class="nav flex-column sub-menu rounded-bottom">
                    <li class="nav-item"><a class="nav-link" href="addTeam.php">Add Team Member</a></li>
                    <li class="nav-item"><a class="nav-link" href="viewTeam.php">View Team Member</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>