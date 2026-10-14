 // Get references to the header and navbar elements
 const header = document.getElementById("header");
 const navbar = document.getElementById("navbar");

 // Function to handle scroll events
 function handleScroll() {
   const scrollPosition = window.scrollY;
   let scrollThreshold = 50; // You can adjust the threshold as needed

   if (scrollPosition > scrollThreshold) {
     navbar.classList.add("scrolled");
   } else {
     navbar.classList.remove("scrolled");
   }
 }

 // Attach the scroll event listener to the window
 window.addEventListener("scroll", handleScroll);

 // Function to show or hide the button based on scroll position
 