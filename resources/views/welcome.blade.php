<!doctype html>
<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="horizontal-menu-template">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>MSI GUAYAQUIL</title>
    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/tabler-icons.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css')}}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-misc.css')}}" />

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js')}}"></script>
    <!-- Template customizer & Theme config files -->
    <script src="{{ asset('assets/vendor/js/template-customizer.js')}}"></script>
    <script src="{{ asset('assets/js/config.js')}}"></script>
</head>

<body>
    <!-- Content -->
    <!-- Coming Soon -->
    <div class="container-xxl container-p-y">
        <div class="misc-wrapper">
            <h2 class="mb-1 mx-2">¡Pronto estaremos en línea!</h2>
            <p class="mb-4 mx-2">Estamos preparando algo extraordinario. ¡Suscríbete para ser el primero en enterarte cuando esté disponible!</p>
            <form id="subscribe-form" class="subscribe-form" action="{{ route('suscripcion.store') }}" method="post">
                @csrf
                <div class="input-group mb-4">
                    <input type="email" name="email" class="form-control" placeholder="email" autofocus required />
                    <button type="submit" id="submit-button" class="btn btn-primary">Notificarme</button>
                </div>
                <div id="loading-spinner" style="display: none;">Enviando...</div>
                <div id="form-messages"></div>
            </form>
            <div class="mt-4">
                <img src="{{ asset('assets/img/illustrations/page-misc-launching-soon.png')}}" alt="page-misc-launching-soon" width="263" class="img-fluid" />
            </div>
        </div>
    </div>
    <div class="container-fluid misc-bg-wrapper">
        <img src="{{ asset('assets/img/illustrations/bg-shape-image-light.png')}}" alt="page-misc-coming-soon" data-app-light-img="illustrations/bg-shape-image-light.png" data-app-dark-img="illustrations/bg-shape-image-dark.png" />
    </div>
    <!-- /Coming Soon -->

    <!-- Footer -->
    <footer class="footer bg-light text-center py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Dirección</h5>
                    <p>Calles Coronel y Calicuchima,<br>Guayaquil, Ecuador</p>
                </div>
                <div class="col-md-4">
                    <h5>Horarios de Servicios</h5>
                    <p>
                        Miércoles: 19:30 p.m. - 21:00 p.m.<br>
                        Sábado: 19:30 p.m. - 21:00 p.m.<br>
                        Domingo: 10:00 a.m. - 12:00 p.m.<br>
                        Domingo: 18:00 p.m. - 20:00 p.m.
                    </p>
                </div>
                <div class="col-md-4">
                    <h5>Síguenos</h5>
                    <p>
                        <a href="https://www.instagram.com/msiguayaquil/" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-instagram"></i> Instagram
                        </a><br>
                        <a href="https://www.facebook.com/msiguayaquil/" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-facebook"></i> Facebook
                        </a><br>
                        <a href="https://www.youtube.com/@msiguayaquil2330" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-youtube"></i> YouTube
                        </a><br>
                        <a href="https://www.tiktok.com/@msiguayaquil?lang=es" target="_blank" rel="noopener noreferrer">
                            <i class="fa-brands fa-tiktok"></i> TikTok
                        </a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-3">
                    <p class="mb-0">©2024 <a href="https://siglotecnologico.com/" target="_blank" rel="noopener noreferrer">Siglo Tecnológico</a>. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Core JS -->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js')}}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{ asset('assets/vendor/libs/hammer/hammer.js')}}"></script>
    <script src="{{ asset('assets/vendor/libs/i18n/i18n.js')}}"></script>
    <script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
    <script src="{{ asset('assets/vendor/js/menu.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById('subscribe-form');
            const submitButton = document.getElementById('submit-button');
            const loadingSpinner = document.getElementById('loading-spinner');
            const formMessages = document.getElementById('form-messages');

            form.addEventListener('submit', function(event) {
                event.preventDefault();

                // Deshabilitar el botón de envío y mostrar el spinner
                submitButton.disabled = true;
                loadingSpinner.style.display = 'block';

                const formData = new FormData(form);
                const xhr = new XMLHttpRequest();
                xhr.open('POST', form.action, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

                xhr.onload = function() {
                    // Habilitar el botón de envío y ocultar el spinner
                    submitButton.disabled = false;
                    loadingSpinner.style.display = 'none';

                    const response = JSON.parse(xhr.responseText);

                    if (xhr.status === 200) {
                        formMessages.innerHTML = `<div class="alert alert-success">${response.message}</div>`;
                        form.reset();
                    } else {
                        let errorsHtml = '<div class="alert alert-danger"><ul>';
                        for (let error of response.errors) {
                            errorsHtml += `<li>${error}</li>`;
                        }
                        errorsHtml += '</ul></div>';
                        formMessages.innerHTML = errorsHtml;
                    }
                };

                xhr.onerror = function() {
                    submitButton.disabled = false;
                    loadingSpinner.style.display = 'none';
                    formMessages.innerHTML = '<div class="alert alert-danger">Ocurrió un error. Inténtalo de nuevo más tarde.</div>';
                };

                xhr.send(formData);
            });
        });
    </script>
</body>
</html>
