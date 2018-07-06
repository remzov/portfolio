;(function() {

    let projectsPage = document.querySelector('.projects');

    if (projectsPage) {

        //глобальные переменные
        const PATH = "http://remz.loc/wp-json/wp/v2/projects";
        let morePageNumber = 1;
        let filterType = '';
        let modal = document.querySelector('.project-modal');
        let pool = document.querySelector('.projects__grid');
        modal.isReady = false;

        //Инициализация
        window.addEventListener('DOMContentLoaded', () => formRequest());

        // Листенер для модального окна 
        pool.addEventListener('click', event => poolClickHandler(event));

        //
        
        // Кнопка "Показать ещё"
        let moreBtn = document.querySelector('.show-more');

        moreBtn.addEventListener('click', () => formRequest());

        // Фильтры проектов 
        let filterBtnArr = document.querySelectorAll('.projects__filter-item');

        filterBtnArr.forEach(element => {
            element.addEventListener('click', event => { 
                decorFilterBtn(filterBtnArr, event.target);
                getFilterType.call(element);
                resetProjectsPool(); 
            });
        });

        //Модальное окно
        modal.addEventListener('beforeshow', event => {
            if (modal.isReady) {
                return;
            } else {
                event.preventDefault();
            }
        });

        modal.addEventListener('beforehide', () => {
            modal.isReady = false;
        });

        //Навигация в модальном окне
        let targetIndexID;
        let currentIndexID;
        let projectsIDArr = [];

        document.querySelector('.project-modal__nav-prev').addEventListener('click', () => {
            targetIndexID = --currentIndexID;
            if ((targetIndexID) < 0) targetIndexID = projectsIDArr.length - 1;
            showProjectModal(projectsIDArr[targetIndexID]);
        })

        document.querySelector('.project-modal__nav-next').addEventListener('click', () => {
            targetIndexID = ++currentIndexID;
            if ((targetIndexID) > projectsIDArr.length - 1) targetIndexID = 0;
            showProjectModal(projectsIDArr[targetIndexID]);
        })

        //Function Declaration
        function formRequest() {
            let moreRequest = new XMLHttpRequest();
            moreRequest.open('GET', PATH + '?per_page=4&page=' + morePageNumber + '&filter[meta_key]=project_type&filter[meta_value]=' + filterType);
            moreRequest.send();
            getProjects(moreRequest);
        }

        function getProjects(request) {
            request.addEventListener('readystatechange', () => {
                requestHandler(request);
            });
        }

        function requestHandler(request) {
            if ((request.readyState == 4) && (request.status == 200)) {
                let projectsArr = JSON.parse(request.responseText);
                projectsArr.forEach(element => {
                    renderProjectItem(element.title.rendered, element.content.rendered, element.acf.project_gallery[0].url, element.id);
                }); 
                morePageNumber++;
                checkMoreBtn(checkPageCount(request));
            }
        }

        function checkPageCount(request) {
            if ((request.readyState == 4) && (request.status == 200) ) return request.getResponseHeader('X-WP-TotalPages');
        }

        function checkMoreBtn(pageCount) {
            if (morePageNumber > pageCount) {
                moreBtn.hidden = true;
            } else {
                moreBtn.hidden = false;
            }
        }

        function renderProjectItem(title, desc, img, id) {
            let projectItem = document.createElement('div');
            let projectItemHTML = '<div class="project-item"><div class="project-item__image uk-cover-container"><img src="' + img + '" alt="" data-uk-cover></div><div class ="project-item__desc"><div class="project-item__title">' + title + '</div><div class="project-item__text">' + desc + '</div><button class="link-more js-project" uk-toggle="target: #project" type="button" data-id="' + id + '">Подробнее</button></div></div>';
            document.querySelector('.projects__grid').appendChild(projectItem);
            projectItem.insertAdjacentHTML('afterBegin', projectItemHTML);
        }

        function poolClickHandler(event) {
            if (event.target.classList.contains('js-project')) {
                showProjectModal(event.target.getAttribute('data-id'));
            }
        }

        function showProjectModal(projectID) {
            let projectRequest = new XMLHttpRequest();
            projectRequest.open("GET", PATH + '/' + String(projectID));
            projectRequest.send();
            projectRequest.addEventListener('readystatechange', () => {
                if ((projectRequest.readyState == 4) && (projectRequest.status == 200)) {
                    fillModal(projectRequest);
                }
            });
        }
 
        function fillModal(request) {
            let projectData = JSON.parse(request.responseText);
            let modal = document.querySelector('.project-modal');
            let modalTitle = document.querySelector('.project-modal__title');
            let modalDesc = document.querySelector('.project-modal__desc');
            let modalGalleryArr = [];
            let galleryContainer = document.querySelector('.uk-slideshow-items');
            modal.setAttribute('data-id',projectData.id);
            projectData.acf.project_gallery.forEach(element => {
                modalGalleryArr.push(element.url);
            });
            modalTitle.innerHTML = projectData.title.rendered;
            modalDesc.innerHTML = projectData.content.rendered;  
            galleryContainer.innerHTML = '';
            modalGalleryArr.forEach(element => {
                galleryContainer.insertAdjacentHTML('beforeend', '<li><img src="' + element + '" alt="" uk-cover></li>');
            });
            galleryContainer.children[0].classList.add('test');
            console.log(galleryContainer.children[0])
            modal.isReady = true;
            UIkit.modal(modal).show();
            setProjectNav(projectData.id);
        }
        
        function decorFilterBtn(arr, button) {
            arr.forEach(element => {
                if (element.classList.contains('projects__filter-item_isActive')) {
                    element.classList.remove('projects__filter-item_isActive')
                }
            });
            button.classList.add('projects__filter-item_isActive');
        }

        function getFilterType() {
            filterType = this.getAttribute('data-filter');
        }

        function resetProjectsPool() {
            document.querySelector('.projects__grid').innerHTML = '';
            morePageNumber = 1;
            formRequest();
        }

        function setProjectNav(current) {
            projectsIDArr = [];
            document.querySelectorAll('.js-project').forEach(element => {
                projectsIDArr.push(element.getAttribute('data-id'));
            })
            currentIndexID = projectsIDArr.indexOf(String(current));
        }

    }
    
})();


