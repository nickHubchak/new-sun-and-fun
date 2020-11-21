var counter=0;
var counter2=0;

function add_field(){

    var x = document.getElementById("inventory-form");
    // create an input field to insert
    var parent_div= document.createElement("div");
    parent_div.classList.add("my_div"+counter);
    parent_div.setAttribute("style", "display: inline;white-space:nowrap;");
    parent_div.setAttribute("id", "my_div ["+counter+"]");
    

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
    name.setAttribute("style", "margin: 2px; border: 2px solid #eee; border-radius:20px;");

    quatity_in_stock.setAttribute("name", "quantity_in_stock["+counter+"]");
    quatity_in_stock.setAttribute("id", "quantity_in_stock["+counter+"]");
    quatity_in_stock.setAttribute("placeholder", "Quantity");
    quatity_in_stock.setAttribute("style", "margin: 2px; border: 2px solid #eee; border-radius:20px;");

    description.setAttribute("name", "description["+counter+"]");
    description.setAttribute("id", "description["+counter+"]");
    description.setAttribute("placeholder", "description");
    description.setAttribute("style", "margin: 2px; border: 2px solid #eee; border-radius:20px;");

    image_url.setAttribute("name", "image_url["+counter+"]");
    image_url.setAttribute("id", "image_url["+counter+"]");
    image_url.setAttribute("placeholder", "image URL");
    image_url.setAttribute("style", "margin: 2px; border: 2px solid #eee; border-radius:20px;");

    
    // select last position to insert element before it
    var pos = x.childElementCount;

    parent_div.appendChild(name);
    parent_div.appendChild(quatity_in_stock);
    parent_div.appendChild(description);
    parent_div.appendChild(image_url);

    counter++;
    // insert element
    x.insertBefore(parent_div, x.childNodes[pos]);
    $(".my_div"+counter-1+", .my_div"+counter-1+"").css('display', 'inline-block');
    
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
    name.setAttribute("type", "text");

    name.setAttribute("name", "name-delete["+counter2+"]");
    name.setAttribute("id", "name-delete["+counter2+"]");
    name.setAttribute("placeholder", "Name");
    name.setAttribute("style", "margin: 2px; display: block; border: 2px solid #eee; border-radius:20px;");

    
    counter2++;


    var pos = x.childElementCount;
    x.insertBefore(name, x.childNodes[pos]);
    
}

function delete_delete_field()
{
    var element= document.getElementById("name-delete["+(counter2-1)+"]");
    
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