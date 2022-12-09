var xhr =  new XMLHttpRequest();
// xhr.open('GET', )

xhr.onreadystatechange = function () {
    if(xhr.readyState === 4 && xhr.status === 200) {
        var response = JSON.parse(this.responseText);
        function appendButton(elementClass, url){
            var buttonEl = document.createElement("a");
            buttonEl.href = url;
            var buttonTextEl = document.createElement("span");
            buttonTextEl.className = "picon-p-add-news";
            buttonTextEl.innerText = "Read more news";
            buttonEl.appendChild(buttonTextEl);
            document.getElementsByClassName(elementClass).appendChild(buttonEl);
        }
        if(response.status) {
            appendButton('product-form__buttons', 'https://www.google.com/');
        }
    }
}
xhr.send();

