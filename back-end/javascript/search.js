function searchSpace() {
    var input, filter, table, tr, td, i, x, txtValue;
    x = radioChecked();
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("tableSpace");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[x];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

function radioChecked() {
    var rads = document.getElementsByName("type");
    for (var i = 0; i < rads.length; i++) {
        if (rads[i].checked) {
            return rads[i].value;
        }
    }
}