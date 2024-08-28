

const container = document.getElementById("list_box");
var childrens = [];

var childrens = Array.from(container.cloneNode(true).childNodes);

// childrens.forEach( (node)=>{
//     container.append(node);
// } )




var search_loc = document.getElementById("search_location");
var property_type = document.getElementById("property_type");
var price_range = document.getElementById("price_range");
var card_template = document.getElementById('card_template');
var helper = document.getElementById('helper');
card_template.id = null;


function renderSearchData(datas= []) {

    container.innerHTML = "";
    var rendered_ids = [];

    datas.forEach((each)=> {
        var child = card_template.cloneNode(true);
        child.style.display = "block";
        id = each['property_id'];

        if( rendered_ids.includes(id) ) return;
        rendered_ids.push(id);

        var image = child.getElementsByClassName('image')[0];
        var isAvailable = child.getElementsByClassName('available_or_not')[0];
        var type = child.getElementsByClassName('type')[0];
        var city_dis = child.getElementsByClassName('city_dis')[0];
        var link = child.getElementsByClassName('link')[0];
        var price = child.getElementsByClassName('price')[0];

        image.src = "/owner/"+each['p_photo'];
        if(each['booked'] == 'No')
            isAvailable.innerText = 'Available';
        else 
            isAvailable.innerText = 'Booked';

        type.innerText = each['property_type']

        city_dis.innerText = each['city']+", "+ each['district'];
        link.href = "/property/"+id;
        price.innerText = "Rs. "+ each['estimated_price']

        container.appendChild(child);
    })//loop

}//render




var search = "";
var type = "";
var price = "";

// card_template, image,available_or_not,type,city_dis,link

function clearSearchIfNot(){
    if(search.length == 0 && type.length==0 && price ==0){
        container.innerHTML = '';
        helper.style.display = 'none';
        childrens.forEach(child => container.appendChild(child));
        return;
    }
    helper.style.display = 'block';
    fetchData();
}//clear the search result

search_loc.addEventListener('input', (e) => {
    search = e.target.value;
    clearSearchIfNot();
});

property_type.addEventListener('change', (e) => {
    type = e.target.value;
    clearSearchIfNot();

});

price_range.addEventListener('change', (e) => {
    price = e.target.value;
    clearSearchIfNot();

});

async function fetchData() {

    const form = new FormData();
    form.append('search_property',search);
    form.append('property_type',type);
    form.append('price_range',price);

    try{

        const res = await fetch('/search_property',{method:'POST',body:form});
        if(!res.ok) throw new Error('Something went wrong while searching');
        const datas = await res.json();
        renderSearchData(datas);

    }
    catch(errr){
        alert(errr);
    }//catch

}//fetchData
