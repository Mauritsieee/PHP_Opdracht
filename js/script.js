const updateFilter = () => {
    const selector = document.querySelector("#filterSelector");
    window.open("/?page=home&category="+selector.value,'_self');
}