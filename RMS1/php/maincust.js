let id = $("input[name*='id']");
id.attr("readonly","readonly");
$(".btnedit").click(e =>{
    let textvalues = displayData(e);
 
 
   let firstname = $("input[name*='first_name']");
   let lastname = $("input[name*='last_name']");
   let email = $("input[name*='email']");
   let phone = $("input[name*='phone']");
   let address = $("input[name*='address']");
 
   id.val(textvalues[0]);
   firstname.val(textvalues[1]);
   lastname.val(textvalues[2]);
   email.val(textvalues[3]);
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