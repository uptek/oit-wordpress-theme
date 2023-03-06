document.addEventListener('DOMContentLoaded', function () {

  window.addEventListener('scroll', function (e) {
    e.preventDefault();

    var element = document.getElementById("oit-header");
    element.classList.toggle("header-scroll", window.scrollY > 0 );

  });

  document.getElementById("oit-menu-toggler").addEventListener('click', function (e) {
    e.preventDefault();
    if (window.innerWidth <= 767) {
      document.getElementById("oit-menu-wrap").classList.toggle("menu-opened");
      document.getElementById("oit-body").classList.toggle("overflow-hidden");
    }
  });

  function tabbedContent() {
    //get all tab link elements
    var tab = document.getElementsByClassName("tab-link");
    //get all tab content elements
    var tabContent = document.getElementsByClassName("tab-content");
    //loop through each tab
    for (var i = 0; i < tab.length; i++) {
      //add click event listener to all tab links
      tab[i].addEventListener('click', function () {
        //each time tab clicked remove all current classes
        //remove 'current' class from all tabs
        for (var i = 0; i < tab.length; i++) {
          tab[i].classList.remove('current');
        };
        //remove 'current' class from all tab content
        for (var i = 0; i < tabContent.length; i++) {
          tabContent[i].classList.remove('current');
        };
        //add current class back to the clicked tab
        this.className += ' current';
        //get data-tab attribute of what has been clicked
        var matchingTab = this.getAttribute('data-tab');
        //add current class to the tabContent element thats id matches the data-tab of the clicked tab
        document.getElementById(matchingTab).className += ' current';
      }, false);
    }
  }
  tabbedContent();

  // hide all posts except the first 10
  var posts = document.querySelectorAll('.founded-post');
  for (var i = 10; i < posts.length; i++) {
      posts[i].style.display = 'none';
  }

  // add click event listener to "Load More" button
  var loadMoreBtn = document.querySelector('#load-more-results');
  if(loadMoreBtn){
    loadMoreBtn.addEventListener('click', function(e) {
      e.preventDefault();

      // show the next 10 hidden posts
      var hiddenPosts = [];
      for (var i = 10; i < posts.length && hiddenPosts.length < 10; i++) {
        if (posts[i].style.display === 'none') {
            posts[i].style.display = 'flex';
            hiddenPosts.push(posts[i]);
        }
      }

      // hide the "Load More" button if there are no more posts to show
      if (hiddenPosts.length === 0) {
        loadMoreBtn.style.display = 'none';
      }
    });
  }

  // Get the main nav menu element
const mainNav = document.querySelector('.nav-menu');

// Add event listeners to menu items with submenus
const menuItems = mainNav.querySelectorAll('.menu-item-has-children');

menuItems.forEach((menuItem) => {
  const menuItemLink = menuItem.querySelector('a');
  const submenu = menuItem.querySelector('.sub-menu');

  // Add event listener to the menu item link
  menuItemLink.addEventListener('click', (event) => {
    event.preventDefault();
    toggleSubmenu(submenu);
  });
});

function toggleSubmenu(submenu) {
  if (submenu) {
    if (submenu.classList.contains('show')) {
      submenu.classList.remove('show');
    } else {
      // Hide all other submenus before showing this submenu
      const openSubmenus = mainNav.querySelectorAll('.show');
      openSubmenus.forEach((openSubmenu) => {
        if (openSubmenu !== submenu && !openSubmenu.contains(submenu)) {
          toggleSubmenu(openSubmenu);
        }
      });
      submenu.classList.add('show');
    }
  }
}

function handleClick(event) {
  const target = event.target;
  if (target.classList.contains('menu-item-has-children')) {
    event.preventDefault();
    toggleSubmenu(target.querySelector('.sub-menu'));
  }
}
mainNav.addEventListener('click', handleClick);





}, false);


