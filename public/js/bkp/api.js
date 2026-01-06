// Work Data

$.ajax({
    url: "data.json", //API URL
    type: "GET", // GET OR POST
    beforeSend: function(){
      // This function calls before ajax API Hits 
      $(".loadr-row").removeClass("d-none");
      //alert("Error BeforeSend");
    },
    success: function(response, status)  {
      // Once our API call send success  this function gets called.
     // alert("Sucess Alert (Work Page)");
      //console.log(response) 
           
      $(".loadr-row").addClass("d-none");let html = "";
      var page_url = window.location.href;
      var strArrayp = page_url.split("/");
      var typename = strArrayp[2];
      alert(typename);

      var project_data = response;
      for (let i = 0; i < project_data.length; i++) {
          const { title, name, thumbnail, poster, videothumbnail, type, seourl } = project_data[i];
           //console.log(name);
    

           if (thumbnail==0) {
            html += `<div class="col-md-4 col-sm-6 col-xs-6  ${type}"> <a href="view?projects=${seourl}" class="thumbnail video_blck"> <div class="product-img"> <video id="video_thumb" poster="${poster}" muted="" autoplay="true" loop=""> <source src="${videothumbnail}" type="video/mp4"> Your browser does not support HTML5 video. </video> <div class="project_overlay"> <p>  ${name} <i class="fa fa-plus-circle" aria-hidden="true"></i></p> <h5> <span> View </span> <i class="fa fa-caret-right" aria-hidden="true"></i> </h5> </div> </div> <div class="project_title"> <h5> ${name}</h5> </div>  </a>  </div> `; 
           } else {
            html += `<div class="col-md-4 col-sm-6 col-xs-6 ${type}"> <a href="view?projects=${seourl}" class="thumbnail"> <div class="product-img"> <img src="${thumbnail}" alt="${name}" class="img-responsive"><div class="project_overlay">  <p> ${name} <i class="fa fa-plus-circle" aria-hidden="true"></i></p> <h5> <span> View </span> <i class="fa fa-caret-right" aria-hidden="true"></i> </h5> </div> </div> <div class="project_title"> <h5> ${name} </h5> </div> </a> </div> `; 
           }
            

          //document.title = `${title}`;
          jQuery('#worklisting').addClass(`${seourl}`)            
          
        } // For Loop
      
      $("#worklisting").append(html);      
    },  
    error: function(error, status){// IF our API get any error
      // this function gets called.
      $(".loadr-row").addClass("d-none");
      let html = `<div class="alert alert-danger">Error while fetching data</div>`;
      //alert("Error Alert");
    },
});

// Project Details

$.ajax({
    url: "data.json", //API URL
    type: "GET", // GET OR POST
    beforeSend: function(){
      // This function calls before ajax API Hits 
      $(".loadr-row").removeClass("d-none");
      //alert("Error BeforeSend");
    },
    success: function(response, status)  {
      // Once our API call send success this function gets called.
      //alert("Sucess Alert (Project Details Page)");
      //console.log(response.data)
      
      var work_name = location.search.split('projects=')[1];
      
      //alert(work_name);
      $(".projectloader").addClass("d-none");
      let html = "";
      let sechtml = "";
      let projectdatahtml = "";
      let toolshtml = "";

      var projectdata = response;
      for (let i = 0; i < projectdata.length; i++) {
          const {title, name, project_info, keywords, description, seourl, tools, project } = projectdata[i];
          if(seourl===work_name){
           //console.log(title);
           
            //for (let e = 0; e < 1; e++) {
              html += `<div class="col-md-10 col-sm-9 col-xs-10"><h1> ${name}</h1></div> <div class="col-md-2 col-sm-3 col-xs-2"> <div class="back_work"> <a href="/work" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Work"> <img src="/img/circle.png" class="img-responsive"> </a> </div> </div>`;
           // } // End ForLoop

            sechtml += `<div class="col-md-9 block" id="project_data"> </div> <div class="col-md-3 wow fadeInLeft animated" data-wow-delay="0.2s"> <h4> PROJECT INFO </h4> <p> ${project_info} </p> <hr> <h4>Tools</h4> <ul id="tools"> </ul> </div> `;



            for (let e = 0; e < project.length; e++) {
            //for (let e = 0; e < 1; e++) {

              if (project[e].video==0) {
                var project_pic = project[e].project_pic;
                //console.log(project);
                 projectdatahtml += `<div class="wow fadeInUp animated" data-wow-delay="0.2s"> <img src="${project_pic}" alt="${name}" class="img-responsive center-block"> </div> </div> `;
              } else {
                var videoname = project[e].videoname;
                var videourl = project[e].video;
                //console.log(project);
                 projectdatahtml += `<br /> <h3> ${videoname} </h3> <br />  <div class="video_bg" style="background:#523b4f;">
                 <video id="video_thumb" poster="${project_pic}" controls="" muted="" autoplay="true">  <source src="${videourl}" type="video/mp4">  Your browser does not support HTML5 video. </video>  </div> `;
              }

            } // End ForLoop




            for (let e = 0; e < tools.length; e++) {
            //for (let e = 0; e < 1; e++) {
                var tool = tools[e].tool;
                //console.log(tool);
                toolshtml += `  <li> <a href="#"> ${tool}</a> </li> `;
            } // End ForLoop

            document.title = `${title} - ABC Designs`;            
            jQuery('#project_data').addClass(`${seourl}`)

          } //SEO URL
          
        } // For Loop
      
      $("#project_heading").append(html);
      $("#project_details").append(sechtml);
      $("#tools").append(toolshtml);
      $("#project_data").append(projectdatahtml);

  		//Helper Filtering Data
       
    },  
    error: function(error, status){// IF our API get any error
      // this function gets called.
      $(".loadr-row").addClass("d-none");
      let html = `<div class="alert alert-danger">Error while fetching data</div>`;
      //alert("Error Alert");
    },
});