"use strict";

function homePage() {
    const content = document.getElementById("content");
    content.innerHTML = `
    <div class="column">
        <span class="container-light">
		      <h1>
            Welcome to Azazel's Den!
          </h1>
          <h3>
            This is the place where I will be displaying all my work, where to find me and how you could help support me by either commissioning or donating to me. <br>
            Feel free to look around and stay a while!🤭 Note: this site is still under construction!  
          </h3>
        </span>
        <div class="row">
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
    <div class="container">OwO</div>
    `;
};

function blankPage() {
    const content = document.getElementById("content");
    content.innerHTML = `
    
    `;
};

function accessPage() {
  const access = "/access";
  window.location.replace(access);
};