$( document ).ready(function() {
    console.log( "ready!" );
});
// var xhr =  new XMLHttpRequest();
// // xhr.open('GET', )
//
// xhr.onreadystatechange = function () {
//     alert('script loaded');
//     if(xhr.readyState === 4 && xhr.status === 200) {
//         var response = JSON.parse(this.responseText);
//         if(response.status) {
//             function appendButton(elementClass, url){
//                 var buttonEl = document.createElement("a");
//                 buttonEl.href = url;
//                 var buttonTextEl = document.createElement("span");
//                 buttonTextEl.className = "picon-p-add-news";
//                 buttonTextEl.innerText = "Read more news";
//                 buttonEl.appendChild(buttonTextEl);
//                 document.getElementsByClassName(elementClass).appendChild(buttonEl);
//             }
//             appendButton('product-form__buttons', 'https://www.google.com/');
//
//         }
//     }
// }
// xhr.send();
//
