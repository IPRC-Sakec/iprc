toggle = document.querySelector('.toggle');
navigation = document.querySelector('.navigation');
main = document.querySelector('.main');
// content = document.querySelector('.content');

toggle.onclick = function(){
    navigation.classList.toggle('active');
    main.classList.toggle('active');
    // content.classList.toggle('active');
}

//add hovered class in selected list item
list = document.querySelectorAll('.navigation li');
function activelink(){
    list.forEach((item) =>
    item.classList.remove('hovered'));
    this.classList.add('hovered');
}
list.forEach((item) =>
item.addEventListener('click', activelink));


// Table


$(document).ready(function() {
    $('#myTable').DataTable(
        {
autoWidth: false,
columnDefs: [
    {
        targets: ['_all'],
        className: 'mdc-data-table__cell'
    }
]
}
    );
    
});