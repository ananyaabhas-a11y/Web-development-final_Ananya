<?php
session_start();
if (!isset($_SESSION['student_id'])) {
    header('Location: index.html');
    exit();
}

$student = $_SESSION['student_data'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Hogwarts</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="<?php echo strtolower($student['house']); ?>">
    <header class="site-header">
        <img src="images/hogwarts-crest.jpg" alt="Hogwarts Crest" class="hogwarts-logo">
        <h1>Hogwarts School of Witchcraft and Wizardry</h1>
    </header>
    <nav class="navbar">
        <div class="nav-brand">Hogwarts</div>
        <ul class="nav-menu">
            <li><a href="#home">Home</a></li>
            <li class="dropdown">
                <a href="#academics">Academics ▼</a>
                <ul class="dropdown-menu">
                    <li><a href="#courses">Courses</a></li>
                    <li><a href="#curriculum">Curriculum</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#administration">Administration ▼</a>
                <ul class="dropdown-menu">
                    <li><a href="#staff">Staff</a></li>
                    <li><a href="#policies">Policies</a></li>
                </ul>
            </li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="noticeboard.php">Notice Board</a></li>
            <li class="dropdown">
                <a href="#student">Student ▼</a>
                <ul class="dropdown-menu">
                    <li><a href="#grades">Grades</a></li>
                    <li><a href="#schedule">Class Schedule</a></li>
                    <li><a href="#mess">Mess Menu</a></li>
                    <li><a href="#calendar">Academic Calendar</a></li>
                </ul>
            </li>
            <li class="logout-btn"><a href="logout.php">🚪 Logout</a></li>
        </ul>
    </nav>

    <div class="dashboard-container">
        <section id="home" class="section active">
            <h2>Welcome, <?php echo htmlspecialchars($student['full_name']); ?>!</h2>
            <p class="house-badge">House: <?php echo htmlspecialchars($student['house']); ?></p>
            
            <div class="main-content">
                <div class="content-box about-section">
                    <img src="images/hogwarts-castle.jpg" alt="Hogwarts Castle" class="hogwarts-castle-img">
                    <div class="about-content">
                        <h3>About Us</h3>
                        <p>Hogwarts School of Witchcraft and Wizardry is the finest magical institution in Britain. Founded over a thousand years ago by Godric Gryffindor, Helga Hufflepuff, Rowena Ravenclaw, and Salazar Slytherin, we continue to provide exceptional magical education to young witches and wizards.</p>
                    </div>
                </div>
                
                <div class="content-box headmaster-message">
                    <img src="images/Dumbledore.jpg" alt="Albus Dumbledore" class="dumbledore-img">
                    <div class="message-content">
                        <h3>Message from the Headmaster</h3>
                        <p><em>"Welcome to another year at Hogwarts. Remember, happiness can be found even in the darkest of times, if one only remembers to turn on the light. Work hard, stay curious, and may your wands always be at the ready."</em></p>
                        <p class="signature">- Albus Dumbledore, Headmaster</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="courses" class="section">
            <h2>Courses Offered</h2>
            <div class="courses-grid">
                <div class="course-card">
                    <h3>🧪 Potions</h3>
                    <p><strong>Professor:</strong> Severus Snape</p>
                    <p>Learn the art of brewing magical potions, from simple healing draughts to complex Felix Felicis.</p>
                </div>
                
                <div class="course-card">
                    <h3>⚡ Defense Against the Dark Arts</h3>
                    <p><strong>Professor:</strong> Remus Lupin</p>
                    <p>Master defensive spells and learn to protect yourself against dark creatures and curses.</p>
                </div>
                
                <div class="course-card">
                    <h3>🐱 Transfiguration</h3>
                    <p><strong>Professor:</strong> Minerva McGonagall</p>
                    <p>Transform objects and creatures through advanced magical techniques.</p>
                </div>
                
                <div class="course-card">
                    <h3>✨ Charms</h3>
                    <p><strong>Professor:</strong> Filius Flitwick</p>
                    <p>Learn practical spells for everyday magical life and complex charm work.</p>
                </div>
                
                <div class="course-card">
                    <h3>🌿 Herbology</h3>
                    <p><strong>Professor:</strong> Pomona Sprout</p>
                    <p>Study magical plants and fungi, their properties and uses in potion-making.</p>
                </div>
                
                <div class="course-card">
                    <h3>🔮 Divination</h3>
                    <p><strong>Professor:</strong> Sybill Trelawney</p>
                    <p>Explore the mystical arts of seeing the future through various methods.</p>
                </div>
                
                <div class="course-card">
                    <h3>🐉 Care of Magical Creatures</h3>
                    <p><strong>Professor:</strong> Rubeus Hagrid</p>
                    <p>Learn to care for and understand magical beasts from hippogriffs to dragons.</p>
                </div>
                
                <div class="course-card">
                    <h3>📜 History of Magic</h3>
                    <p><strong>Professor:</strong> Cuthbert Binns</p>
                    <p>Study the rich history of the wizarding world and magical events.</p>
                </div>
            </div>
        </section>

        <section id="curriculum" class="section">
            <h2>Curriculum Overview</h2>
            <div class="curriculum-content">
                <div class="year-section">
                    <h3>First Year (Required Courses)</h3>
                    <ul>
                        <li>Astronomy</li>
                        <li>Charms</li>
                        <li>Defense Against the Dark Arts</li>
                        <li>Herbology</li>
                        <li>History of Magic</li>
                        <li>Potions</li>
                        <li>Transfiguration</li>
                        <li>Flying (First years only)</li>
                    </ul>
                </div>
                
                <div class="year-section">
                    <h3>Third Year & Above (Electives)</h3>
                    <ul>
                        <li>Arithmancy</li>
                        <li>Care of Magical Creatures</li>
                        <li>Divination</li>
                        <li>Muggle Studies</li>
                        <li>Study of Ancient Runes</li>
                    </ul>
                </div>
                
                <div class="year-section">
                    <h3>Sixth Year & Above (Advanced)</h3>
                    <ul>
                        <li>Alchemy (if sufficient interest)</li>
                        <li>Apparition (requires separate license)</li>
                        <li>Advanced Potions (N.E.W.T. level)</li>
                        <li>Advanced Transfiguration</li>
                    </ul>
                </div>
                
                <div class="exam-info">
                    <h3>Examinations</h3>
                    <p><strong>O.W.L.s (Ordinary Wizarding Levels):</strong> Taken at the end of fifth year</p>
                    <p><strong>N.E.W.T.s (Nastily Exhausting Wizarding Tests):</strong> Taken at the end of seventh year</p>
                    <p><strong>Grading Scale:</strong> O (Outstanding), E (Exceeds Expectations), A (Acceptable), P (Poor), D (Dreadful), T (Troll)</p>
                </div>
            </div>
        </section>

        <section id="staff" class="section">
            <h2>Staff Directory</h2>
            <div class="staff-grid">
                <div class="staff-card">
                    <img src="images/Dumbledore.jpg" alt="Albus Dumbledore" class="staff-img">
                    <h3>Albus Dumbledore</h3>
                    <p class="staff-title">Headmaster</p>
                    <p>Office: Headmaster's Tower</p>
                </div>
                
                <div class="staff-card">
                    <img src="images/mcgonagall.jpg" alt="Minerva McGonagall" class="staff-img">
                    <h3>Minerva McGonagall</h3>
                    <p class="staff-title">Deputy Headmistress & Transfiguration Professor</p>
                    <p>Head of Gryffindor House</p>
                </div>
                
                <div class="staff-card">
                    <img src="images/snape.jpg" alt="Severus Snape" class="staff-img">
                    <h3>Severus Snape</h3>
                    <p class="staff-title">Potions Master</p>
                    <p>Head of Slytherin House</p>
                </div>
                
                <div class="staff-card">
                    <img src="images/flitwick.jpg" alt="Filius Flitwick" class="staff-img">
                    <h3>Filius Flitwick</h3>
                    <p class="staff-title">Charms Professor</p>
                    <p>Head of Ravenclaw House</p>
                </div>
                
                <div class="staff-card">
                    <img src="images/sprout.jpg" alt="Pomona Sprout" class="staff-img">
                    <h3>Pomona Sprout</h3>
                    <p class="staff-title">Herbology Professor</p>
                    <p>Head of Hufflepuff House</p>
                </div>
                
                <div class="staff-card">
                    <img src="images/hagrid.jpg" alt="Rubeus Hagrid" class="staff-img">
                    <h3>Rubeus Hagrid</h3>
                    <p class="staff-title">Keeper of Keys and Grounds</p>
                    <p>Care of Magical Creatures Professor</p>
                </div>
                
                <div class="staff-card">
                    <img src="images/pince.jpg" alt="Irma Pince" class="staff-img">
                    <h3>Irma Pince</h3>
                    <p class="staff-title">Librarian</p>
                    <p>Office: Hogwarts Library</p>
                </div>
                
                <div class="staff-card">
                    <img src="images/pomfrey.jpg" alt="Poppy Pomfrey" class="staff-img">
                    <h3>Poppy Pomfrey</h3>
                    <p class="staff-title">Matron</p>
                    <p>Hospital Wing</p>
                </div>
            </div>
        </section>

        <section id="policies" class="section">
            <h2>School Policies</h2>
            <div class="policies-content">
                <div class="policy-section">
                    <h3>📋 General Rules</h3>
                    <ul>
                        <li>Students must attend all scheduled classes unless excused by a professor or the matron</li>
                        <li>The Forbidden Forest is strictly off-limits to all students</li>
                        <li>No magic should be used in the corridors between classes</li>
                        <li>Students must be in their dormitories by curfew (9 PM for younger years, 10 PM for older years)</li>
                        <li>Respect for all staff, students, and magical creatures is mandatory</li>
                    </ul>
                </div>
                
                <div class="policy-section">
                    <h3>🚫 Prohibited Items</h3>
                    <ul>
                        <li>All products from Weasleys' Wizard Wheezes</li>
                        <li>Fanged Frisbees</li>
                        <li>Screaming Yo-yos</li>
                        <li>Dungbombs and Stink Pellets</li>
                        <li>Any items from the Restricted Section without permission</li>
                    </ul>
                </div>
                
                <div class="policy-section">
                    <h3>🏆 House Points System</h3>
                    <ul>
                        <li>Points awarded for academic excellence, good behavior, and service to the school</li>
                        <li>Points deducted for rule violations and misconduct</li>
                        <li>The House Cup is awarded at year-end to the house with the most points</li>
                        <li>Quidditch victories contribute to house standings</li>
                    </ul>
                </div>
                
                <div class="policy-section">
                    <h3>⚠️ Disciplinary Actions</h3>
                    <ul>
                        <li>Minor infractions: Loss of house points</li>
                        <li>Moderate violations: Detention with professors</li>
                        <li>Serious offenses: Suspension or expulsion</li>
                        <li>All disciplinary decisions are final and made by the Headmaster</li>
                    </ul>
                </div>
                
                <div class="policy-section">
                    <h3>🎓 Academic Integrity</h3>
                    <ul>
                        <li>Cheating on exams or assignments is strictly forbidden</li>
                        <li>Use of magical aids during exams without permission is prohibited</li>
                        <li>Plagiarism will result in automatic failure and disciplinary action</li>
                        <li>Students must complete their own homework assignments</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="grades" class="section">
            <h2>Your Grades</h2>
            <table class="grades-table">
                <thead>
                    <tr>
                        <th>Subject</th>
                        <th>Grade</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Potions</td><td>E</td><td>Exceeds Expectations</td></tr>
                    <tr><td>Defense Against the Dark Arts</td><td>O</td><td>Outstanding</td></tr>
                    <tr><td>Transfiguration</td><td>A</td><td>Acceptable</td></tr>
                    <tr><td>Charms</td><td>E</td><td>Exceeds Expectations</td></tr>
                    <tr><td>Herbology</td><td>O</td><td>Outstanding</td></tr>
                </tbody>
            </table>
            <button onclick="downloadPDF('grades')" class="download-btn">Download as PDF</button>
        </section>

        <section id="schedule" class="section">
            <h2>Today's Classes</h2>
            <div class="schedule-list">
                <div class="schedule-item">
                    <span class="time">9:00 AM - 10:30 AM</span>
                    <span class="subject">Potions - Dungeon Classroom 3</span>
                </div>
                <div class="schedule-item">
                    <span class="time">11:00 AM - 12:30 PM</span>
                    <span class="subject">Defense Against the Dark Arts - Tower Room 2</span>
                </div>
                <div class="schedule-item">
                    <span class="time">2:00 PM - 3:30 PM</span>
                    <span class="subject">Transfiguration - Main Hall</span>
                </div>
                <div class="schedule-item">
                    <span class="time">4:00 PM - 5:30 PM</span>
                    <span class="subject">Charms - East Wing Classroom 5</span>
                </div>
            </div>
        </section>

        <section id="mess" class="section">
            <h2>Mess Menu</h2>
            <div class="menu-grid">
                <div class="menu-item">
                    <h4>Breakfast</h4>
                    <p>Pumpkin Porridge, Toast, Eggs, Bacon, Sausages, Fresh Fruit</p>
                </div>
                <div class="menu-item">
                    <h4>Lunch</h4>
                    <p>Roast Chicken, Shepherd's Pie, Vegetables, Treacle Tart</p>
                </div>
                <div class="menu-item">
                    <h4>Dinner</h4>
                    <p>Beef Stew, Fish & Chips, Mashed Potatoes, Chocolate Gateau</p>
                </div>
            </div>
        </section>

        <section id="calendar" class="section">
            <h2>Academic Calendar</h2>
            <div class="calendar-events">
                <div class="event-item">
                    <span class="date">Sept 1</span>
                    <span class="event">Term Begins</span>
                </div>
                <div class="event-item">
                    <span class="date">Oct 31</span>
                    <span class="event">Halloween Feast</span>
                </div>
                <div class="event-item">
                    <span class="date">Dec 20</span>
                    <span class="event">Winter Break Begins</span>
                </div>
                <div class="event-item">
                    <span class="date">Jan 5</span>
                    <span class="event">Classes Resume</span>
                </div>
                <div class="event-item">
                    <span class="date">June 15</span>
                    <span class="event">Final Exams</span>
                </div>
            </div>
            <button onclick="downloadPDF('calendar')" class="download-btn">Download Calendar PDF</button>
        </section>

        <section id="contact" class="section">
            <h2>Contact Us</h2>
            <div class="contact-grid">
                <div class="contact-card">
                    <div class="contact-icon">📍</div>
                    <h3>Address</h3>
                    <p>Hogwarts Castle<br>Highlands, Scotland<br>United Kingdom</p>
                </div>
                
                <div class="contact-card">
                    <div class="contact-icon">🦉</div>
                    <h3>Owl Post</h3>
                    <p>Send your owl to:<br>Hogwarts School of Witchcraft and Wizardry<br>Headmaster's Office</p>
                </div>
                
                <div class="contact-card">
                    <div class="contact-icon">📧</div>
                    <h3>Email</h3>
                    <p>admissions@hogwarts.edu<br>info@hogwarts.edu<br>headmaster@hogwarts.edu</p>
                </div>
                
                <div class="contact-card">
                    <div class="contact-icon">🔮</div>
                    <h3>Floo Network</h3>
                    <p>Floo Powder Address:<br>"Hogwarts - Main Hall"<br>Available 24/7</p>
                </div>
                
                <div class="contact-card">
                    <div class="contact-icon">⚡</div>
                    <h3>Emergency Contact</h3>
                    <p>For urgent matters:<br>Contact your House Head<br>or visit the Hospital Wing</p>
                </div>
                
                <div class="contact-card">
                    <div class="contact-icon">📚</div>
                    <h3>Office Hours</h3>
                    <p>Monday - Friday: 8:00 AM - 6:00 PM<br>Saturday: 9:00 AM - 4:00 PM<br>Sunday: Closed</p>
                </div>
            </div>
            
            <div class="contact-note">
                <p><strong>Note:</strong> Muggle telephone and postal services are not available at Hogwarts. Please use magical means of communication.</p>
            </div>
        </section>
    </div>

    <script src="script.js"></script>
</body>
</html>
