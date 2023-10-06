// header scrolling effect
$(window).on('scroll', function(){
	if($(window).scrollTop()){
      $('header').addClass('nav-show');
		  
	} 
	else{
		$('header').removeClass('nav-show');
	}
	   
})

//hamburger
const navSlide = () => {
	 const hamburger = document.querySelector(".hamburger");
	 const navbar = document.querySelector(".nav-bar");
	 const navLinks = document.querySelectorAll(".nav-bar li");

     hamburger.onclick = () => {
		
	 navbar.classList.toggle("nav-active");
		 
      //Animation links
	 navLinks.forEach((link, index) => {
		if (link.style.animation) {
			link.style.animation = "";
		} else {
			link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7+1}s`;
		   }
		});
	  //hamburger animation
	 hamburger.classList.toggle("toggle");
    }
	 
	}

window.onload = () => navSlide();

<!--SearchBar-->
	
function getReceipes() {
  return document.getElementsByClassName('recipe');
}

function randomDiv() {
  var receipes = getReceipes();

  return receipes[Math.floor(Math.random() * receipes.length)];
}
  
// randomDiv().style.display="inline-block";

document.getElementById('search').addEventListener('keyup', function(e) {
  var searchText = this.value;

  Array.from(getReceipes()).forEach(function(recipe) {
    if (searchText.length === 0) {
       recipe.style.display = 'none';
    } else {
      var nameElement = recipe.getElementsByTagName('h2')[0];
    
      if (nameElement && nameElement.innerText.indexOf(searchText) > -1) {
        recipe.style.display = 'inline-block';
      } else {
        recipe.style.display = 'none';
      }
    }
  });
});
