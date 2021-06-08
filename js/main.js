// -------------------- Tab Link/Menu Starts here---------------
function openCity(evt, cityName){
    var i, tabcontent, tablinks;
    
    // to hide the tab content with class="tabcontent
    tabcontent= document.getElementsByClassName("tabcontent");
    for(i=0; i<tabcontent.length; i++){
        tabcontent[i].style.display="none";
    }
    
    tablinks= document.getElementsByClassName("tablinks");
    for(i=0; i<tablinks.length; i++){
        tablinks[i].className=tablinks[i].className.replace(" active", "");
        
    }
    
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display ="block";
    evt.currentTarget.className +=" active";
}
// -------------------- Tab Link/Menu ends here---------------

// -----------------------Dark Mode Starts here-----------------

var app = document.getElementsByTagName("BODY")[0];
// to make it stay either in light mode or darkmode.
if(localStorage.lightMode=="dark"){
    app.setAttribute("darkmode","dark");
        document.getElementById("switch").checked=true;
    }
function darkModes(){
    if(localStorage.lightMode=="dark"){
        localStorage.lightMode="light";
        app.setAttribute("darkmode", "light");
    }else{
        localStorage.lightMode="dark";
        app.setAttribute("darkmode", "dark");
    }
    console.log("lightmode="+localStorage.lightMode);
}
// -----------------------Dark Mode endss here-----------------



$(document).ready(function(){
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
  
        // Store hash
        var hash = this.hash;
  
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 900, function(){
     
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
    

// for jquery slide


$(window).scroll(function() {
    $(".slideanim").each(function(){
        var pos = $(this).offset().top;

        var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
            $(this).addClass("slide");
        }
    });
});
})