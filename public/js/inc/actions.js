'use strict';

$(document).ready(function () {
    var $body = $('body');
    var $this = $(this);
    var target;

    //Fullscreen Launch function
    function launchIntoFullscreen(element) {

        if(element.requestFullscreen) {
            element.requestFullscreen();
        } else if(element.mozRequestFullScreen) {
            element.mozRequestFullScreen();
        } else if(element.webkitRequestFullscreen) {
            element.webkitRequestFullscreen();
        } else if(element.msRequestFullscreen) {
            element.msRequestFullscreen();
        }
    }

    //Fullscreen exit function
    function exitFullscreen() {

        if(document.exitFullscreen) {
            document.exitFullscreen();
        } else if(document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if(document.webkitExitFullscreen) {
            document.webkitExitFullscreen();
        }
    }


    $body.on('click', '[data-mae-action]', function (e) {
        e.preventDefault();
        
        var action = $(this).data('mae-action');

        switch (action) {
            
            /*-------------------------------------------
                Main menu and Notifications open/close
            ---------------------------------------------*/
            
            /* Open Sidebar */
            case 'block-open':
                target = $(this).data('mae-target');

                $(target).addClass('toggled');
                $body.addClass('block-opened');
                $body.append('<div data-mae-action="block-close" data-mae-target="'+target+'" class="mae-backdrop mae-backdrop--sidebar" />')
                
                break;

            /* Close Sidebar */
            case 'block-close':
                $(target).removeClass('toggled');
                $body.removeClass('block-opened');
                $('.mae-backdrop--sidebar').remove();

                break;


            /*-------------------------------------------
                Full screen browse
            ---------------------------------------------*/
            case 'fullscreen':
                launchIntoFullscreen(document.documentElement);

                break;


            /*-------------------------------------------
                Print
            ---------------------------------------------*/
            case 'print':
                window.print();

                break;


            /*-------------------------------------------------
                Clear local storage (SweetAlert 2 required)
            --------------------------------------------------*/
            case 'clear-localstorage':
                swal({
                    title: 'Are you sure?',
                    text: 'This can not be undone!',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, clear it',
                    cancelButtonText: 'No, cancel'
                }).then(function() {
                    localStorage.clear();
                    swal(
                        'Cleared!',
                        'Local storage has been successfully cleared',
                        'success'
                    );
                })

                break;
        }
    }); 
});