function appendButton(elementClass){
    var current_host = window.location.hostname;
    var listofClasses = document.getElementsByName('add')[0].classList;
    listofClasses.add('mko');
    listofClasses.add('btn-open');
    console.log(listofClasses.value);
    var buttonEl = document.createElement("button");
    var modaldiv = document.createElement('section');
    modaldiv.className = 'modal hidden';
    var overlaydiv = document.createElement('div');
    overlaydiv.className = 'overlay hidden';
    document.body.append(modaldiv);
    document.body.append(overlaydiv);
    var modalCloseDiv = document.createElement("div");
    modalCloseDiv.className = 'flex';
    modaldiv.appendChild(modalCloseDiv);
    var modalCloseEl = document.createElement("button");
    modalCloseEl.className = 'btn-close';
    modalCloseEl.type = 'button';
    modalCloseEl.innerText = 'x'
    modalCloseDiv.appendChild(modalCloseEl);
    var modalEmailEl = document.createElement("input");
    modalEmailEl.placeholder = "Email Address";
    modalEmailEl.type = 'email';
    modalEmailEl.name = 'email';
    modalEmailEl.required = true;
    modaldiv.appendChild(modalEmailEl);

    var modalHostHiddenEl = document.createElement("input");
    modalHostHiddenEl.type = 'hidden';
    modalHostHiddenEl.name = "host";
    modalHostHiddenEl.required = true;
    modalHostHiddenEl.value = current_host;
    modaldiv.appendChild(modalHostHiddenEl);

    var modalOfferEl = document.createElement("input");
    modalOfferEl.placeholder = "Offer Amount";
    modalOfferEl.name = "amount";
    modalOfferEl.type = 'number';
    modaldiv.appendChild(modalOfferEl);

    var modalSubmitEl = document.createElement("button");
    modalSubmitEl.className = 'btn btn-submit';
    modalSubmitEl.type = 'button';
    modalSubmitEl.innerText = 'Submit'
    modaldiv.appendChild(modalSubmitEl);

    const modal = document.querySelector(".modal");
    const overlay = document.querySelector(".overlay");
    const closeModalBtn = document.querySelector(".btn-close");
    const submitModalBtn = document.querySelector(".btn-submit");

    const openModal = function () {
        console.log('modal open');
        modal.classList.remove("hidden");
        overlay.classList.remove("hidden");
    };

    const closeModal = function () {
        modal.classList.add("hidden");
        overlay.classList.add("hidden");
    };

    // openModalBtn.addEventListener("click", openModal);

    buttonEl.addEventListener("click", openModal);
    closeModalBtn.addEventListener("click", closeModal);

    // buttonEl.href = url;
    // buttonEl.setAttribute('onclick', myFunction());
    buttonEl.className = listofClasses.value;
    buttonEl.style = 'margin-top : 5px !important'
    buttonEl.type = 'button';
    var buttonTextEl = document.createElement("span");
    // buttonTextEl.className = "";
    buttonTextEl.innerText = "Make Offer";
    buttonEl.appendChild(buttonTextEl);

    var divList = document.getElementsByClassName(elementClass);
    // var divList = document.getElementsByName('add');
    // divList.forEach(function (myDiv) {
    //     var parentElement = myDiv.parentElement.closest('div');
        console.log(divList);
        divList[0].appendChild(buttonEl);
    // })

    const runCall = function(){

        // Creating Our XMLHttpRequest object
        var xhr = new XMLHttpRequest();
        var url = 'https://shopify.noumanengr.com/api/test';
        xhr.open("GET", url);
        xhr.send()
        // function execute after request is successful
        xhr.onreadystatechange = function () {
            console.log("Done this call");
            if (this.readyState == 4 && this.status == 200) {
                console.log('success on email');
            }
            else{
                console.log('error on send email');
            }
        }
        // Sending our request
        xhr.send();
    }
    submitModalBtn.addEventListener("click", runCall);










    // add style to head


    var css = '.modal {\n' +
            '  display: flex;\n' +
            '  flex-direction: column;\n' +
            '  justify-content: center;\n' +
            '  gap: 0.4rem;\n' +
            '  width: 500px;\n' +
            '  padding: 1.3rem;\n' +
            '  min-height: 200px;\n' +
            '  position: fixed;\n' +
            '  top: 25%;\n' +
            '  z-index: 4;\n' +
            '  left: 50%;\n' +
            '  top: 50%;\n' +
            '  transform: translate(-50%, -50%);' +
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
            '.btn-close {\n' +
            '  transform: translate(10px, -20px);\n' +
            '  padding: 0.5rem 0.7rem;\n' +
            '  background: #f98989;\n' +
            '  margin-right: 15px;\n' +
            '  margin-left: auto;' +
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

appendButton('product-form__buttons');
