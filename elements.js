"use strict";

function headerContent() {
    const content = document.getElementById("header");
    content.innerHTML = `
    <!--*logo-->
      <img src="/bin/images/ADI.png" loading="eager" class="logo clickable" onclick="window.open('/', '_self')"/>
      
      <!--*pretty self-explanatory-->
      <h1 class="notClickable">Azazel's Den Incorporation</h1>
      
      <!--*navbar-->
      <div class="navlinks-header">
  
        <!--*profile-->
        <div class="navlink-header clickable" onclick="window.open('/accounts/profile.php', '_self')">
            <svg viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
              <g id="SVGRepo_bgCarrier" stroke-width="0"/>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
              <g id="SVGRepo_iconCarrier">
                <path d="M512 234.666667m-128 0a128 128 0 1 0 256 0 128 128 0 1 0-256 0Z" fill="#FFB74D"/>
                <path d="M768 556.8S697.6 405.333333 512 405.333333s-256 151.466667-256 151.466667V640h512v-83.2z" fill="#607D8B"/>
                <path d="M874.666667 533.333333H149.333333l-21.333333 85.333334 106.666667 64-42.666667-64h640l-42.666667 64 106.666667-64z" fill="#B0BEC5"/>
                <path d="M192 618.666667h640l-85.333333 256H277.333333z" fill="#78909C"/>
              </g>
            </svg>
          Profile
          </div>
  
        <!--*logout--
        <div class="navlink-header clickable" onclick="window.open('/accounts/logout.php', '_self')">
              <svg viewBox="0 0 24 24" class="icon" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                <g id="SVGRepo_iconCarrier"> 
                  <path d="M14 22V16.9612C14 16.3537 13.7238 15.7791 13.2494 15.3995L11.5 14M11.5 14L13 7.5M11.5 14L10 13M13 7.5L11 7M13 7.5L15.0426 10.7681C15.3345 11.2352 15.8062 11.5612 16.3463 11.6693L18 12M10 13L11 7M10 13L9.40011 16.2994C9.18673 17.473 8.00015 18.2 6.85767 17.8573L4 17M11 7L8.10557 8.44721C7.428 8.786 7 9.47852 7 10.2361V12M14.5 3.5C14.5 4.05228 14.0523 4.5 13.5 4.5C12.9477 4.5 12.5 4.05228 12.5 3.5C12.5 2.94772 12.9477 2.5 13.5 2.5C14.0523 2.5 14.5 2.94772 14.5 3.5Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> 
                </g>
              </svg>
          Logout
        </div><!--php if($_SESSION['loggedin']==true){echo ''; echo$_SESSION["username"]}-->
  
        <!--*welcome text-->
        <div class="navlink-header">
              Welcome!
        </div>
      </div>
    `;
  };
  
  function sidebarContent() {
    const content = document.getElementById("sidebar");
    content.innerHTML = `
      <h3>Welcome!</h3>
          <button id="sidebarHome" onclick="homePage()">Home</button>
          <button id="sidebarAbout" onclick="aboutPage()">About</button>
          <button id="sidebarAccess" onclick="accessPage()">Access</button>
          <button id="sidebarButton" onclick="document.getElementById('cheese').play();">Button!</button>
          <audio id="cheese" src="/bin/audio/cheese.wav"></audio>
    `;
  };
  
  function footerContent() {
    const content = document.getElementById("footer");
    content.innerHTML = `
      <span>
          <a href="/">
             <img
               alt="logo"
               src="/office/storageroom/bin/media/azazelsdenincorporation.png"
               class="logo"
             />
          </a>
       </span>
        <h5>
          Azazel's Den Incorporation is not a registered corporation and acts as a sole proptietorship<br>
        under the authority of Azazel WDS Mango.<br>
        All content on this website is protected under copyright, all rights reserved.
       </h5>
    `;
  };