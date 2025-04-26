"use strict";
if (location == "index.html" || "" || "index") {
window.addEventListener(
    "load",
    () => {
      headerContent();
      sidebarContent();
      footerContent();
      homePage()
    }
);
} else if (location == "access" || "access.html") {
    window.addEventListener(
        "load",
        () => {
          headerContent();
          footerContent();
          loginContent()
        }
    );
}
