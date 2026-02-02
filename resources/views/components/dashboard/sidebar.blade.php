{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News AI - Sidebar</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
        } */

        /* Mobile Menu Button */
        .mobile-menu-btn {
            position: fixed;
            top: 20px;
            left: 20px;
            width: 50px;
            height: 50px;
            background: #d83141;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            display: none; /* Hidden on Desktop */
            align-items: center;
            justify-content: center;
            z-index: 1001;
            box-shadow: 0 4px 15px rgba(216, 49, 65, 0.4);
            color: #f5f5f5;
        }

        /* Overlay */
        .sidebar-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
            display: none;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .sidebar-overlay.active {
            display: block;
            opacity: 1;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 80px;
            background: #d83141;
            transition: all 0.3s ease;
            overflow-x: hidden;
            z-index: 100;
        }

        .sidebar.active {
            width: 280px;
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            padding: 20px;
            height: 80px;
            border-bottom: 1px solid rgba(245, 245, 245, 0.1);
        }

        .toggle-btn {
            min-width: 40px;
            height: 40px;
            background: rgba(245, 245, 245, 0.2);
            border: none;
            border-radius: 8px;
            cursor: pointer;
            display: flex; /* Shown on Desktop */
            align-items: center;
            justify-content: center;
            color: #f5f5f5;
            transition: all 0.3s ease;
        }

        .logo-text {
            margin-left: 15px;
            font-size: 22px;
            font-weight: 700;
            color: #f5f5f5;
            white-space: nowrap;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .sidebar.active .logo-text {
            opacity: 1;
        }

        .sidebar-menu {
            list-style: none;
            padding: 20px 0;
        }

        .menu-link {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            color: rgba(245, 245, 245, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .menu-link:hover, .menu-link.active {
            background: rgba(245, 245, 245, 0.1);
            color: #f5f5f5;
        }

        .menu-link.active {
            border-left: 4px solid #f5f5f5;
        }

        .menu-icon {
            min-width: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .menu-text {
            margin-left: 15px;
            font-size: 16px;
            white-space: nowrap;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .sidebar.active .menu-text {
            opacity: 1;
        }

        .menu-badge {
            margin-left: auto;
            background: #f5f5f5;
            color: #d83141;
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
            opacity: 0;
        }

        .sidebar.active .menu-badge {
            opacity: 1;
        }

        .main-content {
            margin-left: 80px;
            padding: 30px;
            transition: margin-left 0.3s ease;
            min-height: 100vh;
        }

        .sidebar.active ~ .main-content {
            margin-left: 280px;
        }

        .content-header {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            border-left: 5px solid #d83141;
        }

        /* Lucide Icon Helpers */
        .w-6 { width: 24px; height: 24px; }
        .w-8 { width: 32px; height: 32px; }

        @media (max-width: 768px) {
            .mobile-menu-btn { display: flex; }
            .sidebar { width: 0; transform: translateX(-100%); }
            .sidebar.active { width: 280px; transform: translateX(0); }
            .main-content { margin-left: 0; padding-top: 90px; }
            .sidebar.active ~ .main-content { margin-left: 0; }
            .logo-text { opacity: 1; } /* Always show text in mobile sidebar */
        }
    </style>
</head>
<body>

    <button class="mobile-menu-btn" id="mobileMenuBtn">
        <x-lucide-menu class="w-8 h-8" />
    </button>

    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <!-- This button will be handled by JS for responsive visibility -->
            <button class="toggle-btn" id="toggleBtn">
                <x-lucide-chevron-left class="w-6 h-6" />
            </button>
            <span class="logo-text">News AI</span>
        </div>

        <ul class="sidebar-menu">
            <li class="menu-item">
                <a href="#" class="menu-link active">
                    <span class="menu-icon"><x-lucide-layout-dashboard class="w-6 h-6" /></span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><x-lucide-newspaper class="w-6 h-6" /></span>
                    <span class="menu-text">News Articles</span>
                    <span class="menu-badge">12</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><x-lucide-sparkles class="w-6 h-6" /></span>
                    <span class="menu-text">AI Generate</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><x-lucide-settings class="w-6 h-6" /></span>
                    <span class="menu-text">Settings</span>
                </a>
            </li>
        </ul>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const toggleBtn = document.getElementById('toggleBtn');
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const sidebarOverlay = document.getElementById('sidebarOverlay');
        let openMenuButton=false;
        // --- RESPONSIVE LOGIC ---
        function handleResponsiveElements() {
            const isMobile = window.innerWidth <= 768;

            if (isMobile) {
                // 1. Hide desktop toggle button
                toggleBtn.style.display = 'none';
                
                // 2. Reset sidebar state for mobile
                sidebar.classList.remove('active');
                sidebarOverlay.classList.remove('active');
                document.body.style.overflow = '';
            } else {
                // 1. Show desktop toggle button
                toggleBtn.style.display = 'flex';
                
                // 2. Restore saved desktop state
                const savedState = localStorage.getItem('sidebarActive');
                if (savedState === 'true') {
                    sidebar.classList.add('active');
                }
            }
        }

        // Run on load
        handleResponsiveElements();

        // Run on resize
        let resizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(handleResponsiveElements, 100);
        });

        // --- CLICK EVENTS ---

        // Desktop Toggle
        toggleBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            sidebar.classList.toggle('active');
            localStorage.setItem('sidebarActive', sidebar.classList.contains('active'));
        });

        // Mobile Menu Open
        mobileMenuBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            sidebar.classList.add('active');
            sidebarOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        });


        // Close via Overlay
        sidebarOverlay.addEventListener('click', () => {
            sidebar.classList.remove('active');
            sidebarOverlay.classList.remove('active');
            document.body.style.overflow = '';
        });
    </script>
</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News AI - Sidebar</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
        }

        /* Mobile Menu Button */
        .mobile-menu-btn {
            position: fixed;
            top: 20px;
            left: 20px;
            width: 50px;
            height: 50px;
            background: #d83141;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            display: none; /* JS handles showing this on mobile */
            align-items: center;
            justify-content: center;
            z-index: 1001;
            box-shadow: 0 4px 15px rgba(216, 49, 65, 0.4);
            color: #f5f5f5;
            transition: opacity 0.3s ease;
        }

        /* Overlay */
        .sidebar-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
            display: none;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .sidebar-overlay.active {
            display: block;
            opacity: 1;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 80px;
            background: #d83141;
            transition: all 0.3s ease;
            overflow-x: hidden;
            z-index: 1000;
        }

        .sidebar.active {
            width: 280px;
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            padding: 20px;
            height: 80px;
            border-bottom: 1px solid rgba(245, 245, 245, 0.1);
        }

        .toggle-btn {
            min-width: 40px;
            height: 40px;
            background: rgba(245, 245, 245, 0.2);
            border: none;
            border-radius: 8px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #f5f5f5;
            transition: all 0.3s ease;
        }

        .logo-text {
            margin-left: 15px;
            font-size: 22px;
            font-weight: 700;
            color: #f5f5f5;
            white-space: nowrap;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .sidebar.active .logo-text {
            opacity: 1;
        }

        .sidebar-menu {
            list-style: none;
            padding: 20px 0;
        }

        .menu-link {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            color: rgba(245, 245, 245, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .menu-link:hover, .menu-link.active {
            background: rgba(245, 245, 245, 0.1);
            color: #f5f5f5;
        }

        .menu-link.active {
            border-left: 4px solid #f5f5f5;
        }

        .menu-icon {
            min-width: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .menu-text {
            margin-left: 15px;
            font-size: 16px;
            white-space: nowrap;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .sidebar.active .menu-text {
            opacity: 1;
        }

        .menu-badge {
            margin-left: auto;
            background: #f5f5f5;
            color: #d83141;
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
            opacity: 0;
        }

        .sidebar.active .menu-badge {
            opacity: 1;
        }

        /* Lucide Icon Helpers */
        .w-6 { width: 24px; height: 24px; }
        .w-8 { width: 32px; height: 32px; }

        @media (max-width: 768px) {
            .sidebar { width: 0; transform: translateX(-100%); }
            .sidebar.active { width: 280px; transform: translateX(0); }
            .logo-text { opacity: 1; }
        }
    </style>
</head>
<body>

    <button class="mobile-menu-btn" id="mobileMenuBtn">
        <x-lucide-menu class="w-8 h-8" />
    </button>

    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <button class="toggle-btn" id="toggleBtn">
                <x-lucide-chevron-left class="w-6 h-6" />
            </button>
            <span class="logo-text">News AI</span>
        </div>

        <ul class="sidebar-menu">
            <li class="menu-item">
                <a href="#" class="menu-link active">
                    <span class="menu-icon"><x-lucide-layout-dashboard class="w-6 h-6" /></span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><x-lucide-newspaper class="w-6 h-6" /></span>
                    <span class="menu-text">News Articles</span>
                    <span class="menu-badge">12</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><x-lucide-sparkles class="w-6 h-6" /></span>
                    <span class="menu-text">AI Generate</span>
                </a>
            </li>
        </ul>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const toggleBtn = document.getElementById('toggleBtn');
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const sidebarOverlay = document.getElementById('sidebarOverlay');

        // --- RESPONSIVE LOGIC ---
        function handleResponsiveElements() {
            const isMobile = window.innerWidth <= 768;

            if (isMobile) {
                toggleBtn.style.display = 'none';
                mobileMenuBtn.style.display = 'flex'; // Ensure button is visible initially on mobile
                
                // If sidebar is currently open on mobile, hide the button
                if(sidebar.classList.contains('active')) {
                    mobileMenuBtn.style.display = 'none';
                }

                sidebar.classList.remove('active');
                sidebarOverlay.classList.remove('active');
                document.body.style.overflow = '';
            } else {
                toggleBtn.style.display = 'flex';
                mobileMenuBtn.style.display = 'none';
                
                const savedState = localStorage.getItem('sidebarActive');
                if (savedState === 'true') {
                    sidebar.classList.add('active');
                }
            }
        }

        // Run on load
        handleResponsiveElements();

        // Run on resize
        let resizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(handleResponsiveElements, 100);
        });

        // --- CLICK EVENTS ---

        // Desktop Toggle
        toggleBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            sidebar.classList.toggle('active');
            localStorage.setItem('sidebarActive', sidebar.classList.contains('active'));
        });

        // Mobile Menu Open
        mobileMenuBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            sidebar.classList.add('active');
            sidebarOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
            
            // HIDE the mobile menu button when the sidebar is open
            mobileMenuBtn.style.display = 'none';
        });

        // Function to close sidebar (Used by overlay and potentially a close button)
        function closeMobileSidebar() {
            sidebar.classList.remove('active');
            sidebarOverlay.classList.remove('active');
            document.body.style.overflow = '';
            
            // SHOW the mobile menu button again when sidebar is closed
            if (window.innerWidth <= 768) {
                mobileMenuBtn.style.display = 'flex';
            }
        }

        // Close via Overlay
        sidebarOverlay.addEventListener('click', closeMobileSidebar);
    </script>
</body>
</html>