var counter=0;
var counter2=0;
var counter3=0;
var counter4=0;

function add_field(){

    var x = document.getElementById("inventory-form");
    // create an input field to insert
    var parent_div= document.createElement("div");
    var column_div1=document.createElement("div");
    var column_div2=document.createElement("div");
    var column_div3=document.createElement("div");
    var column_div4=document.createElement("div");
    var new_hr=document.createElement("hr");
    parent_div.classList.add("my_div"+counter);
    //parent_div.setAttribute("style", "display: inline;white-space:nowrap;");
    parent_div.setAttribute("id", "my_div ["+counter+"]");
    parent_div.setAttribute("class", "row");
    column_div1.setAttribute("class", "col-md-3");
    column_div2.setAttribute("class", "col-md-3");
    column_div3.setAttribute("class", "col-md-3");
    column_div4.setAttribute("class", "col-md-3");
    new_hr.setAttribute("style", "width:100%;text-align:center;margin-left:0");
    

    var name = document.createElement("input");
    var quatity_in_stock = document.createElement("input");
    var description = document.createElement("input");
    var image_url = document.createElement("input");
    // set input field data type to text
    name.setAttribute("type", "text");
    quatity_in_stock.setAttribute("type", "number");
    description.setAttribute("type", "text");
    image_url.setAttribute("type", "url");

    // set input field name 
    name.setAttribute("name", "name["+counter+"]");
    name.setAttribute("id", "name["+counter+"]");
    name.setAttribute("placeholder", "Name");
    name.setAttribute("class", "my_input");
    quatity_in_stock.setAttribute("name", "quantity_in_stock["+counter+"]");
    quatity_in_stock.setAttribute("id", "quantity_in_stock["+counter+"]");
    quatity_in_stock.setAttribute("placeholder", "Quantity");
    quatity_in_stock.setAttribute("class", "my_input");

    description.setAttribute("name", "description["+counter+"]");
    description.setAttribute("id", "description["+counter+"]");
    description.setAttribute("placeholder", "description");
    description.setAttribute("class", "my_input");

    image_url.setAttribute("name", "image_url["+counter+"]");
    image_url.setAttribute("id", "image_url["+counter+"]");
    image_url.setAttribute("placeholder", "image URL");
    image_url.setAttribute("class", "my_input");

    
    // select last position to insert element before it
    var pos = x.childElementCount;
    column_div1.appendChild(name);
    column_div2.appendChild(quatity_in_stock);
    column_div3.appendChild(description);
    column_div4.appendChild(image_url);


    parent_div.appendChild(column_div1);
    column_div1.after(column_div2);
    column_div2.after(column_div3);
    column_div3.after(column_div4);
    column_div4.after(new_hr);
    
    
    counter++;
    // insert element
    x.insertBefore(parent_div, x.childNodes[pos]);
    //$(".my_div"+counter-1+", .my_div"+counter-1+"").css('display', 'inline-block');
    
}



function delete_field()
{
    var element= document.getElementById("my_div ["+(counter-1)+"]");
    
    if(typeof(element) == 'undefined' || element == null)
    {
        //document.write("no rows"+counter-1);
        alert("No more rows to remove!");
    }
    else{
        element.remove();
    }
    counter=counter-1;
}






function add_delete_field()
{
    var x = document.getElementById("inventory-form-delete");

    var name = document.createElement("input");
    var parent_div= document.createElement("div");
    name.setAttribute("type", "text");
    parent_div.setAttribute("id", "my_div1 ["+counter2+"]");
   
    name.setAttribute("name", "name-delete["+counter2+"]");
    name.setAttribute("id", "name-delete["+counter2+"]");
    name.setAttribute("placeholder", "Name");
    name.setAttribute("class", "my_input_2");
    var new_hr=document.createElement("hr");
    new_hr.setAttribute("style", "width:100%;text-align:center;margin-left:0");

    
    counter2++;
    parent_div.appendChild(name);
    name.after(new_hr);
    var pos = x.childElementCount;
    x.insertBefore(parent_div, x.childNodes[pos]);
    
}

function delete_delete_field()
{
    var element= document.getElementById("my_div1 ["+(counter2-1)+"]");
    
    if(typeof(element) == 'undefined' || element == null)
    {
        //document.write("no rows"+counter-1);
        alert("No more rows to remove!");
    }
    else{
        element.remove();
    }
    counter2=counter2-1;
}


function add_quantiy_field()
{

    var x = document.getElementById("change-quantity-product");
    var parent_div= document.createElement("div");
    var column_div1=document.createElement("div");
    var column_div2=document.createElement("div");
    var new_hr=document.createElement("hr");
    var name = document.createElement("input");
    var quatity_in_stock = document.createElement("input");

    parent_div.setAttribute("id", "my_div2 ["+counter3+"]");
    parent_div.setAttribute("class", "row");
    column_div1.setAttribute("class", "col-md-6");
    column_div2.setAttribute("class", "col-md-6");
    new_hr.setAttribute("style", "width:100%;text-align:center;margin-left:0");

    name.setAttribute("name", "quantity-name["+counter3+"]");
    name.setAttribute("id", "quantity-name["+counter3+"]");
    name.setAttribute("placeholder", "Current Name");
    name.setAttribute("class", "my_input");
    quatity_in_stock.setAttribute("type", "number");
    quatity_in_stock.setAttribute("name", "quantity-updated["+counter3+"]");
    quatity_in_stock.setAttribute("id", "quantity-updated["+counter3+"]");
    quatity_in_stock.setAttribute("placeholder", "New Quantity");
    quatity_in_stock.setAttribute("class", "my_input");
    

    var pos = x.childElementCount;
    column_div1.appendChild(name);
    column_div2.appendChild(quatity_in_stock);

    parent_div.appendChild(column_div1);
    column_div1.after(column_div2);
    column_div2.after(new_hr);

    counter3++;

    x.insertBefore(parent_div, x.childNodes[pos]);

}

function delete_quantity_field()
{

    var element= document.getElementById("my_div2 ["+(counter3-1)+"]");
    
    if(typeof(element) == 'undefined' || element == null)
    {
        //document.write("no rows"+counter-1);
        alert("No more rows to remove!");
    }
    else{
        element.remove();
    }
    counter3=counter3-1;

}

function add_description_field()
{
    var x = document.getElementById("change-description-product");
    var parent_div= document.createElement("div");
    var column_div1=document.createElement("div");
    var column_div2=document.createElement("div");
    var new_hr=document.createElement("hr");
    var name = document.createElement("input");
    var description = document.createElement("input");

    parent_div.setAttribute("id", "my_div3 ["+counter4+"]");
    parent_div.setAttribute("class", "row");
    column_div1.setAttribute("class", "col-md-6");
    column_div2.setAttribute("class", "col-md-6");
    new_hr.setAttribute("style", "width:100%;text-align:center;margin-left:0");

    name.setAttribute("name", "description-name["+counter4+"]");
    name.setAttribute("id", "description-name["+counter4+"]");
    name.setAttribute("placeholder", "Current Name");
    name.setAttribute("class", "my_input");
    description.setAttribute("name", "description-change["+counter4+"]");
    description.setAttribute("id", "description-change["+counter4+"]");
    description.setAttribute("placeholder", "Updated Description");
    description.setAttribute("class", "my_input");
    

    var pos = x.childElementCount;
    column_div1.appendChild(name);
    column_div2.appendChild(description);

    parent_div.appendChild(column_div1);
    column_div1.after(column_div2);
    column_div2.after(new_hr);

    counter4++;

    x.insertBefore(parent_div, x.childNodes[pos]);


}

function delete_description_field()
{

    var element= document.getElementById("my_div3 ["+(counter4-1)+"]");
    
    if(typeof(element) == 'undefined' || element == null)
    {
        //document.write("no rows"+counter-1);
        alert("No more rows to remove!");
    }
    else{
        element.remove();
    }
    counter4=counter4-1;


}