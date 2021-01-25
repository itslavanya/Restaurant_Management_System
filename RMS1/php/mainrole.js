


$(".btnedit").click(e =>{
   let textvalues = displayData(e);

  let id = $("input[name*='id']");
  let rolename = $("input[name*='role_name']");

  id.val(textvalues[0]);
  rolename.val(textvalues[1]);

 
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