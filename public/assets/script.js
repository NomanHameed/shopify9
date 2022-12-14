function appendButton(){

    var listofClasses = document.getElementsByName('add')[0].classList;
    listofClasses.add('mko');
    listofClasses.add('btn-open');
    console.log(listofClasses.value);
    var buttonEl = document.createElement("button");
    var modal = document.createElement('section');
    modal.className = 'modal hidden';
    var overlay = document.createElement('div');
    overlay.className = 'overlay hidden';
    document.body.append(modal);
    document.body.append(overlay);

    // buttonEl.addEventListener("click", openModal);
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
    })


    // add style to head


    var css = '.modal {\n' +
            '  display: flex;\n' +
            '  flex-direction: column;\n' +
            '  justify-content: center;\n' +
            '  gap: 0.4rem;\n' +
            '  width: 450px;\n' +
            '  padding: 1.3rem;\n' +
            '  min-height: 250px;\n' +
            '  position: absolute;\n' +
            '  top: 20%;\n' +
            '  z-index: 2;\n' +
            '  background-color: white;\n' +
            '  border: 1px solid #ddd;\n' +
            '  border-radius: 15px;\n' +
            '}\n' +
            '\n' +
            '.modal .flex {\n' +
            '  display: flex;\n' +
            '  align-items: center;\n' +
            '  justify-content: space-between;\n' +
            '}\n' +
            '\n' +
            '.modal input {\n' +
            '  padding: 0.7rem 1rem;\n' +
            '  border: 1px solid #ddd;\n' +
            '  border-radius: 5px;\n' +
            '  font-size: 0.9em;\n' +
            '}\n' +
            '\n' +
            '.modal p {\n' +
            '  font-size: 0.9rem;\n' +
            '  color: #777;\n' +
            '  margin: 0.4rem 0 0.2rem;\n' +
            '}\n' +
            '\n' +
            'button {\n' +
            '  cursor: pointer;\n' +
            '  border: none;\n' +
            '  font-weight: 600;\n' +
            '}\n' +
            '\n' +
            '.btn {\n' +
            '  display: inline-block;\n' +
            '  padding: 0.8rem 1.4rem;\n' +
            '  font-weight: 700;\n' +
            '  background-color: black;\n' +
            '  color: white;\n' +
            '  border-radius: 5px;\n' +
            '  text-align: center;\n' +
            '  font-size: 1em;\n' +
            '}\n' +
            '\n' +
            '.btn-open {\n' +
            '  position: absolute;\n' +
            '  bottom: 150px;\n' +
            '}\n' +
            '\n' +
            '.btn-close {\n' +
            '  transform: translate(10px, -20px);\n' +
            '  padding: 0.5rem 0.7rem;\n' +
            '  background: #eee;\n' +
            '  border-radius: 50%;\n' +
            '}.hidden {\n' +
            '  display: none;\n' +
            '}\n' +
            '.overlay {\n' +
            '  position: fixed;\n' +
            '  top: 0;\n' +
            '  bottom: 0;\n' +
            '  left: 0;\n' +
            '  right: 0;\n' +
            '  width: 100%;\n' +
            '  height: 100%;\n' +
            '  background: rgba(0, 0, 0, 0.5);\n' +
            '  backdrop-filter: blur(3px);\n' +
            '  z-index: 1;\n' +
            '}',
        head = document.head || document.getElementsByTagName('head')[0],
        style = document.createElement('style');

    head.appendChild(style);

    style.type = 'text/css';
    if (style.styleSheet){
        // This is required for IE8 and below.
        style.styleSheet.cssText = css;
    } else {
        style.appendChild(document.createTextNode(css));
    }


}
window.onload = function() {
    const modal = document.querySelector(".modal");
    const overlay = document.querySelector(".overlay");
    const openModalBtn = document.querySelector(".btn-open");

    const openModal = function () {
        modal.classList.remove("hidden");
        overlay.classList.remove("hidden");
    };

    openModalBtn.addEventListener("click", openModal);

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
