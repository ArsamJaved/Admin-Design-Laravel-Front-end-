//  ____________________SideBar________________________ 
//  <script>
//     $(document).ready(function() {
//         function checkScreenSize() {
//             if ($(window).width() < 992) {
//                 $('.sidebar').hide();
//             } else {
//                 $('.sidebar').show();
//             }
//         }

//         // Check on initial load
//         checkScreenSize();

//         // Check on resize
//         $(window).resize(function() {
//             checkScreenSize();
//         });
//     });
// </script>


//  icon rotate  
    $(document).ready(function() {
        $('.main-links-for-submenu').on('click', function() {
            $(this).find('.dropdown-indicator-icon-wrapper').toggleClass('rotate-90');
        });


        $('.nav-link').on('click', function() {
            $('.nav-link-text').css('color', '');

            $(this).find('.nav-link-text').css('color', '#3874ff');
        });
    });


//  sidebar collapse logics  
    document.getElementById('toggleSidebar').addEventListener('click', function() {
        const sidebar = document.querySelector('.sidebar');
        const collapseButton = document.querySelector('.sidebar-collapse-button');
        const forwardIcon = document.querySelector('.sidebar-forward-icon');
        const sidebarFooter = document.querySelector('.sidebar-footer');
        const contentSidebarCollapse = document.querySelector('.sidebar-inner-content');

        sidebar.classList.toggle('collapsed');

        if (sidebar.classList.contains('collapsed')) {
            collapseButton.style.display = 'none';
            forwardIcon.style.display = 'block';
            sidebarFooter.style.width = '80px';
            sidebarFooter.style.display = 'flex';
            sidebarFooter.style.justifyContent = 'center';
            $(".sidebar-inner-content").addClass('d-none');
            $(".sidebar-sub-links-bg").removeClass('px-5');
            $(".crm-dropdown").removeClass('d-none');
            $(".landing-dropdown").removeClass('d-none');
            $(".mail-dropdown").removeClass('d-none');
            $(".sidebar").css('overflow', 'visible');

        } else {
            collapseButton.style.display = 'block';
            forwardIcon.style.display = 'none';
            sidebarFooter.style.width = '250px';
            sidebarFooter.style.display = 'flex';
            sidebarFooter.style.justifyContent = 'start';
            $(".sidebar-inner-content").removeClass('d-none');
            $(".sidebar-sub-links-bg").addClass('px-5');
            $(".crm-dropdown").addClass('d-none');
            $(".landing-dropdown").addClass('d-none');
            $(".mail-dropdown").addClass('d-none');
        }
    });
//  dropdown mouse event none  
    $(document).ready(function() {
        $('.crm').hover(
            function() {
                $('.crm-dropdown').css('opacity', '1');
                $('.mail, .landing').addClass('disabled');
            },
            function() {
                $('.crm-dropdown').css('opacity', '0');
                $('.mail, .landing').removeClass('disabled');
            }
        );

        $('.mail').hover(
            function() {
                $('.mail-dropdown').css('opacity', '1');
                $('.crm, .landing').addClass('disabled');
            },
            function() {
                $('.mail-dropdown').css('opacity', '0');
                $('.crm, .landing').removeClass('disabled');
            }
        );

        $('.landing').hover(
            function() {
                $('.landing-dropdown').css('opacity', '1');
                $('.crm, .mail').addClass('disabled');
            },
            function() {
                $('.landing-dropdown').css('opacity', '0');
                $('.crm, .mail').removeClass('disabled');
            }
        );
    });
//  ____________________SideBar Ends________________________ 

//  <h1>Footer</h1> 

$(document).ready(function() {
    // Initialize Summernote
    $('#summernote').summernote({
        height: 210 // Initial height setting, adjust as needed
    });

});

const ctx = document.getElementById('myLineChart').getContext('2d');
const myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'My First Dataset',
            data: [0, 10, 5, 2, 20, 30, 45],
            borderColor: 'rgba(75, 192, 192, 1)',
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            fill: false,
            tension: 0.1
        }]
    },
    options: {
        responsive: true,
        scales: {
            x: {
                title: {
                    display: true,
                    text: 'Month',
                    font: {
                        size: 10 // Font size for x-axis title
                    }
                },
                ticks: {
                    font: {
                        size: 10 // Font size for x-axis labels
                    }
                }
            },
            y: {
                title: {
                    display: true,
                    text: 'Value',
                    font: {
                        size: 10 // Font size for y-axis title
                    }
                },
                ticks: {
                    font: {
                        size: 10 // Font size for y-axis labels
                    }
                }
            }
        },
        plugins: {
            legend: {
                labels: {
                    font: {
                        size: 10 // Font size for legend labels
                    }
                }
            },
            tooltip: {
                bodyFont: {
                    size: 8// Font size for tooltip body
                },
                titleFont: {
                    size: 10 // Font size for tooltip title
                }
            }
        }
    }
});

  const chatTextarea = document.querySelector('.chat-textarea');

    function updatePlaceholder() {
        if (chatTextarea.textContent.trim() === '') {
            chatTextarea.classList.add('empty');
        } else {
            chatTextarea.classList.remove('empty');
        }
    }

    chatTextarea.addEventListener('input', updatePlaceholder);
    chatTextarea.addEventListener('focus', updatePlaceholder);
    chatTextarea.addEventListener('blur', updatePlaceholder);

    // Initial check
    updatePlaceholder();