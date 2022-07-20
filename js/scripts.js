/*!
* Start Bootstrap - Simple Sidebar v6.0.5 (https://startbootstrap.com/template/simple-sidebar)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-simple-sidebar/blob/master/LICENSE)
*/
// 
// Scripts
// 

window.onload = function () {
    showDateTime();
}

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

// Display Date and Time
function showDateTime() {
    const today = new Date();
    const weekday = ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"];
    const monthName = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sept","Oct","Nov","Dec"];
    let day = weekday[today.getDay()];
    let date = today.getDate();
    let month = monthName[today.getMonth()];
    let year = today.getUTCFullYear();
    let h = today.getUTCHours() + 7;
    let m = today.getUTCMinutes();
    let s = today.getUTCSeconds();
    if (h >= 24) {
        h = h - 24;
    }
    m = convertTimeToDoubleDigit(m);
    s = convertTimeToDoubleDigit(s);
    document.getElementById("Day").innerHTML = day;
    document.getElementById("Date").innerHTML = date + " " + month + " " + year;
    document.getElementById("Time").innerHTML = h + " : " + m + " : " + s;
    setTimeout(showDateTime, 1000);
}
function convertTimeToDoubleDigit(i) { //To display minutes and seconds as two digit when below 10
    if (i < 10) {
        i = "0" + i
    };
    return i;
}