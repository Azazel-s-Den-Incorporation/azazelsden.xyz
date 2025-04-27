"use strict";

// modules.js is for the purpose of:
  // defining the html code for each set of elements displayed on pages
//

// Find Codes
  // Headers - hdrs
    // Main Header - mhdr
    // 
  // Sidebars - sbrs
    // Main Sidebar - msbr
    // Profile Sidebar - psbr
    // Staff Sidebar - fsbr
    // Support Sidebar - ssbr
  // Footers - ftrs
    // Main Footer - mftr
  // Posts - psts
    // 
  // Direct Messages - dmsgs
    // List Chats - lchts
    // Message Feed - fmsgs
// 

// Headers - hdrs
  // Main Header - mhdr
    function headerContentMain() {
        const content = document.getElementById("header");
        content.innerHTML = `
        <!--*logo-->
        <img src="/bin/images/ADI.png" loading="eager" class="logo clickable" onclick="window.open('/', '_self')"/>
            
        <!--*pretty self-explanatory-->
        <h1 class="notClickable">Azazel's Den Incorporation</h1>   
        `;
    };
  
  
  
//

// Sidebars - sbrs
    function sidebarContentMain() {
    const content = document.getElementById("sidebar");
    content.innerHTML = `
        <h3>Welcome!</h3>
        <ul>
        <li id="sidebarHome" onclick="linkHome()">Home</li>
        <li id="sidebarAccess" onclick="accessLink()">Access</li>
        <li id="sidebarPosts" onclick="postsLink()">Posts</li>
        <li id="sidebarContact" onclick="contactPage()">Contact</li>
        <li id="sidebarAbout" onclick="aboutPage()">About</li>
        <li id="sidebarTerms" onclick="termsPage()">Terms of Service</li>
        <li id="sidebarPrivacy" onclick="privacyPage()">Privacy Policy</li>
        <li id="sidebarButton" onclick="document.getElementById('cheese').play();">Button!</li>
        </ul>
        <audio id="cheese" src="/bin/audio/cheese.wav"></audio>    
    `;
    };

// Footers - ftrs
    function footerContentMain() {
    const content = document.getElementById("footer");
    content.innerHTML = `
        <span>
        <a href="/">
            <img alt="logo" src="/bin/images/azazelsdenincorporation.png" class="logo" />
        </a>
        </span>
        <h5>
        Azazel's Den Incorporation is not a registered corporation and acts as a sole proptietorship<br>
        under the authority of Azazel WDS Mango.<br>
        All content on this website is protected under copyright, all rights reserved.
        </h5>
    `;
    };

// Posts psts