<style>
    
    .sidebar {
        width: 280px;
        background: rgba(255, 255, 255, 0.3);
        padding: 40px 20px;
        border-right: 1px solid rgba(0,0,0,0.05);
        display: flex;
        flex-direction: column;
    }

    
    .sidebar-header { margin-bottom: 50px; }
    .uni-name { 
        font-size: 11px; 
        font-weight: 800; 
        color: #666; 
        text-transform: uppercase; 
        letter-spacing: 2px; 
        margin-bottom: 8px; 
    }
    .portal-label { 
        font-size: 20px; 
        font-weight: 700; 
        color: var(--school-red); 
    }

  
    .sidebar-label { 
        font-size: 11px; 
        color: #888; 
        font-weight: 700; 
        text-transform: uppercase; 
        margin: 20px 0 15px 15px; 
        letter-spacing: 1px;
    }

    .nav-group { 
        display: flex; 
        flex-direction: column; 
        gap: 12px; 
    }

    .nav-item {
        text-decoration: none;
        color: #444; 
        padding: 12px 20px;
        border-radius: 10px;
        font-size: 15px;
        font-weight: 500;
        transition: all 0.3s ease; 
        position: relative;
    }

    .nav-item:hover { 
        background: rgba(0,0,0,0.03);
        color: var(--school-yellow); 
        transform: translateX(3px); 
    }

    .nav-item.active { 
        background: var(--school-red);
        color: var(--school-white); 
        font-weight: 600;
        box-shadow: 0 4px 15px rgba(218, 41, 28, 0.3); 
    }
</style>

<aside class="sidebar">
    <div class="sidebar-header">
        <p class="uni-name">{{ $universityName }}</p>
        <h2 class="portal-label">Portal</h2>
    </div>

    <div class="sidebar-label">Dashboard</div>
    <nav class="nav-group">
        <a href="/student" class="nav-item active">Home</a>
        <a href="#" class="nav-item">Profile</a>
        <a href="/grades" class="nav-item">Grades</a>
    </nav>
</aside>