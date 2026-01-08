// Work Data
$.ajax({
    url: "/data.json", //API URL
    type: "GET", // GET OR POST
    beforeSend: function(){
      // This function calls before ajax API Hits 
      $(".loadr-row").removeClass("d-none");
      //alert("Error BeforeSend");
    },
    success: function(response, status)  {
		// Once our API call send success  this function gets called.
		// alert("Sucess Alert (Work Page)");
		// console.log(response.projects) 
           
		$(".loadr-row").addClass("d-none");
		let html = "";
		let menuhtml = "";
		let procounthtml = "";

		//alert(typename);
		//var work_name = location.search.split('projects=')[1];
		
		//if(seourl===work_name){
			var project_menu = response.categories;
			
			// Count For Menu 
			var project_count = response.projects;
			var projcount = project_count.length;
			//console.log(projcount);

			var current_url = window.location.href;
			var strArrayp = current_url.split("/");
			var insignt_name = strArrayp[4];

			for (let i = 0; i < project_menu.length; i++) {
				const { category, seourl } = project_menu[i];
				//console.log(category);
				//console.log(seourl);
				//console.log(projcount);
				menuhtml += `<li> <a href="#" class="is_active" id="insignt_${i}" onclick="menubtn('${seourl}')"> ${category} <span id="${seourl}">${projcount}</span> </a> </li>`;
			
			} // For Loop
			
			
			
			
			var project_data = response.projects;
			for (let i = 0; i < project_data.length; i++) {
				const { title, name, thumbnail, poster, category_name, video_thumb, type, seourl } = project_data[i];
			   //console.log(name);
		
				if (thumbnail==0) {
					html += `<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4  ${type}"> <article class="blog__item"> <div class="blog__img-wrapper"> <a href="#"> <div class="img-box"> <video id="video_thumb" autoplay loop muted> <source src="${video_thumb}.mp4" type="video/mp4"> <source src="${video_thumb}.ogg" type="video/ogg"> Your browser does not support HTML5 video. </video> </div> </a> </div> <h4 class="blog__meta"> ${category_name} </h4> <h5><a href="#" class="blog__title"> ${name} </a></h5> </article> </div>`; 			
			   } else {
					html += `<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4  ${type}"> <article class="blog__item"> <div class="blog__img-wrapper"> <a href="#"> <div class="img-box"> <img class="image-box__item" src="${thumbnail}" alt="${name}" onerror="this.onerror=null; this.src='/img/portfolio/no_img.jpg'" /> <img class="image-box__item" src="${thumbnail}" alt="${name}" onerror="this.onerror=null; this.src='/img/portfolio/no_img.jpg'" /> </div> </a> </div> <h4 class="blog__meta"> ${category_name} </h4> <h5><a href="#" class="blog__title"> ${name} </a></h5> </article> </div>`;	
			   }
				//document.title = `${title}`;
				//jQuery('#worklisting').addClass(`${seourl}`)  
			
			} // For Loop
			 
		//} // if Condition
      
		$("#worklisting").append(html);      
		$("#work_menu").append(menuhtml);

		// -------------------------------------------------
		// var element = document.getElementById("myDIV");
		// element.classList.remove("mystyle");

		if(insignt_name == 'uidesign-development#'){
			document.getElementById('insignt_1').click();
			 $('.is_active').removeClass('active').click();
        	$('#insignt_1').addClass('active').click();
		}else if(insignt_name == 'interactive-solutions#'){
			document.getElementById('insignt_2').click();
			 $('.is_active').removeClass('active').click();
        	$('#insignt_2').addClass('active').click();
		}else if(insignt_name == 'branding#'){
			document.getElementById('insignt_3').click();
			 $('.is_active').removeClass('active').click();
        	$('#insignt_3').addClass('active').click();
		}else if(insignt_name == 'app-development#'){
			document.getElementById('insignt_4').click();
			 $('.is_active').removeClass('active').click();
        	$('#insignt_4').addClass('active').click();
		}else if(insignt_name == 'e-commerce#'){
			document.getElementById('insignt_5').click();
			 $('.is_active').removeClass('active').click();
        	$('#insignt_5').addClass('active').click();
		}else if(insignt_name == 'digital-marketing#'){
			document.getElementById('insignt_6').click();
			 $('.is_active').removeClass('active').click();
        	$('#insignt_6').addClass('active').click();
		}
		// ---------------------------------------------------

		// Project Count in Menu
		//document.getElementById("worklisting").innerHTML =  document.querySelectorAll('.uidesign-development').length;
		//var SameClass = + document.querySelectorAll('.all').length;
		var UiClass = + document.querySelectorAll('.uidesign-development').length;
		var intsolClass = + document.querySelectorAll('.interactive-solutions').length;
		var brandClass = + document.querySelectorAll('.branding').length; 
		var appClass = + document.querySelectorAll('.app-development').length; 
		var ecomClass = + document.querySelectorAll('.e-commerce').length; 
		var digmarClass = + document.querySelectorAll('.digital-marketing').length; 
		
		//$("#all").html(SameClass);
		$("#uidesign-development").html(UiClass);
		$("#interactive-solutions").html(intsolClass);
		$("#branding").html(brandClass);
		$("#app-development").html(appClass);
		$("#e-commerce").html(ecomClass);
		$("#digital-marketing").html(digmarClass);
		
		//var SameClass = + document.querySelectorAll('.branding').length;
		//console.log(SameClass);
		//alert(SameClass);

		//document.getElementById('video_thumb').play(); 
	
    },  
    error: function(error, status){// IF our API get any error
      // this function gets called.
      $(".loadr-row").removeClass("d-none");
      let html = `<div class="alert alert-danger">Error while fetching data</div>`;
      //alert("Error Alert");
    },
});


function menubtn(tabbtn) {
	if(tabbtn == 'all'){
		window.location.href = '/works';
	}else{
		var DOMAIN_NAME = '/works/';
		window.history.pushState("new", "title", DOMAIN_NAME + tabbtn);
		//document.getElementById('worklisting').innerHTML = html;
		var page_url = window.location.href;
		var strArrayp = page_url.split("/");
		var typename = strArrayp[2];
			
		// Work Data
		$.ajax({
			url: "/data.json", //API URL
			type: "GET", // GET OR POST
			beforeSend: function(){
			// This function calls before ajax API Hits 
			$(".loadr-row").removeClass("d-none");
			//alert("Error BeforeSend");
			},
			success: function(response, status)  {
				$("#worklisting").html(''); 
				// Once our API call send success  this function gets called.
				// alert("Sucess Alert (Work Page)");
				// console.log(response.projects) 
				
				$(".loadr-row").addClass("d-none");
				let html = ""; 
				var project_data = response.projects;
				console.log(project_data);
				
				for (let i = 0; i < project_data.length; i++) {
					const { title, name, thumbnail, poster, category_name, video_thumb, type, seourl } = project_data[i];
				//console.log(name);
					if(type===tabbtn){
						if (thumbnail==0) {
								html += `<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4  ${type}"> <article class="blog__item"> <div class="blog__img-wrapper"> <a href="#"> <div class="img-box"> <video id="video_thumb" autoplay loop muted> <source src="${video_thumb}.mp4" type="video/mp4"> <source src="${video_thumb}.ogg" type="video/ogg"> Your browser does not support HTML5 video. </video> </div> </a> </div> <h4 class="blog__meta"> ${category_name} </h4> <h5><a href="#" class="blog__title"> ${name} </a></h5> </article> </div>`;
						}
						else {
							html += `<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4  ${type}"> <article class="blog__item"> <div class="blog__img-wrapper"> <a href="#"> <div class="img-box"> <img class="image-box__item" src="${thumbnail}" alt="${name}" onerror="this.onerror=null; this.src='/img/portfolio/no_img.jpg'" /> <img class="image-box__item" src="${thumbnail}" alt="${name}" onerror="this.onerror=null; this.src='/img/portfolio/no_img.jpg'" /> </div> </a> </div> <h4 class="blog__meta"> ${category_name} </h4> <h5><a href="#" class="blog__title"> ${name} </a></h5> </article> </div>`;	
						} 
					} // END IF   
				} // For Loop 
				$("#worklisting").append(html);  
				
				document.getElementById('video_thumb').play();
			},  
			error: function(error, status){// IF our API get any error
			// this function gets called.
			$(".loadr-row").removeClass("d-none");
			let html = `<div class="alert alert-danger">Error while fetching data</div>`;
			//alert("Error Alert");
			},
		});
			
	}
}