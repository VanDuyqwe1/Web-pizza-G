// const btnShow = document.querySelector('.btn-show');
// const productList = document.querySelector('.product-list');
// const load = document.querySelector('.load');
// console.log(productList);
// btnShow.addEventListener('click', function () {
//     getProduct();
// })

// async function getProduct(){
//     load.style.display = 'unset';
    
//     const url = 'getproduct.php';
//     const reponse = await fetch(url);

//     const result = await reponse.json();

//     result.forEach(element => {
//         const product = `
//         <div class="row">
//         <div class="col-md-2">
//             <img src="public/images/${element.product_image}" alt="" class="img-fluid" onclick="getProductDetail(${element.product_id})">
//         </div>
//         <div class="col-md-10">
//             <h4><a href="">${element.product_name}</a></h4>
//             <p>${element.product_price}</p>
//         </div>
//         </div>
//         `;

//         productList.innerHTML += product;


//     });

//     load.style.display = 'none';
// }



// const detail = document.querySelectorAll('.detail');
// const result_kq = document.querySelector('.result');


// async function getProductDetail(productId) {

    

//     const url = 'productdetail.php';
//     const data = { id : productId};
//     // b1: gui yeu cau
//     const reponse = await fetch(url, {
//         method  : 'POST',
//         headers : {
//             'Content-Type'  : 'application/json',
//             'Accept'        : 'application/json',
//         },
//         body    : JSON.stringify(data)
//     });

//     //b2: xu ly ket qua
//     const result = await reponse.json();

//     const description = ` <h3>${result.product_name}</h3> <br> ${result.product_description}`;
//     result_kq.innerHTML = description;
// }



const listGroup = document.getElementById('list');

async function getProductSearch() {
    
    
    let search = document.getElementById('search');

    const url = 'searchproduct.php';
    // const data = { keyword : search.value};
    // // b1: gui yeu cau
    // const reponse = await fetch(url, {
    //     method  : 'POST',
    //     headers : {
    //         'Content-Type'  : 'application/json',
    //         'Accept'        : 'application/json',
    //     },
    //     body    : JSON.stringify(data)
    // });
    const reponse = await fetch(url);
    //b2: xu ly ket qua
    const a = await reponse.json();
    const result = JSON.stringify(a);

    
    //listGroup.innerHTML = 'a';
    result.forEach(e => {
        // let item = e.product_name;
        // console.log(search.value);
        // const regex = new RegExp(search.value, 'gi');
        
        // item = item.replace(/(<mark class="highlight">|<\/mark>)/gim, '');
        // const newText = item.replace(regex, '<mark class="highlight">$&</mark>');

        // listGroup.innerHTML += ` <a href="#" class="list-group-item list-group-item-action">${newText}</a>`;

        let item = document.createElement('a');
        item.className = 'list-group-item list-group-item-action';
        item.innerHTML = e.product_name;
        var markInstance = new Mark(item);

        markInstance.unmark({
            done: function () {
                markInstance.mark(search.value)
            }
        });
        listGroup.appendChild(item);

    });

    

    

$search.addEventListener('input', (event) => {
  const searchText = event.target.value;
  

  let text = $box.innerHTML;
  

  $box.innerHTML = newText;
});
}

