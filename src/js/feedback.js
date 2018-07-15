(function() {

    let form = document.querySelector('.contacts-form');
    let fields = form.querySelectorAll('input, textarea');
    let loading = form.querySelector('.loading');

    form.addEventListener('submit', event => {
        formHandler(event);
    });

    function formHandler(event) {
        event.preventDefault();
        if (form.checkValidity()) {
            requestHandler(form)
				.then(showSuccess)
				.catch(showFail)
                .then(resetForm);
        }
        fields.forEach(element => checkValidity(element));
    }

    function checkValidity(field) {
        if (!field.checkValidity()) {
            renderAlert(field);
        }
		field.classList.add('isValidating');
    }

    function requestHandler(form) {
        let formData = new FormData(form);
        let request = new XMLHttpRequest();
        request.open("POST", "http://remz.loc/wp-json/contact-form-7/v1/contact-forms/89/feedback");
        request.send(formData);
        form.classList.add('contacts-form_isLoading');
        return new Promise(function(resolve, reject) {
			request.addEventListener('loadend', () => {
				if (request.status == 200) resolve(form);
				else reject(form);			
			});
        });
    }

    function showSuccess() {
        loading.classList.add('loading_isShowingResult');
        loading.querySelector('.loading__message').textContent = 'Письмо отправлено! Спасибо!'
    }

    function showFail() {
        loading.classList.add('loading_isShowingResult');
        loading.querySelector('.loading__message').textContent = 'Произошла ошибка! Извините и попробуйте позже.'
    }

    function resetForm() {
        setTimeout(() => {
            form.classList.remove('contacts-form_isLoading');
            loading.classList.remove('loading_isShowingResult');
            form.reset();
            fields.forEach(element => element.classList.remove('isValidating'));
        }, 5000);
    }

    function renderAlert(field) {
        let alert = document.createElement('div');
        field.parentNode.appendChild(alert);
        alert.classList.add('contacts-form__error', 'uk-alert-danger');
        alert.setAttribute('uk-alert', true);
        alert.innerHTML= '<a class="uk-alert-close" uk-close></a>' + field.getAttribute('title');
    }

})();


