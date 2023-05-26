
$(document).ready(function() {

	$("#slider").owlCarousel({
   
		// navigation : true, // Show next and prev buttons
		slideSpeed : 300,
		loop:true,
		autoPlay : 3000,
		paginationSpeed : 400,
		singleItem:true

	});
	$(".uudai-list").owlCarousel({
   
		autoPlay: 3000,
   
		items : 3,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,3]
   
	});
	$(".rooms-slider").owlCarousel({
   
		autoPlay: 3000,
   
		items : 1,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,3]
   
	});
	$(".thumb").owlCarousel({
   
		autoPlay: 3000,
   
		items : 3,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,3]
   
	});
	
 
	const inputSearch = document.querySelector(".input-search")
	const autoBox = document.querySelector(".autobox")
	
	inputSearch.onkeyup = (e) => {
		let checkData = e.target.value;
		let dataArray = []
		if (checkData) {
			dataArray = recomentlist.filter((data)=>{
			   return data.toLocaleLowerCase().startsWith(checkData.toLocaleLowerCase())
			})
			dataArray = dataArray.map((data)=>{
				return data = "<li>"+data+"</li>"
			})
			autoBox.classList.add("active")
			showadress (dataArray)
			let liItem = autoBox.querySelectorAll("li")
			for (let i=0;i<liItem.length;i++){
				  liItem[i].addEventListener("click",function(){
			   inputSearch.value = liItem[i].innerHTML
			   autoBox.classList.remove("active")
			 })
			}
			}
		else {
			autoBox.classList.remove("active")
		}
	  
	   
	}
	function showadress (list){
		let listData
		if(!list.length) {
			listData = "<li>"+inputSearch.value+"</li>"
		}
		else {
			listData = list.join("")
		}
		autoBox.innerHTML = listData
	}
	
	
	
	let recomentlist =[
		"Hà Nội",
		"Hạ Long",
		"Hồ Chí Minh",
		"Phú Quốc",
		"Nha Trang",
		"Quảng Bình",
		"Đà Nẵng",
		"Đà Lạt",
		"SaPa",
		"Vũng Tàu",
		"Phan Thiết",
		"Huế",
		"Thanh Hóa",
		"Cao Bằng",
		
	]
	const inputNumber = document.querySelector(".number-people")
	const numberBox = document.querySelector(".number-box")
	const nuberClose = document.querySelector(".number-close")
	inputNumber.addEventListener ("click", function(){
		numberBox.classList.add("active")
	})
	nuberClose.addEventListener ("click", function(){
		numberBox.classList.remove("active")
	})

	const nguoilonPlus = document.querySelector(".nguoilonPlus")
	const nguoilonMinus = document.querySelector(".nguoilonMinus")
	let nguoilonvalue = document.querySelector(".nguoilon span")
	let i=0
	nguoilonPlus.addEventListener("click",function(){
		i = i+1
		nguoilonvalue.innerHTML = i
		totalNumber () 
	})
	nguoilonMinus.addEventListener("click",function(){
		if(i<=0){
			i = 0
		} 
		else {
			i = i-1
			nguoilonvalue.innerHTML = i
			totalNumber () 
			// console.log(i)
		}

	})
	const treemPlus = document.querySelector(".treemPlus")
	const treemMinus = document.querySelector(".treemMinus")
	let treemvalue = document.querySelector(".treem span")
	let j=0
	treemPlus.addEventListener("click",function(){
		j = j+1
		treemvalue.innerHTML = j
		totalNumber () 
	})
	treemMinus.addEventListener("click",function(){
		if(j<=0){
			j = 0
		} 
		else {
			j = j-1
			treemvalue.innerHTML = j
			totalNumber () 
		
		}

	})
	const sosinhPlus = document.querySelector(".sosinhPlus")
	const sosinhMinus = document.querySelector(".sosinhMinus")
	let sosinhvalue = document.querySelector(".sosinh span")
	let f=0
	sosinhPlus.addEventListener("click",function(){
		f = f+1
		sosinhvalue.innerHTML = f
		totalNumber () 
	})
	sosinhMinus.addEventListener("click",function(){
		if(f<=0){
			f = 0
		} 
		else {
			f = f-1
			sosinhvalue.innerHTML = f
			totalNumber () 
			
		}

	})
	function totalNumber () {
		toltal = i+j+f
	inputNumber.value = toltal + " " + "Người"
		console.log(toltal)
	} 

	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
	autoplay:true,
    autoplayTimeout:3000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})


$(".qtyminus").on("click",function(){
	var now = $(".qty").val();
	if ($.isNumeric(now)){
		if (parseInt(now) -1> 0)
		{ now--;}
		$(".qty").val(now);
	}
})            
$(".qtyplus").on("click",function(){
	var now = $(".qty").val();
	if ($.isNumeric(now)){
		$(".qty").val(parseInt(now)+1);
	}
});


$(".qtyminus2").on("click",function(){
	var now2 = $(".qty2").val();
	if ($.isNumeric(now2)){
		if (parseInt(now2) -1> 0)
		{ now2--;}
		$(".qty2").val(now2);
	}
})            
$(".qtyplus2").on("click",function(){
	var now2 = $(".qty2").val();
	if ($.isNumeric(now2)){
		$(".qty2").val(parseInt(now2)+1);
	}
});

	var toTop=document.getElementsByClassName('scroll-top');
    window.addEventListener('scroll',function(event){
        var updown = document.documentElement.scrollTop;
        if(updown > 20){
            toTop[0].style.opacity= "1";
 
        }else{
            toTop[0].style.opacity= "0";

        }
    });

$('.scroll-top').on('click',function(event){
	event.preventDefault();
	$('html, body').animate({scrollTop:0}, 'slow');
});

$('.toggle-1').click(function(){
	$('.toggle-tab-content').slideToggle(200);
});
$('.toggle-2').click(function(){
	$('.toggle-tab-content-1').slideToggle(200);
});
$('.toggle-3').click(function(){
	$('.toggle-tab-content-2').slideToggle(200);
});
$('.toggle-4').click(function(){
	$('.toggle-tab-content-3').slideToggle(200);
});

});
$(window).on("load", function(){
	$("#loading").fadeOut(500);
	$("body").removeClass('reload');

	$("#loading").delay(500).fadeOut(500);
	$("body").removeClass('.reload');
});

