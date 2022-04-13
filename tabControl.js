var pageButtons = Array.from(document.getElementsByClassName("pageSelButton"));
var pages = Array.from(document.getElementsByClassName("pageContainer"));

function showPage(pageNumber, color) {

    pageButtons.forEach(function(node) {
        node.style.backgroundColor = "";
        node.style.color = "";
        node.style.height = "22px";
    });
    pageButtons[pageNumber].style.backgroundColor = color;
    pageButtons[pageNumber].style.color = "white";
    pageButtons[pageNumber].style.height = "25px";
    pages.forEach(function(node) {
        node.style.display = "none";
    });
    pages[pageNumber].style.display = "block";
    pages[pageNumber].style.backgroundColor = color;
}

showPage(0, "#2F2D2F")

var dropdownButtons = Array.from(document.getElementsByClassName("dropdownButton"));
var dropdowns = Array.from(document.getElementsByClassName("dropdown"));

function enableDropdown(dropDownNumber, maxHeight) {
    dropdownButtons.forEach(function(node) {
        node.style.backgroundColor = "";
    });
    console.log(dropdowns[dropDownNumber].clientHeight);
    if ( dropdowns[dropDownNumber].clientHeight <= 0) {
        dropdowns[dropDownNumber].style.height = maxHeight;
        dropdownButtons[dropDownNumber].style.backgroundColor = "black";
    } else {
        dropdowns[dropDownNumber].style.height = "0";
        dropdownButtons[dropDownNumber].style.backgroundColor = "green";
    }

}enableDropdown(0, '26px')
indow.scrollTo(".projectHolder");
