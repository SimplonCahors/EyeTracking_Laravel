//need to change the include because the code is ugly
if (document.URL.includes('update-bd')) {
    var buttonsRemove = document.getElementsByClassName("remove");

        //for each button remove created, adds an event listener
        for (let index = 0; index < buttonsRemove.length; index++) {
            var btnRemovePageId = buttonsRemove[index].getAttribute('id');
            var btnRemovePage = document.getElementById(btnRemovePageId);
            //console.log(btnRemovePage);
            buttonsRemove[index].addEventListener ("click", confirmationAlert, false);
        }

        //when any button remove is clicked, a confirmation alert is created...
        function confirmationAlert() {
            //make a loop to remove all listeners on remove buttons, or else we can get an infinite number of alert
            for (let index = 0; index < buttonsRemove.length; index++) {
                var btnRemovePageId = buttonsRemove[index].getAttribute('id');
                var btnRemovePage = document.getElementById(btnRemovePageId);
                //console.log(btnRemovePage);
                buttonsRemove[index].removeEventListener ("click", confirmationAlert, false);
            }
            //Then create an alert box, with a Yes/No choice
            var thisId = this.getAttribute('id');
            var divConfirmation = document.createElement("div");
            divConfirmation.setAttribute("id", "confirmation"+thisId);
            divConfirmation.setAttribute("class", "alert");
            divConfirmation.setAttribute("class", "alert-danger");
            divConfirmation.innerHTML = "Etes vous sûr de supprimer la planche "+thisId+" ?";
            var yesConfirmation = document.createElement("button");
            yesConfirmation.setAttribute("href", "confirmation/"+thisId);
            yesConfirmation.innerHTML = "Oui";  
            yesConfirmation.addEventListener ("click", confirmationYes, false);
            var noConfirmation = document.createElement("button");
            noConfirmation.innerHTML = "Non";

            noConfirmation.addEventListener ("click", confirmationNo, false);
            divConfirmation.appendChild(yesConfirmation);
            divConfirmation.appendChild(noConfirmation);
            this.appendChild(divConfirmation);
        }

        //if yes is clicked, it needs to remove the page from the database, and redirect somewhere, TBD
        function confirmationYes() {
        }

        //if no, do nothing, maybe alert the user the suppression was cancelled
        function confirmationNo() {
        }
}