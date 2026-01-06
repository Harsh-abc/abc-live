// Clients Data
$.ajax({
    url: "/clients.json", //API URL
    type: "GET", // GET OR POST,
    cache: false,

    // This function calls before ajax API Hits, Here we have to show our loader
    beforeSend: function(){
      // This function calls before ajax API Hits, Here we have to show our loader
      $(".loadr").removeClass("d-none");
    }, // End Before
	 
    // Once our API call send success this function gets called.
    success: function(response, status)  {
      //console.log(response)

      $(".loadr").addClass("d-none");let html = "";
      var clients = response;
      for (let i = 0; i < 24; i++) {
     // for (let i = 0; i < clients.length; i++) { 
        const { id, title, logo, seourl } = clients[i];
       // clients.sort();
        //clients.reverse();
        html += `<div class="brand__item fade_bottom"> <img src="${logo}" title="${title}" alt="${title}" class="img-fluid" /> </div>`;
      }
      $("#home_client_list").append(html);
	  
    }, // End Success 
	 
	// IF our API get any error
    error: function(error, status){// IF our API get any error
      // this function gets called.
      $(".loadr-row").addClass("d-none");
      let html = `<div class="alert alert-danger"> Error while fetching data </div>`;
    }, // End Error
});


async function getUsers() {
    let url = '/clients.json'; //API URL
    try {
        let res = await fetch(url);
        return await res.json();
    } catch (error) {
        console.log(error);
    }
}

async function renderUsers() {
    let users = await getUsers();
    let html = '';
    users.forEach(client => {
        let htmlSegment = `<div class="brand__item fade_bottom"> <img src="${client.logo}" title="${client.title}" alt="${client.title}" class="img-fluid" /> </div>`;

        html += htmlSegment;
    });

    let container = document.querySelector('#client_list');
    container.innerHTML = html;
}

renderUsers();