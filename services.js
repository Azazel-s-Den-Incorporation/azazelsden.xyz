"use strict";

// services.js is for the purpose of:
  // executing the functions between the server and the user interface
  // controlling global variables
// 

// Content Find Codes
  // User Handlers - usrh
    // General Content Handling - gch
  // Content Handlers - conth
  // 
//

// User Handlers - usrh
  // General Account Handling - gch

//

// Content Handlers - conth

  // Load Content based on the Location in Address Bar
    window.addEventListener(
      "load",
      () => {
        if (location == "index.html" || "" || "/index") {
          headerContentMain();
          sidebarContentMain();
          footerContentMain();
          homePage()
        } else if (location == "access" || "/access.html") {
          headerContentMain();
          sidebarContentAccess();
          footerContentMain();
          loginContent()
        } else if (location == "posts.html" || "/posts") {
          headerContentMain();
          sidebarContentPosts();
          footerContentMain();
          headerPosts();
          listPosts()
        }
      }
    )

  // Home Page Loader
    function linkHome() {
        if (location == "/index.html" || "" || "/index") {homePage()}
        else if (location != "/index.html" || "" || "/index") {
            window.location.replace("/");
                headerContent();
                sidebarContent();
                footerContent();
                homePage()
        }
    }

  // Access Page      
    function accessLink() {
        const access = "/access.html";
        window.location.replace(access);
    };
    
    function postsLink() {
        const posts = "/posts.html";
        window.location.replace(posts);
    };
// 