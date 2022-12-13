function appendButton(elementClass, url){

    var listofClasses = document.getElementsByName('add')[0].classList;

    var buttonEl = document.createElement("button");

    // buttonEl.href = url;

    buttonEl.className = listofClasses.value;
    buttonEl.style = 'margin-top : 5px'
    buttonEl.type = 'button';
    var buttonTextEl = document.createElement("span");
    // buttonTextEl.className = "";
    buttonTextEl.innerText = "Make Offer";
    buttonEl.appendChild(buttonTextEl);
    var divList = document.getElementsByClassName(elementClass);
    divList.forEach(function (myDiv) {
        myDiv.appendChild(buttonEl);
    })
}
appendButton('product-form__buttons', 'https://www.google.com/');


// var xhr =  new XMLHttpRequest();
// // xhr.open('GET', )
//
// xhr.onreadystatechange = function () {
//     if(xhr.readyState === 4 && xhr.status === 200) {
//         var response = JSON.parse(this.responseText);
//         if(response.status) {
//             console.log('asdfasdfasdfasdf');
//             // function appendButton(elementClass, url){
//             //     var buttonEl = document.createElement("a");
//             //     buttonEl.href = url;
//             //     var buttonTextEl = document.createElement("span");
//             //     buttonTextEl.className = "picon-p-add-news";
//             //     buttonTextEl.innerText = "Read more news";
//             //     buttonEl.appendChild(buttonTextEl);
//             //     document.getElementsByClassName(elementClass).appendChild(buttonEl);
//             // }
//             // appendButton('product-form__buttons', 'https://www.google.com/');
//
//         }
//     }
// }
// xhr.send();
//
