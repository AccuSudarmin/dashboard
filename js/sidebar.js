var buttonSidebar = document.getElementById("button-sidebar");
var sidebarMenu = document.getElementById("sidebar-menu");
var showSidebar = document.getElementById("show-sidebar");
var hideSidebar = document.getElementById("hide-sidebar");

buttonSidebar.onclick = showHideSidebar;

function showHideSidebar() {
	if (hasClass(sidebarMenu, "show-sidebar")) {
		sidebarMenu.classList.remove("show-sidebar");
		buttonSidebar.classList.remove("move-button-sidebar");
		showSidebar.style.display = "block";
		hideSidebar.style.display = "none";
	} else {
		sidebarMenu.setAttribute("class", "show-sidebar");
		buttonSidebar.setAttribute("class", "move-button-sidebar");
		showSidebar.style.display = "none";
		hideSidebar.style.display = "block";
	}
}

function hasClass(element, cls) {
    return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
}