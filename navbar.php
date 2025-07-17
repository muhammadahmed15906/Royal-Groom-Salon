 <!-- ====== CSS Styles ====== --> 
<style>
/* ========== Profile Dropdown ========== */
.profile-dropdown {
  position: absolute; /* Fixed to top right */
  top: 15px;
  right: 20px;
  z-index: 999;
}

.profile-icon {
  font-size: 42px; /* Bigger icon */
  color: #f29756;
  cursor: pointer;
  transition: 0.3s;
  padding: 6px;
}

.profile-icon:hover {
  color: #fcba27;
}

.dropdown-menu {
  display: none;
  position: absolute;
  right: 0;
  top: 100%;
  background: rgba(0, 0, 0, 0.95);
  border: 1px solid #a0522d;
  border-radius: 12px;
  padding: 12px;
  width: 200px; /* Wider dropdown */
  box-shadow: 0 0 12px rgba(0,0,0,0.4);
  animation: fadeIn 0.3s ease;
  margin-top: 8px;
}

.dropdown-menu a {
  display: block;
  color: white;
  text-decoration: none;
  padding: 10px 12px;
  border-radius: 8px;
  transition: 0.2s ease;
  text-align: center;
  font-size: 16px;
  letter-spacing: 0.5px;
}

.dropdown-menu a:hover {
  background-color: #a0522d;
}

#dropdown-toggle {
  display: none;
}

#dropdown-toggle:checked ~ .dropdown-menu {
  display: block;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(-10px); }
  to { opacity: 1; transform: translateY(0); }
}

.dropdown-label {
  display: inline-block;
  cursor: pointer;
}


/* ========== Navbar ========== */
.main-header {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 1000;
  background: transparent; /* Default transparent */
  transition: background-color 0.3s ease;
}

.main-header.scrolled {
  background-color: rgba(0, 0, 0, 0.9); /* Scroll pe black bg */
}

</style>

<!-- ====== HTML Structure ====== -->
<header class="main-header" id="navbar">
  <div class="container">
    <div class="logo">
      <img src="assets/images/royal-groom-logo.png" alt="Royal Groom Logo" class="logo-img">
    </div>

    <nav class="main-nav">
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="services.php">SERVICES</a></li>
        <li><a href="gallery.php">GALLERY</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="contactUs.php">CONTACT Us</a></li>
      </ul>
    </nav>

    <!-- Mobile Menu Icon -->
    <div class="menu-toggle">
      <i class="fas fa-bars"></i>
    </div>

    <!-- Profile Dropdown -->
<div class="profile-dropdown">
  <input type="checkbox" id="dropdown-toggle">
  <label for="dropdown-toggle" class="dropdown-label">
    <i class="fas fa-user-circle profile-icon"></i>
  </label>
  <div class="dropdown-menu">
    <?php if (isset($_SESSION['email'])): ?>
      <div style="color: white; text-align: center; margin-bottom: 10px;">
        <?php echo $_SESSION['email']; ?>
      </div>
      <a href="my_appointments.php">My Appointments</a>
      <a href="logout.php">Logout</a>
    <?php else: ?>
      <a href="form.php">Signup / Signin</a>
    <?php endif; ?>
  </div>
</div>

  </div>
</header>

<!-- ====== JavaScript ====== -->
<script>
// Close dropdown when clicking outside
document.addEventListener('click', function(e) {
  const dropdown = document.querySelector('.profile-dropdown');
  const toggle = document.getElementById('dropdown-toggle');
  
  if (!dropdown.contains(e.target)) {
    toggle.checked = false;
  }
});

// Add black background to navbar on scroll
window.addEventListener('scroll', function () {
  const navbar = document.getElementById('navbar');
  if (window.scrollY > 50) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
});
</script>