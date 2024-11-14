

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primary Admin Page</title>

    <link rel="stylesheet" href="{{ asset('css/header.css')}}">
    <link rel="stylesheet" href="{{ asset('css/primary_content.css')}}">
    
</head>
<body>
    <div class = "pa_header">
        <div class ="left-section">
            <img class = "nott_logo"
            src="image/logo/nottingham_logo.png">
        </div>

        <div class="middle-section">
            <button type="button" class="nav-button">
                <img src="image/icons/home_page.jpg" alt="Home Icon">
                Home
            </button>
            <button type="button" class="nav-button">
                <img src="image/icons/dashboard.png" alt="Dashboard Icon">
                Dashboard
            </button>
            <button type="button" class="nav-button">
                <img src="image/icons/report.png" alt="Report Icon">
                Report
            </button>
            <button type="button" class="nav-button more-button">
                More 
                <span class="arrow">▼</span>
            </button>
        </div>

        <div class = "right-section">
            <p>Hi! Raymond <p>
            <img class = "users_photo"
            src="image/users/panda.jpeg">
        </div>
    </div> 

    <div class="content-area">
        <div class="searching_box">
            <div class="filter-group">
                <div class="filter-label">Faculty</div>
                <div class="filter-select">
                    <img src="image/searching_box/faculty.png" alt="Faculty Icon" class="filter-icon">
                    Select Faculty
                    <span class="arrow">▼</span>
                </div>
            </div>
            <div class="filter-group">
                <div class="filter-label">Dept / School</div>
                <div class="filter-select">
                    <img src="image/searching_box/course.png" alt="Course Icon" class="filter-icon">
                    Select Dept / School
                    <span class="arrow">▼</span>
                </div>
            </div>
            <div class="filter-group">
                <div class="filter-label">Programme</div>
                <div class="filter-select">
                    <img src="image/searching_box/course.png" alt="Course Icon" class="filter-icon">
                    Select Programme
                    <span class="arrow">▼</span>
                </div>
            </div>
            <div class="filter-group">
                <div class="filter-label">Module</div>
                <div class="filter-select">
                    <img src="image/searching_box/module.png" alt="Module Icon" class="filter-icon">
                    Select Module
                    <span class="arrow">▼</span>
                </div>
            </div>
            <div class="filter-group">
                <div class="filter-label">Year</div>
                <div class="filter-select">
                    <img src="image/searching_box/year.png" alt="Module Icon" class="filter-icon">
                    Select Year
                    <span class="arrow">▼</span>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
