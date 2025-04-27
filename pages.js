"use strict";

// pages.js is for the purpose of:
  // defining the content of a given page

// 


function homePage() {
  const content = document.getElementById("content");
  content.innerHTML = `
    <div id="column">
      <span class="container-light">
        <h1>
          Welcome to Azazel's Den!
        </h1>
        <h3>
          This is the place where I will be displaying all my work, where to find me and how you could help support me by either commissioning or donating to me. <br>
          Feel free to look around and stay a while!🤭 Note: this site is still under construction!  
        </h3>
      </span>
      <div id="row">
        <a href="https://discord.gg/AA2yBsMwNx" class="container-light">
          <h2>
            Check out our Discord Server!
          </h2>
          <h3>
            This server is an 18+ only server!<br>
            IDs must be provided upon request.
          </h3>
          <img class="thumbnail" src="/bin/media/discord.svg"/>
        </a>
        <a href="https://map.azazelsden.xyz" class="container-light">
          <h2>
            Map Builder
          </h2>
          <h3>
            A fork of Azgaar's Fantasy Map Generator.
          </h3>
        </a>
        <a href="https://github.com/AzazelMango/azmap" class="container-light">
          <h2>
            Map GitHub
          </h2>
          <h3>
            Github link for the Map.
          </h3>
        </a>
        
      </div>
      <p><a class="easteregg" href="/office/filingcabinet/blueday/cheese.html">🧀</a></p>
    </div>
  `;
};

function aboutPage() {
  const content = document.getElementById("content");
  content.innerHTML = `
  <div id="column"><span class="container-light">
        <h1>
          About Us
        </h1>
        <img class="image" height="194px" src="/office/storageroom/bin/media/azazelsdenincorporation.png"/>
        <span class="row">
          
          <span class="column">
            <h1>
              Azazel's Den Incorporation
            </h1>
            <h2>
              Quick Facts
            </h2>
            <p>
            </p>
          </span>
        </span>
        <h2>
          Overview
        </h2>
        <h2>
          Subsidiaries
        </h2>
        <h3>
          - Az Arts<br>
          <img class="image" height="256px" src="/office/storageroom/bin/media/azartslogo.png"/><br>
          - Dragonfrüt Studio Records<br>
          <img class="image" height="256px" src="/office/storageroom/bin/media/Dragonfrüt-Studio-Records-alpha.png"/><br>
          - Mango Treasury Reserve<br>
          <img class="image" height="256px" src="/office/storageroom/bin/media/"/><br>
        </h3>
      </span>
      <span class="container-light">
        <h1>
          About Azazel
        </h1>
        <span class="row">
          <img class="image" height="348px" src="/office/storageroom/bin/media/UwU Azazel Square.png"/>
          <span class="column">
            <h1>
              Azazel WDS Mango
            </h1>
            <h2>
              Quick Facts
            </h2>
            <p>
              - Born 29 June 2000 <br>
              - Florida, United States <br>
              - Speaks English and A2 German <br>
              - Artist and Musician <br>
              - Autistic and ADHD <br>
              - They/Them (English) and Er (Deutsch)
            </p>
          </span>
        </span>
        <h2>
          Overview
        </h2>
        <p>
          Azazel is a self proclaimed Musician, Artist and an enthusiest of many things from astronomy to psychology to history to lingusitics.
          They 
        </p>
      </span>
    </div>
  `;
};

function blankPage() {
  const content = document.getElementById("content");
  content.innerHTML = `
  
  `;
};


function privacyPage() {
  const content = document.getElementById("content");
  content.innerHTML = `
  
  `;
};

function termsPage() {
  const content = document.getElementById("content");
  content.innerHTML = `
  
  `;
};

function contactPage() {
  const content = document.getElementById("content");
  content.innerHTML = `
  
  `;
};