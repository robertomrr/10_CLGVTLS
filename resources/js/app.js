import './bootstrap';

import Alpine from 'alpinejs';

import Swal from 'sweetalert2';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', function() {
    const btnShowSweetAlert = document.querySelector('#btn-show-sweetalert');
    if (btnShowSweetAlert) {
        btnShowSweetAlert.addEventListener('click', function() {
            Swal.fire({
                title: "Good job!",
                text: "You clicked the button!",
                icon: "success"
            });
        });
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const btnShowSweetAlert = document.querySelector('#btn-show-sweetalert5');
    if (btnShowSweetAlert) {
        btnShowSweetAlert.addEventListener('click', function() {
            Swal.fire({
                title: "<strong>HTML <u>example</u></strong>",
                icon: "info",
                html: `
                    You can use <b>bold text</b>,
                    <a href="#" autofocus>links</a>,
                    and other HTML tags
                `,
                showCloseButton: true,
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText: ` <i class="fa fa-thumbs-up"></i> Great! `,
                confirmButtonAriaLabel: "Thumbs up, great!",
                cancelButtonText: ` <i class="fa fa-thumbs-down"></i> `,
                cancelButtonAriaLabel: "Thumbs down"
            });
        });
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const btnShowSweetAlert = document.querySelector('#btn-show-sweetalert6');
    if (btnShowSweetAlert) {
        btnShowSweetAlert.addEventListener('click', function() {

            Swal.fire({
                title: "Do you want to save the changes?",
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: "Save",
                denyButtonText: `Don't save`
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                Swal.fire("Saved!", "", "success");
                } else if (result.isDenied) {
                Swal.fire("Changes are not saved", "", "info");
                }
            });
        });
    }
});
