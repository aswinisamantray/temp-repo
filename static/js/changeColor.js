// Function to change the color of the div based on the current page
function changeDivColor() {
    var logo = document.getElementById('nss-nav');
    var navItems=document.querySelectorAll('.nav-link');
    var currentPage = window.location.pathname;
    var navShadow=document.getElementById('mainNavbar');
  
    if (currentPage === '/index.php' || currentPage === '/') {
      logo.style.color = 'white';
      navShadow.style.background='transparent';
      navItems.forEach(function(item) {
        item.style.color = 'white';
        item.style.fontFamily = 'sans-serif';
      });
    } else{
        navShadow.style.background='white';
        navShadow.classList.add('shadow');
        logo.style.color = '#000080';
        navItems.forEach(function(item) {
            item.style.color = 'black';
            item.style.fontFamily = 'sans-serif';
          });
    }
    document.querySelectorAll('.nav-item').forEach(function(item){
        item.style.width='fit-content';
    });

  }
  
  // Run the function on page load
  window.addEventListener('load', changeDivColor);
  