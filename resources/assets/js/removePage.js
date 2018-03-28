if (document.URL.includes('update-bd')) {
    var buttonsRemove = document.getElementsByClassName("remove");
    
    //console.log(btns);

        for (let index = 0; index < buttonsRemove.length; index++) {
            var btnRemovePageId = buttonsRemove[index].getAttribute('id');
            var btnRemovePage = document.getElementById(btnRemovePageId);
            //btnRemovePage.addEventListener("click", alertRemove);   
            //var alertRemovePage = btnRemovePage.addEventListener("click", alertRemove);
            console.log(btnRemovePage);
        }

    //console.log("x");
    
    //console.log("z");

    //var btnRemoveItem = document.getElementById("edit{{$pages->pag_oid}}");

    // btnRemoveItem.addEventListener("click", function remove() {
    //     console.log("sadfg");
    // })
}