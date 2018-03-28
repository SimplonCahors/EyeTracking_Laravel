//need to change the include because the code is ugly
if (document.URL.includes('update')) {
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
            divConfirmation.innerHTML = "Êtes vous sûr de supprimer la planche "+thisId+" ?";

            //get the <a> from the php with the route and show it
            var linkYesConfirmationTest = "confirm"+thisId;
            var linkYesConfirmation = document.getElementById(linkYesConfirmationTest);
            linkYesConfirmation.style.display = 'block';
            linkYesConfirmation.setAttribute("class", "linkYesConfirmation");

            //this button is only here for style, see class for css work
            var yesConfirmation = document.createElement("button");
            yesConfirmation.innerHTML = "Oui";  
            yesConfirmation.setAttribute("class", "yesConfirmation");

            //this button is only here for style, see class for css work
            var noConfirmation = document.createElement("button");
            noConfirmation.innerHTML = "Non";
            noConfirmation.setAttribute("class", "noConfirmation");

            //link everything together and append it next to the selected board
            linkYesConfirmation.appendChild(yesConfirmation);
            divConfirmation.appendChild(linkYesConfirmation);
            divConfirmation.appendChild(noConfirmation);
            this.appendChild(divConfirmation);
        }

        //if yes is clicked, the page is removed from the dtb and is redirected to /comics/delete/{{$comic->com_oid}}/{{$pages->pag_oid}}
        //the link is set in the php page and recuperated in the js as we  were unable to make the route work in js 

        //if no, do nothing, maybe alert the user the suppression was cancelled, TBD

}