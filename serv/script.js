var pere=document.getElementById('pere');
var fils=document.getElementById('fils');
var titre=document.getElementById('titre');
pere.addEventListener("mousemove",(e)=>{
	let x=(window.innerWidth / 2 - e.pageX)/25;
	let y=(window.innerHeight / 2 - e.pageY)/25;
	fils.style.transform=`rotateY(${y}deg) rotateX(${x}deg)`;
});
//rotation out
pere.addEventListener("mouseleave",(e)=>{
	fils.style.transform="none";
	titre.style.transform="translateY(0px)";

});
//rotation in
pere.addEventListener("mouseenter",(e)=>{
	fils.style.transform="all 0.5s ease";
	fils.style.transform=`rotateY(0deg) rotateX0deg)`;
	titre.style.transform="translateX(70px)";
});