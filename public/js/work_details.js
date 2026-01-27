// Project Details

$.ajax({
    url: "data.json", //API URL
    type: "GET", // GET OR POST
	dataType: "json",
    cache: "false",
    beforeSend: function(){
      // This function calls before ajax API Hits 
      $(".loadr-row").removeClass("d-none");
      //alert("Error BeforeSend");
    },
    success: function(response, status)  {
      // Once our API call send success this function gets called.
      //alert("Sucess Alert (Project Details Page)");
      //console.log(response.projects)
      
		var work_name = location.search.split('projects=')[1];

		// alert(work_name);
		$(".loadr-row").addClass("d-none");
		let html = "";
		let firstdet_html = "";
		let sec_html = ""; 
		let third_html = ""; 
		let thirddet_html = ""; 
		let thirdtls_html = ""; 
		let vdobanner_html = ""; 
		let forth_html = ""; 
		let fifth_html = ""; 
		let fifthimg_html = ""; 
		let fifthpara_html = ""; 

		var projectdata = response.projects;
		for (let i = 0; i < projectdata.length; i++) {
			const {title, seourl, name, banner, category_name, start_date, end_date, year, client, vdobanner, project_head, project_info, project_head2, project_info2, work_desc, tools, project } = projectdata[i];

			if(seourl===work_name){
				//console.log(title);
		   
				html += `<div class="col-xxl-9 col-xl-8 col-lg-7 col-md-7"> <div class="sec-title-wrapper"> <h2 class="sec-title animation__char_come"> ${name} </h2> </div> </div>
						<div class="col-xxl-3 col-xl-4 col-lg-5 col-md-5"> <div class="portfolio__detail-info"> <ul id="first_details"> </ul> </div> </div> `;						
				$("#first_section").append(html); 
						
				firstdet_html += ` <li>Category <a href="#"> ${category_name} </a></li> <li>Client <span>${client}</span></li> <li>Start Date <span> ${start_date} </span></li> <li>Handover <span> ${end_date} </span></li> `;				
				$("#first_details").append(firstdet_html);
				
				//sec_html += `<img src="${banner}" onerror="this.onerror=null; this.src='/img/portfolio/no_banner.jpg'" />`;
				sec_html += `<div class="cover"  data-scrollax="properties:{ translateY: '10%' }"> <img src="${banner}" onerror="this.onerror=null; this.src='/img/portfolio/no_banner.jpg'" /></div>`;
				$("#sec_section").append(sec_html); 
				
				third_html += ` <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5"> <h2 class="portfolio__detail-title title-anim"> ${project_head} </h2> </div> <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7"> <div class="portfolio__detail-text"> <p> ${project_info} </p> <div class="d-flex"> <ul id="third_details"> </ul> <ul id="thirdtls_details"> </ul> </div> </div> </div>`;
				$("#third_section").append(third_html); 
				
					
				for (let e = 0; e < work_desc.length; e++) {
				//for (let e = 0; e < 1; e++) {
					var tech = work_desc[e].tech;
					//console.log(tech);
					thirddet_html += `<li> + ${tech} </li> `;
				} // End ForLoop
				$("#third_details").append(thirddet_html);

				for (let e = 0; e < tools.length; e++) {
				//for (let e = 0; e < 1; e++) {
					var tool = tools[e].tool;
					//console.log(tool);
					thirdtls_html += `  <li> + ${tool} </li> `;
				} // End ForLoop
				$("#thirdtls_details").append(thirdtls_html);
				
				
				console.log(vdobanner);
				vdobanner_html += `<source src="${vdobanner}" type="video/mp4">`;
				
				
				fifth_html += `<div id="fifth_img"> </div> <p id="fifth_para"> </p>`;
				$("#fifth_section").append(fifth_html); 
				
				// Project Pics
				for (let e = 0; e < project.length; e++) {
					var project_pic = project[e].project_pic;
					var label = project[e].label;
					//console.log(project_pic);
					//console.log(label);
					
					if(label == "0"){
						forth_html += `<img src="${project_pic}" onerror="this.onerror=null; this.src='/img/portfolio/no_img_1.jpg'" /> `;
					} 
					if(label == "1"){
						fifthimg_html += `<img src="${project_pic}" onerror="this.onerror=null; this.src='/img/portfolio/no_img.jpg'" />`
					}
				} // End ForLoop
			   
				
				$("#forth_section").append(forth_html);
				$("#fifth_img").append(fifthimg_html); 
				$("#banner_video").append(vdobanner_html); 
				
				
				fifthpara_html += `${project_info2}`;
				//$("#fifth_para").append(fifthpara_html);
			
			
				document.title = `${title}`;            
				jQuery('#project_data').addClass(`${seourl}`) 

			} //SEO URL
		} // For Loop

  		//Helper Filtering Data
		
		// Charchater Come Animation 
		let char_come = document.querySelectorAll(".animation__char_come")

		char_come.forEach((char_come) => {
			let split_char = new SplitText(char_come, { type: "chars, words" })
			gsap.from(split_char.chars, { duration: 1, x: 70, autoAlpha: 0, stagger: 0.05 });
		})


		// Charchater Come long Animation 
		let char_come_long = document.querySelectorAll(".animation__char_come_long")

		char_come_long.forEach((char_come) => {
			let split_char = new SplitText(char_come, { type: "chars, words" })
			gsap.from(split_char.chars, { duration: 1, x: 70, autoAlpha: 0, stagger: 0.15 });
		})
		  
		// 25. Title Animation
		let splitTitleLines = gsap.utils.toArray(".title-anim");

		splitTitleLines.forEach(splitTextLine => {
		  const tl = gsap.timeline({
			scrollTrigger: {
			  trigger: splitTextLine,
			  start: 'top 90%',
			  end: 'bottom 60%',
			  scrub: false,
			  markers: false,
			  toggleActions: 'play none none none'
			}
		  });

		  const itemSplitted = new SplitText(splitTextLine, { type: "words, lines" });
		  gsap.set(splitTextLine, { perspective: 400 });
		  itemSplitted.split({ type: "lines" })
		  tl.from(itemSplitted.lines, { duration: 1, delay: 0.3, opacity: 0, rotationX: -80, force3D: true, transformOrigin: "top center -50", stagger: 0.1 });
		});
		/////////////////////////////////////////////////////  
		
		/*
		
		document.writeln("<script type='text/javascript' src='/js/ScrollTrigger.min.js'></script>");
		document.writeln("<script type='text/javascript' src='/js/ScrollToPlugin.min.js'></script>");
		document.writeln("<script type='text/javascript' src='/js/ScrollSmoother.min.js'></script>"); 
		
		// Get Device width
		let device_width = window.innerWidth;
		if (device_width > 100) {
			const smoother = ScrollSmoother.create({ 
				effects: device_width < 1025 ? false : true, 
			});
		}
		*/
	
		jQuery(document).ready(function($){
		  'use strict';

		  $.Scrollax();
		}); 
       
    },  
    error: function(error, status){// IF our API get any error this function gets called.
		//alert('Error occurs!');
		$(".loadr-row").removeClass("d-none");
		let html = `<div class="alert alert-danger">Error while fetching data</div>`;
		//alert("Error Alert");
    },
});
 