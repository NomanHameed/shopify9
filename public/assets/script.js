function appendButton(){

    var listofClasses = document.getElementsByName('add')[0].classList;
    listofClasses.add('mko');
    listofClasses.add('btn');
    listofClasses.add('btn-open');
    console.log(listofClasses.value);
    var buttonEl = document.createElement("button");
    var modal = document.createElement('section');
    modal.className = 'modal hidden';
    var overlay = document.createElement('div');
    modal.className = 'overlay hidden';

    buttonEl.addEventListener("click", myFunction);
    // buttonEl.href = url;
    // buttonEl.setAttribute('onclick', myFunction());
    buttonEl.className = listofClasses.value;
    buttonEl.style = 'margin-top : 5px !important'
    buttonEl.type = 'button';
    var buttonTextEl = document.createElement("span");
    // buttonTextEl.className = "";
    buttonTextEl.innerText = "Make Offer";
    buttonEl.appendChild(buttonTextEl);

    // var divList = document.getElementsByClassName(elementClass);
    var divList = document.getElementsByName('add');
    divList.forEach(function (myDiv) {
        var parentElement = myDiv.parentElement.closest('div');
        console.log(parentElement);
        parentElement.appendChild(buttonEl);
        parentElement.appendChild(modal);
        parentElement.appendChild(overlay);
    })
}

function myFunction() {
    let text;
    let person = prompt("Please enter your name:", "Harry Potter");
    if (person == null || person == "") {
        text = "User cancelled the prompt.";
    } else {
        text = "Hello " + person + "! How are you today?";
    }
}
appendButton();
