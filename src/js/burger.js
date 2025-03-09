document.addEventListener('DOMContentLoaded', function () {
    var menuToggle = document.querySelector('.menu-toggle');
    var menuClose = document.querySelector('.menu-close');
    var mobileMenuWrapper = document.querySelector('.mobile-menu-wrapper');
    var body = document.body;

    menuToggle.addEventListener('click', function () {
        // Menü öffnen
        mobileMenuWrapper.classList.add('open');
        body.classList.add('menu-open');
    });

    menuClose.addEventListener('click', function () {
        // Menü schließen
        mobileMenuWrapper.classList.remove('open');
        body.classList.remove('menu-open');
    });
});


    document.addEventListener('DOMContentLoaded', function() {
    var dropdownButtons = document.querySelectorAll('.dropdown .dropdown-label');

    dropdownButtons.forEach(function(button) {
    button.addEventListener('click', function() {
    var parentDropdown = this.closest('.dropdown');
    // Toggle der "open" Klasse am Eltern-LI
    parentDropdown.classList.toggle('open');

    // Aktualisiere das aria-expanded-Attribut für Barrierefreiheit
    var isOpen = parentDropdown.classList.contains('open');
    this.setAttribute('aria-expanded', isOpen);
});
});
});

document.addEventListener('DOMContentLoaded', function() {
    // 1) Selektiere alle Buttons in der Filter-Bar
    var filterButtons = document.querySelectorAll('.filter-bar button');

    // 2) Selektiere alle ausgegebenen Beiträge im Query-Block
    //    (Jeder Beitrag ist in einem <article> mit einer class="category-XYZ" oder "post-XYZ")
    var allPosts = document.querySelectorAll('.wp-block-query .wp-block-post');

    filterButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var filterValue = this.getAttribute('data-filter');

            // 3) Bei "Alle" zeigen wir alle Beiträge an
            if (filterValue === 'all') {
                allPosts.forEach(function(post) {
                    post.style.display = 'block';
                });
            } else {
                // 4) Sonst nur die Beiträge anzeigen, die die passende Kategorie-Klasse haben
                allPosts.forEach(function(post) {
                    // Hole alle Klassen des Beitrags
                    var postClasses = post.className;
                    // Prüfe, ob z. B. "category-wohnzimmer" enthalten ist
                    if (postClasses.indexOf('category-' + filterValue) !== -1) {
                        post.style.display = 'block';
                    } else {
                        post.style.display = 'none';
                    }
                });
            }
        });
    });
});





