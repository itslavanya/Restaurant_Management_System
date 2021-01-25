


$(".btnedit").click(e =>{
    let textvalues = displayData(e);
    let id = $("input[name*='id']");
    let tableno = $("input[name*='table_no']");
    let status = $("input[name*='status']");

    id.val(textvalues[0]);
    tableno.val(textvalues[1]);
    status.val(textvalues[2]);

});



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