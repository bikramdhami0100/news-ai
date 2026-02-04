
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
            /* z-index: 999; */
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
            /* z-index: 1000; */
        }

        .sidebar.active {
            width: 280px;
        }
        /* when sidebar is active then also content margin-left should be 280px */

        .sidebar.active ~ .main-content {
            margin-left: 280px;
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
        /* manage sidebar and main content */
        .main-content {
            margin-left: 80px;
            transition: margin-left 0.3s ease;
        }
        /* Lucide Icon Helpers */
        .w-6 { width: 24px; height: 24px; }
        .w-8 { width: 32px; height: 32px; }
        
        @media (max-width: 768px) {
            .main-content { margin-left: 0; }
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
                <a href="{{ route('dashboard') }}" class="menu-link <?= request()->routeIs('dashboard') ? 'active' : '' ?>">
                    <span class="menu-icon"><x-lucide-layout-dashboard class="w-6 h-6" /></span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('dashboard.upload-news') }}" class="menu-link <?= request()->routeIs('dashboard.upload-news') ? 'active' : '' ?>">
                    <span class="menu-icon"><x-lucide-newspaper class="w-6 h-6" /></span>
                    <span class="menu-text">News Articles</span>
                    <span class="menu-badge">12</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link <?= request()->routeIs('dashboard.ai-generate') ? 'active' : '' ?>">
                    <span class="menu-icon"><x-lucide-sparkles class="w-6 h-6" /></span>
                    <span class="menu-text">AI Generate</span>
                </a>
            </li>
                <li class="menu-item <?= request()->routeIs('dashboard.settings') ? 'active' : '' ?>">
                <a href="{{route('logout')}}" class="menu-link">
                    <span class="menu-icon"><x-lucide-log-out class="w-6 h-6" /></span>
                    <span class="menu-text">Log Out</span>
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