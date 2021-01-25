let id = $("input[name*='id']");
id.attr("readonly","readonly");


$(".btnedit").click(e =>{
    let textvalues = displayData(e);
 
  
   let user = $("input[name*='user']");
   let username = $("input[name*='user_name']");
   let rolename = $("input[name*='role_name']");
   let phone = $("input[name*='phone']");
   let address = $("input[name*='address']");
 
   id.val(textvalues[0]);
   user.val(textvalues[1]);
   username.val(textvalues[2]);
   rolename.val(textvalues[3]);
   phone.val(textvalues[4]);
   address.val(textvalues[5]);
  
 })
 
 
 function displayData(e){
     let id = 0;
     const td = $("#tbody tr td");
     let textvalues = [];
     
     for(const value of td){
         if(value.dataset.id == e.target.dataset.id){
             textvalues[id++] = value.textContent;
             
         }
     }
 
     return textvalues;
 }