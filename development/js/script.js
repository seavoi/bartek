console.log("Last update: 5/22/24 - 7:58 PM CST");

// Variables
let adminBar;
let billboard;
let billboardHeight;
let back;
let bodyHeight;
let footerHeight;
let footerPosition;
let headerHeight;
let height;
let home;
let mobileNavBtnOpen;
let mobileNavBtnClose;
let navigation;
let naivationLevel1; 
let navigationWidth = 910;
let product;
let sitemap;
let sitemapFixPosition;
let sitemapFixTop;
let sitemapFixLeft;
let sitemapHeight;
let sitemapPosition;
let sitemapWidth;
let shop;
let width;

function screenSizeCheck() {
  height = window.innerHeight;
  width = window.innerWidth;
}
screenSizeCheck();

window.addEventListener('load', function () {

  // Variables
  adminBar = document.getElementById("wpadminbar");
  //back = document.getElementById("breadcrumb-back");
  billboard = document.getElementById("billboard");
  if (billboard) {
    billboardHeight = billboard.offsetHeight;
  }
  bodyHeight = document.body.scrollHeight;
  footerHeight = document.getElementById("footer-1").clientHeight + document.getElementById("footer-2").clientHeight;
  home = document.getElementById("home");
  mobileNavBtnOpen = document.getElementById("mobile-toggle-open");
  mobileNavBtnClose = document.getElementById("mobile-toggle-close");
  navigation = document.getElementById("navigation");
  naivationLevel1 = document.getElementById("level-1-wrapper");
  product = document.getElementById("product");
  sitemap = document.getElementById("sitemap");
  shop = document.getElementById("shop");

  /* if (back) {
    back.style.opacity = "0";
    back.style.visibility = "hidden";
    let backLink = document.referrer;
    let currentLink = document.URL;
    if (backLink && backLink != currentLink) {
      back.href = backLink;
      back.style.opacity = "1";
      back.style.visibility = "visible";
    } else {
      back.style.visibility = "hidden";
    }
  } */

  // Sitemap
  if (sitemap) {
    let active = document.getElementById("active");
    if (active) {
      active.classList.add("open");
      if (active.closest('li.level-2')) {
        active.closest('li.level-2').classList.add("open");
      }
      if (active.closest('li.level-1')) {
        active.closest('li.level-1').classList.add("open");
      }
    }
  }

  function stickySitemap() {
    if (sitemap && !shop && !product) {
      let scrollTop = window.scrollY;
      headerHeight = billboardHeight + 44 + 72;
      sitemapPosition = sitemap.getBoundingClientRect();
      sitemapWidth = sitemap.offsetWidth;
      sitemapFixTop = 0;
      if (width <= 768) {
        if (scrollTop > billboardHeight) {
          sitemapFixTop = 44 + 72 + 50;
        }
        sitemapHeight = window.innerHeight - sitemapFixTop - footerHeight - 50;
      } else if (width > 768 && width <= 1400) {
        if (scrollTop > billboardHeight) {
          sitemapFixTop = 44 + 72 + 60;
        }
        sitemapHeight = window.innerHeight - sitemapFixTop - footerHeight - 60;
        //console.log("sitemapHeight", sitemapHeight);
      } else {
        if (scrollTop > billboardHeight) {
          sitemapFixTop = 44 + 72 + 70;
        }
        sitemapHeight = window.innerHeight - sitemapFixTop - footerHeight - 70;
      }
      if (scrollTop <= billboardHeight) {
        sitemapFixPosition = "relative";
        sitemapFixTop = 0;
        sitemapFixLeft = 0;
      } else {
        sitemapFixPosition = "fixed";
        sitemapFixLeft = sitemapPosition.left.toFixed() + 'px'
      }
      sitemap.style.position = sitemapFixPosition;
      sitemap.style.top = sitemapFixTop + 'px';
      sitemap.style.right = "auto";
      sitemap.style.left = sitemapFixLeft;
      sitemap.style.width = sitemapWidth + 'px';

      if (document.getElementById("wpadminbar")) {
        footerAppears = bodyHeight - window.innerHeight + footerHeight - 44 - 72 + 32; 
      } else {
        footerAppears = bodyHeight - window.innerHeight + footerHeight - 44 - 72; 
      }

      if (scrollTop <= footerAppears) {
        sitemap.style.height = "auto";
      } else {
        sitemap.style.height = sitemapHeight + 'px';
      }

    }
  }

  stickySitemap();

  // Scroll
  window.addEventListener("scroll", function() {
    if (home) {
      let homeCarousel = document.getElementById("home-hero");
      if (window.scrollY > (homeCarousel.offsetTop + homeCarousel.offsetHeight - 116)) {
        home.classList.remove("dark");
      } else {
        home.classList.add("dark");
      } 
    }
    stickySitemap();
  });

  // Admin Bar
  if (adminBar) {
    document.body.classList.add("admin"); 
  }

  window.onresize = function() {
    screenSizeCheck();
    if (width <= navigationWidth) {
      mobileNavBtnOpen.classList.remove("none");
      mobileNavBtnClose.classList.add("none");
      naivationLevel1.style.display = "none";
    } else {
      naivationLevel1.style.display = "flex";
    }

    var open2 = document.getElementsByClassName("open-level-2");
    while (open2.length)
    open2[0].className = open2[0].className.replace(/\bopen-level-2\b/g, "");

    var open3 = document.getElementsByClassName("open-level-3");
    while (open3.length)
    open3[0].className = open3[0].className.replace(/\bopen-level-3\b/g, "");

    stickySitemap();

  };

  // Newsletter Form
  newsletterWrapperLocal = document.getElementById("wpforms-181-field_1-container");
  newsletterButtonLocal = document.getElementById("wpforms-submit-181");
  if (newsletterWrapperLocal) {
    newsletterWrapperLocal.append(newsletterButtonLocal);
    newsletterButtonLocal.innerHTML = "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path d='M16.1 260.2c-22.6 12.9-20.5 47.3 3.6 57.3L160 376V479.3c0 18.1 14.6 32.7 32.7 32.7c9.7 0 18.9-4.3 25.1-11.8l62-74.3 123.9 51.6c18.9 7.9 40.8-4.5 43.9-24.7l64-416c1.9-12.1-3.4-24.3-13.5-31.2s-23.3-7.5-34-1.4l-448 256zm52.1 25.5L409.7 90.6 190.1 336l1.2 1L68.2 285.7zM403.3 425.4L236.7 355.9 450.8 116.6 403.3 425.4z'/></svg>";
  }
  newsletterWrapper = document.getElementById("wpforms-133-field_1-container");
  newsletterButton = document.getElementById("wpforms-submit-133");
  if (newsletterWrapper) {
    newsletterWrapper.append(newsletterButton);
    newsletterButton.innerHTML = "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path d='M16.1 260.2c-22.6 12.9-20.5 47.3 3.6 57.3L160 376V479.3c0 18.1 14.6 32.7 32.7 32.7c9.7 0 18.9-4.3 25.1-11.8l62-74.3 123.9 51.6c18.9 7.9 40.8-4.5 43.9-24.7l64-416c1.9-12.1-3.4-24.3-13.5-31.2s-23.3-7.5-34-1.4l-448 256zm52.1 25.5L409.7 90.6 190.1 336l1.2 1L68.2 285.7zM403.3 425.4L236.7 355.9 450.8 116.6 403.3 425.4z'/></svg>";
  }

  if (document.getElementById("filter-title")) {
    document.getElementById("filter-title").addEventListener('change', function() {
      if (this.checked) {
        this.parentElement.classList.add("open"); 
      } else {
        this.parentElement.classList.remove("open"); 
      }
    });
  }

  if (document.getElementById("filter-product")) {
    document.getElementById("filter-product").addEventListener('change', function() {
      if (this.checked) {
        this.parentElement.classList.add("open"); 
      } else {
        this.parentElement.classList.remove("open"); 
      }
    });
  }

  if (document.getElementById("filter-usage")) {
    document.getElementById("filter-usage").addEventListener('change', function() {
      if (this.checked) {
        this.parentElement.classList.add("open"); 
      } else {
        this.parentElement.classList.remove("open"); 
      }
    });
  }

  if (document.getElementById("filter-discipline")) {
    document.getElementById("filter-discipline").addEventListener('change', function() {
      if (this.checked) {
        this.parentElement.classList.add("open"); 
      } else {
        this.parentElement.classList.remove("open"); 
      }
    });
  }

});

// Search
let navSearch = document.getElementById('nav-search');
let navSearchButton = document.getElementById('nav-search-button');
function navSeach() {
  if (navSearch.value != "") {
    navSearchButton.disabled = false;
    navSearchButton.firstElementChild.style.fill = "#026666";
    if (event.key === "Enter") {
      event.preventDefault();
      location.href = '/resources/?_search=' + navSearch.value;
    }
  }
}

function navSeachButton() {
  event.preventDefault();
  if (navSearch.value != "") {
    location.href = '/resources/?_search=' + navSearch.value;
  }
}

// Navigation
function navMobileOpen(x) {
  mobileNavBtnOpen.classList.add("none");
  mobileNavBtnClose.classList.remove("none");
  naivationLevel1.style.display = "flex";
}

function navMobileClose(x) {
  mobileNavBtnOpen.classList.remove("none");
  mobileNavBtnClose.classList.add("none");
  naivationLevel1.style.display = "none";
}

function navMobileLevel1(x) {
  if (width <= navigationWidth) {
    x.classList.toggle("open-level-2");
    x.parentElement.classList.toggle("open-level-2");
  }
}

function navMobileLevel2(x) {
  if (width <= navigationWidth) {
    x.classList.toggle("open-level-3");
    x.parentElement.classList.toggle("open-level-3");
  }
}

function navLevel1Open(x) {
  if (width >= navigationWidth) {
    x.classList.add("open-level-2");
  }
}

function navLevel1Close(x) {
  if (width >= navigationWidth) {
    x.classList.remove("open-level-2");
  }
}

// Sitemap Navigation
function sitemapLevel2(x) {
  x.parentElement.classList.toggle("open");
}

function sitemapLevel3(x) {
  x.parentElement.classList.toggle("open");
}

function homeScroll(x) {
  document.getElementById("scroll").scrollIntoView();
}