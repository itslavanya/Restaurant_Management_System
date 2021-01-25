let id = $("input[name*='id']");
id.attr("readonly","readonly");


$(".btnedit").click(e =>{
    let textvalues = displayData(e);
 
  
   let menuitem = $("input[name*='menu_item']");
   let category = $("input[name*='category']");
   let price = $("input[name*='price']");
   let status = $("input[name*='status']");

 
   id.val(textvalues[0]);
   menuitem.val(textvalues[1]);
   category.val(textvalues[2]);
   price.val(textvalues[3].replace("₹",""));
   status.val(textvalues[4]);

  
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