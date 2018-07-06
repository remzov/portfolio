;(function() {
    let contactsPage = document.querySelector('.contacts');

    if (contactsPage) {
        let form = document.querySelector('.contacts-form');

        form.addEventListener('submit', function(event) {

            event.preventDefault();
            
            var formData = new FormData(form);
            var xhr = new XMLHttpRequest();

            xhr.open("POST", "http://remz.loc/wp-json/contact-form-7/v1/contact-forms/89/feedback");
            xhr.send(formData);
            
            

        })
    }
    
})();


