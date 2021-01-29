function changeAtiveTab(event, tabID) {
      let element = event.target;
      while (element.nodeName !== "A") {
        element = element.parentNode;
      }
      ulElement = element.parentNode.parentNode;
      aElements = ulElement.querySelectorAll("li > a");
      tabContents = document.getElementById("tabs-id").querySelectorAll(".tab-content > div");
      for (let i = 0; i < aElements.length; i++) {
        aElements[i].classList.remove("text-white");
        aElements[i].classList.remove("bg-blue-600");
        aElements[i].classList.add("text-white");
        aElements[i].classList.add("bg-transparent");
        tabContents[i].classList.add("hidden");
        tabContents[i].classList.remove("block");
      }
      // element.classList.remove("text-white");
      element.classList.remove("bg-blue-600");
      // element.classList.add("text-white");
      element.classList.add("bg-blue-600");
      document.getElementById(tabID).classList.remove("hidden");
      document.getElementById(tabID).classList.add("block");
}
const search = document.getElementById('searchbar');
const exit = document.getElementById('exitbar');

function searchBarClick() {
  exit.style.display = 'flex';
  search.style.display = 'none'
}
function exitClick() {
  exit.style.display = 'none';
  search.style.display = 'flex'
}


// menu open
const sidebarMenu = document.querySelector(".sidebar-menu");
const dropdownContainerAbout = document.querySelector(".dropdown-container-about");
const dropdownContainerServices = document.querySelector(".dropdown-container-Services");
const dropdownContainerIndustries = document.querySelector(".dropdown-container-Industries");
const arrowDownAbout = document.querySelector(".arrowDownAbout");
const arrowUpAbout = document.querySelector(".arrowUpAbout");
const arrowDownServices = document.querySelector(".arrowDownServices");
const arrowUpServices = document.querySelector(".arrowUpServices");
const arrowDownIndustries = document.querySelector(".arrowDownIndustries");
const arrowUpIndustries = document.querySelector(".arrowUpIndustries");
const darkBody = document.querySelector('.dark');
function openSidebarMenu() {
  sidebarMenu.style.display = "flex";
  document.body.classList.add('dark')
 
}
function closeSidebarMenu() {
  sidebarMenu.style.display = "none";
  document.body.classList.remove('dark')
}
// dropdown
function dropdownBtnAbout() {
  dropdownContainerAbout.style.display = "flex";
  arrowDownAbout.style.display = "none";
  arrowUpAbout.style.display = "inline-block";
}
function dropdownBtnServices() {
  dropdownContainerServices.style.display = "flex";
  arrowDownServices.style.display = "none";
  arrowUpServices.style.display = "inline-block";
}
function dropdownBtnIndustries() {
  dropdownContainerIndustries.style.display = "flex";
  arrowDownIndustries.style.display = "none";
  arrowUpIndustries.style.display = "inline-block";
}
function closedropdownAbout() {
  dropdownContainerAbout.style.display = "none";
  arrowDownAbout.style.display = "inline-block";
  arrowUpAbout.style.display = "none";
}
function closedropdownServices() {
  dropdownContainerServices.style.display = "none";
  arrowDownServices.style.display = "inline-block";
  arrowUpServices.style.display = "none";
}
function closedropdownIndustries() {
  dropdownContainerIndustries.style.display = "none";
  arrowDownIndustries.style.display = "inline-block";
  arrowUpIndustries.style.display = "none";
}

function scrollToUp() {
  window.scroll({
    top: 0,
    left: 0,
    behavior: 'smooth',
  });
}