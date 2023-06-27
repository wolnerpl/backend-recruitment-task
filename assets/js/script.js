var removeButton = document.querySelectorAll('[data-rel="remove"]');
for (var i = 0; i < removeButton.length; i++) {
    removeButton[i].addEventListener('click', function(e) {
        if(!confirm('The item will be deleted')) {
            e.preventDefault();
            return false;
        }
    });
}