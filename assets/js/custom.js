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

}, false);