<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Discord-inspired variables */
        :root {
            --discord-bg: #36393f;
            --discord-dark: #2f3136;
            --discord-darker: #202225;
            --discord-light: #40444b;
            --discord-lighter: #4f545c;
            --discord-text: #dcddde;
            --discord-muted: #72767d;
            --discord-nitro: #ff73fa;
            --discord-nitro-dark: #b341ae;
            --discord-nitro-glow: rgba(255, 115, 250, 0.15);
            --discord-green: #3ba55d;
            --discord-blue: #5865f2;
            --discord-yellow: #faa81a;
            --discord-red: #ed4245;
            --discord-purple: #9b84ee;
            --discord-font: 'Whitney', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            --discord-radius: 8px;
        }

        /* Base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: var(--discord-darker);
            color: var(--discord-text);
            font-family: var(--discord-font);
            line-height: 1.6;
            padding: 20px;
            display: flex;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 900px;
            margin: 20px auto;
            display: grid;
            grid-template-columns: 240px 1fr;
            grid-gap: 20px;
            position: relative;
            overflow: hidden;
        }

        /* Discord-style scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: var(--discord-darker);
        }
        
        ::-webkit-scrollbar-thumb {
            background: var(--discord-lighter);
            border-radius: 4px;
        }

        /* Sidebar styles */
        .sidebar {
            background-color: var(--discord-dark);
            border-radius: var(--discord-radius);
            padding: 20px;
            position: relative;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            height: fit-content;
        }

        .profile-header {
            text-align: center;
            margin-bottom: 20px;
            position: relative;
        }

        .profile-avatar {
            width: 128px;
            height: 128px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid var(--discord-nitro);
            box-shadow: 0 0 15px var(--discord-nitro-glow);
            margin: 0 auto 15px;
            position: relative;
            display: block;
        }

        .nitro-badge {
            position: absolute;
            bottom: 10px;
            right: 60px;
            background: linear-gradient(45deg, #ff73fa, #b341ae);
            border-radius: 50%;
            width: 28px;
            height: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 0 10px var(--discord-nitro-glow);
        }

        .nitro-badge i {
            color: white;
            font-size: 14px;
        }

        .status-indicator {
            position: absolute;
            bottom: 15px;
            right: 65px;
            width: 18px;
            height: 18px;
            background-color: var(--discord-green);
            border-radius: 50%;
            border: 3px solid var(--discord-dark);
        }

        .username {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 5px;
            color: white;
        }

        .discriminator {
            font-size: 14px;
            color: var(--discord-muted);
            margin-bottom: 10px;
        }

        .user-status {
            font-size: 14px;
            color: var(--discord-text);
            background-color: var(--discord-light);
            padding: 8px 12px;
            border-radius: var(--discord-radius);
            margin-bottom: 20px;
        }

        .sidebar-section {
            margin-bottom: 20px;
        }

        .sidebar-title {
            text-transform: uppercase;
            font-size: 12px;
            font-weight: 700;
            color: var(--discord-muted);
            margin-bottom: 10px;
            letter-spacing: 0.5px;
        }

        .sidebar-item {
            display: flex;
            align-items: center;
            padding: 8px 0;
            color: var(--discord-text);
            font-size: 14px;
        }

        .sidebar-item i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }

        .badge {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
            margin-right: 6px;
            margin-bottom: 6px;
        }

        .badge-nitro {
            background: linear-gradient(45deg, #ff73fa, #b341ae);
            color: white;
        }

        .badge-boost {
            background-color: var(--discord-nitro);
            color: white;
        }

        .badge-dev {
            background-color: var(--discord-blue);
            color: white;
        }

        .badge-student {
            background-color: var(--discord-yellow);
            color: white;
        }

        /* Main content styles */
        .main-content {
            background-color: var(--discord-bg);
            border-radius: var(--discord-radius);
            padding: 25px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .content-section {
            margin-bottom: 30px;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .section-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--discord-light);
        }

        .section-header i {
            margin-right: 10px;
            color: var(--discord-nitro);
            font-size: 20px;
        }

        .section-title {
            font-size: 18px;
            font-weight: 700;
            color: white;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            grid-gap: 15px;
        }

        .info-item {
            background-color: var(--discord-dark);
            padding: 15px;
            border-radius: var(--discord-radius);
            transition: all 0.2s ease;
        }

        .info-item:hover {
            background-color: var(--discord-light);
            transform: translateY(-2px);
        }

        .info-label {
            font-size: 12px;
            text-transform: uppercase;
            color: var(--discord-muted);
            margin-bottom: 5px;
            letter-spacing: 0.5px;
            font-weight: 600;
        }

        .info-value {
            font-size: 15px;
            color: var(--discord-text);
        }

        .progress-bar {
            height: 10px;
            background-color: var(--discord-darker);
            border-radius: 5px;
            margin-top: 8px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--discord-nitro-dark), var(--discord-nitro));
            border-radius: 5px;
            transition: width 0.5s ease;
        }

        .courses-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            grid-gap: 15px;
        }

        .course-card {
            background-color: var(--discord-dark);
            border-radius: var(--discord-radius);
            padding: 15px;
            transition: all 0.2s ease;
            position: relative;
            overflow: hidden;
        }

        .course-card:hover {
            background-color: var(--discord-light);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .course-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(to bottom, var(--discord-nitro), var(--discord-nitro-dark));
        }

        .course-name {
            font-weight: 600;
            margin-bottom: 5px;
            color: white;
        }

        .course-code {
            font-size: 12px;
            color: var(--discord-muted);
            margin-bottom: 10px;
        }

        .course-grade {
            font-size: 14px;
            font-weight: 600;
            color: var(--discord-green);
        }

        .achievements-list {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .achievement {
            background-color: var(--discord-dark);
            border-radius: var(--discord-radius);
            padding: 15px;
            flex: 1 1 calc(33.333% - 15px);
            min-width: 200px;
            display: flex;
            align-items: center;
            transition: all 0.2s ease;
        }

        .achievement:hover {
            background-color: var(--discord-light);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .achievement-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(45deg, var(--discord-nitro-dark), var(--discord-nitro));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .achievement-icon i {
            color: white;
            font-size: 18px;
        }

        .achievement-details {
            flex: 1;
        }

        .achievement-name {
            font-weight: 600;
            margin-bottom: 5px;
            color: white;
        }

        .achievement-desc {
            font-size: 12px;
            color: var(--discord-muted);
        }

        .contact-buttons {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .contact-button {
            display: flex;
            align-items: center;
            background-color: var(--discord-dark);
            border: none;
            border-radius: var(--discord-radius);
            padding: 10px 15px;
            color: var(--discord-text);
            font-size: 14px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .contact-button:hover {
            background-color: var(--discord-light);
        }

        .contact-button i {
            margin-right: 8px;
        }

        .contact-button.primary {
            background-color: var(--discord-blue);
            color: white;
        }

        .contact-button.primary:hover {
            background-color: #4752c4;
        }

        .nitro-boost {
            position: absolute;
            top: 15px;
            right: 15px;
            background: linear-gradient(45deg, var(--discord-nitro-dark), var(--discord-nitro));
            color: white;
            padding: 5px 10px;
            border-radius: var(--discord-radius);
            font-size: 12px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 5px;
            box-shadow: 0 0 10px var(--discord-nitro-glow);
        }

        /* Animated nitro background effect */
        .nitro-glow {
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, var(--discord-nitro-glow) 0%, transparent 70%);
            opacity: 0.5;
            z-index: -1;
            animation: pulse 8s infinite ease-in-out;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.5; }
            50% { transform: scale(1.1); opacity: 0.7; }
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr;
            }
            
            .nitro-boost {
                position: static;
                margin-bottom: 15px;
                display: inline-flex;
            }
            
            .info-grid, .courses-list {
                grid-template-columns: 1fr;
            }
            
            .achievement {
                flex: 1 1 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="nitro-glow"></div>
        <div class="nitro-boost">
            <i class="fas fa-rocket"></i> Server Boosting: Level 3
        </div>
        
        <!-- Sidebar with profile information -->
        <div class="sidebar">
            <div class="profile-header">
                <img src="profil.png" alt="Profile Avatar" class="profile-avatar">
                <div class="nitro-badge">
                    <i class="fas fa-bolt"></i>
                </div>
                <div class="status-indicator"></div>
                <h2 class="username">TechStudent</h2>
                <div class="discriminator">Jaaaaaaaaaaaay#9595</div>
                <div class="user-status">
                    <i class="fas fa-code"></i> Something Missing...
                </div>
            </div>
            
            <div class="sidebar-section">
                <h3 class="sidebar-title">Badges</h3>
                <div>
                    <span class="badge badge-nitro">TI</span>
                    <span class="badge badge-boost">College Student</span>
                    <span class="badge badge-dev">Information Technology</span>
                    <span class="badge badge-student">UBSI</span>
                </div>
            </div>
            
            <div class="sidebar-section">
                <h3 class="sidebar-title">Quick Info</h3>
                <div class="sidebar-item">
                    <i class="fas fa-graduation-cap" style="color: var(--discord-yellow);"></i>
                    Information Technology
                </div>
                <div class="sidebar-item">
                    <i class="fas fa-university" style="color: var(--discord-blue);"></i>
                    Universitas Bina Sarana Informatika
                </div>
                <div class="sidebar-item">
                    <i class="fas fa-calendar-alt" style="color: var(--discord-purple);"></i>
                    Semester 6
                </div>
                <div class="sidebar-item">
                    <i class="fas fa-globe" style="color: var(--discord-green);"></i>
                    College Student
                </div>
            </div>
            
            <div class="sidebar-section">
                <h3 class="sidebar-title">Game Activity</h3>
                <div class="sidebar-item">
                    <i class="fas fa-gamepad" style="color: var(--discord-nitro);"></i>
                    Playing Visual Studio Code
                </div>
            </div>
        </div>
        
        <!-- Main content area -->
        <div class="main-content">
            <div class="content-section">
                <div class="section-header">
                    <i class="fas fa-user-circle"></i>
                    <h2 class="section-title">About Me</h2>
                </div>
                <p>Information Technology student with a focus on developing web, mobile, 
                    and information system applications. Has a deep interest in cybersecurity, cloud computing, 
                    and artificial intelligence. Active in developer communities and technology forums, including Discord as a place to share knowledge and collaborate with fellow IT students. 
                    Currently working on a final project on implementing machine learning for network security and data analysis.</p>
            </div>
            
            <div class="content-section">
                <div class="section-header">
                    <i class="fas fa-id-card"></i>
                    <h2 class="section-title">Personal Information</h2>
                </div>
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">Full Name</div>
                        <div class="info-value">Izza Rahmat Sanjaya</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Student ID</div>
                        <div class="info-value">17220922</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Date of Birth</div>
                        <div class="info-value">May 16, 2004</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Major</div>
                        <div class="info-value">Informatic Engineering</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Specialization</div>
                        <div class="info-value">Information technology</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Expected Graduation</div>
                        <div class="info-value">2026</div>
                    </div>
                </div>
            </div>
            
            <div class="content-section">
                <div class="section-header">
                    <i class="fas fa-code"></i>
                    <h2 class="section-title">Skills</h2>
                </div>
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">Python</div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 90%;"></div>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">JavaScript</div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 85%;"></div>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">React</div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 75%;"></div>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Java</div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 70%;"></div>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Machine Learning</div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 65%;"></div>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">SQL</div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 80%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="content-section">
                <div class="section-header">
                    <i class="fas fa-book"></i>
                    <h2 class="section-title">Current Courses</h2>
                </div>
                <div class="courses-list">
                    <div class="course-card">
                        <div class="course-name">Computer Forensic</div>
                        <div class="course-code">EN3-E2</div>
                        
                    </div>
                    <div class="course-card">
                        <div class="course-name">Web Programming</div>
                        <div class="course-code">403-E2</div>
                        
                    </div>
                    <div class="course-card">
                        <div class="course-name">Cryptography</div>
                        <div class="course-code">301-E2</div>
                        
                    </div>
                    <div class="course-card">
                        <div class="course-name">Architecture Enterprise</div>
                        <div class="course-code">201-E2</div>
                        
                    </div>
                </div>
            </div>
            
            <div class="content-section">
                <div class="section-header">
                    <i class="fas fa-project-diagram"></i>
                    <h2 class="section-title">Hobby</h2>
                </div>
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">Gaming</div>
                        <div class="info-value">Helping to relief stress</div>
                    </div>
                </div>
            </div>
            
            <div class="content-section">
                <div class="section-header">
                    <i class="fas fa-envelope"></i>
                    <h2 class="section-title">Contact Information</h2>
                </div>
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">Email</div>
                        <div class="info-value">izzarahmats@gmail.com</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Discord</div>
                        <div class="info-value">Jaaaaaaaaaaaay#9595</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">GitHub</div>
                        <div class="info-value">github.com/Jekmerson</div>
                    </div>
                </div>
                
                <div class="contact-buttons" style="margin-top: 20px;">
                    <button class="contact-button primary">
                        <i class="fas fa-comment-alt"></i> Send Message
                    </button>
                    <button class="contact-button">
                        <i class="fas fa-user-plus"></i> Add Friend
                    </button>
                    <button class="contact-button">
                        <i class="fas fa-share-alt"></i> Share Profile
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
