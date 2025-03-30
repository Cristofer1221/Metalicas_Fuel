<h4 class="page-header">Introduction</h4>
<hr>
<p><strong>Metalicas Fuel</strong> This is a thesis project, which professionally describes the design of a system for managing a metalworking shop. “Metalicas – Fuel” is an organization that helped me develop this personnel management project. 
</p>&nbsp;

<h4 class="page-header">Credits & Official Documentation</h4>
<hr>
<p>I've used the following resources as listed. These are some awesome creation and I am really thankful to the respective community.
    <li>  <a> Laravel</a></li>
    <li>  <a> JetStream</a></li>
    <li>  <a> JavaSript</a></li>
    <li>  <a> Bootstrap</a></li>
    <li>  <a> Jquery</a></li>
    <li>  <a> Iconos de Materialdesign</a></li>
    <li>  <a> Font Awesome </a></li>
</p>&nbsp;

<h4 class="page-header">Repository documentation</h4>
<hr>
<p>Below is the link to the repository where all the documentation on how this project was carried out is displayed.
    <a href="https://repositorio.puce.edu.ec/server/api/core/bitstreams/3218015f-8669-4e53-9d2e-d27d3b84041a/content">Metalicas_Fuel</a>
</p>&nbsp;


<h4 class="page-header">Folder Structure</h4>
<hr>
<p> I have tried to follow the standards and modular structure while developing the theme. Let's take a look at the package structure:
</p>

<div class="card-body">
    <pre class="prettyprint">
                        Metalicas_Fuel
                        ¦   .editorconfig
                        ¦   .env.example
                        ¦   .gitattributes
                        ¦   .gitignore
                        ¦   .styleci.yml
                        ¦   artisan
                        ¦   composer.json
                        ¦   composer.lock
                        ¦   create_structure.py
                        ¦   estructura.md
                        ¦   estructura.txt
                        ¦   LICENSE
                        ¦   package-lock.json
                        ¦   package.json
                        ¦   phpunit.xml
                        ¦   README.md
                        ¦   server.php
                        ¦   tailwind.config.js
                        ¦   webpack.mix.js
                        ¦   
                        +---app
                        ¦   ¦   create_structure.py
                        ¦   ¦   estructura.md
                        ¦   ¦   LICENSE
                        ¦   ¦   README.md
                        ¦   ¦   
                        ¦   +---Actions
                        ¦   ¦   +---Fortify
                        ¦   ¦   ¦       CreateNewUser.php
                        ¦   ¦   ¦       PasswordValidationRules.php
                        ¦   ¦   ¦       ResetUserPassword.php
                        ¦   ¦   ¦       UpdateUserPassword.php
                        ¦   ¦   ¦       UpdateUserProfileInformation.php
                        ¦   ¦   ¦       
                        ¦   ¦   +---Jetstream
                        ¦   ¦           DeleteUser.php
                        ¦   ¦           
                        ¦   +---Console
                        ¦   ¦       Kernel.php
                        ¦   ¦       
                        ¦   +---Exceptions
                        ¦   ¦       Handler.php
                        ¦   ¦       
                        ¦   +---Http
                        ¦   ¦   ¦   Kernel.php
                        ¦   ¦   ¦   
                        ¦   ¦   +---Controllers
                        ¦   ¦   ¦   ¦   Controller.php
                        ¦   ¦   ¦   ¦   MailController.php
                        ¦   ¦   ¦   ¦   
                        ¦   ¦   ¦   +---Admin
                        ¦   ¦   ¦           AsistenciaController.php
                        ¦   ¦   ¦           ClienteController.php
                        ¦   ¦   ¦           ConteoController.php
                        ¦   ¦   ¦           FechaController.php
                        ¦   ¦   ¦           HomeController.php
                        ¦   ¦   ¦           InformeController.php
                        ¦   ¦   ¦           InstalacionController.php
                        ¦   ¦   ¦           RoleController.php
                        ¦   ¦   ¦           UserController.php
                        ¦   ¦   ¦           VentasController.php
                        ¦   ¦   ¦           
                        ¦   ¦   +---Livewire
                        ¦   ¦   ¦       AdminClientes.php
                        ¦   ¦   ¦       AdminFecha.php
                        ¦   ¦   ¦       AdminUsers.php
                        ¦   ¦   ¦       
                        ¦   ¦   +---Middleware
                        ¦   ¦           Authenticate.php
                        ¦   ¦           EncryptCookies.php
                        ¦   ¦           PreventRequestsDuringMaintenance.php
                        ¦   ¦           RedirectIfAuthenticated.php
                        ¦   ¦           TrimStrings.php
                        ¦   ¦           TrustHosts.php
                        ¦   ¦           TrustProxies.php
                        ¦   ¦           VerifyCsrfToken.php
                        ¦   ¦           
                        ¦   +---Mail
                        ¦   ¦       TestMail.php
                        ¦   ¦       
                        ¦   +---Models
                        ¦   ¦       Asistencia.php
                        ¦   ¦       Cliente.php
                        ¦   ¦       Fecha.php
                        ¦   ¦       Informe.php
                        ¦   ¦       Instalacion.php
                        ¦   ¦       User.php
                        ¦   ¦       Venta.php
                        ¦   ¦       
                        ¦   +---Providers
                        ¦   ¦       AppServiceProvider.php
                        ¦   ¦       AuthServiceProvider.php
                        ¦   ¦       BroadcastServiceProvider.php
                        ¦   ¦       EventServiceProvider.php
                        ¦   ¦       FortifyServiceProvider.php
                        ¦   ¦       JetstreamServiceProvider.php
                        ¦   ¦       RouteServiceProvider.php
                        ¦   ¦       
                        ¦   +---tu_proyecto
                        ¦   ¦   ¦   .env
                        ¦   ¦   ¦   main.py
                        ¦   ¦   ¦   requirements.txt
                        ¦   ¦   ¦   
                        ¦   ¦   +---app
                        ¦   ¦       ¦   main.py
                        ¦   ¦       ¦   __init__.py
                        ¦   ¦       ¦   
                        ¦   ¦       +---api
                        ¦   ¦       ¦   ¦   deps.py
                        ¦   ¦       ¦   ¦   __init__.py
                        ¦   ¦       ¦   ¦   
                        ¦   ¦       ¦   +---endpoints
                        ¦   ¦       ¦           auth.py
                        ¦   ¦       ¦           options.py
                        ¦   ¦       ¦           questions.py
                        ¦   ¦       ¦           users.py
                        ¦   ¦       ¦           __init__.py
                        ¦   ¦       ¦           
                        ¦   ¦       +---core
                        ¦   ¦       ¦       config.py
                        ¦   ¦       ¦       __init__.py
                        ¦   ¦       ¦       
                        ¦   ¦       +---crud
                        ¦   ¦       ¦       option.py
                        ¦   ¦       ¦       question.py
                        ¦   ¦       ¦       user.py
                        ¦   ¦       ¦       __init__.py
                        ¦   ¦       ¦       
                        ¦   ¦       +---db
                        ¦   ¦       ¦       base.py
                        ¦   ¦       ¦       database.py
                        ¦   ¦       ¦       __init__.py
                        ¦   ¦       ¦       
                        ¦   ¦       +---models
                        ¦   ¦       ¦       option.py
                        ¦   ¦       ¦       question.py
                        ¦   ¦       ¦       user.py
                        ¦   ¦       ¦       __init__.py
                        ¦   ¦       ¦       
                        ¦   ¦       +---schemas
                        ¦   ¦               option.py
                        ¦   ¦               question.py
                        ¦   ¦               user.py
                        ¦   ¦               __init__.py
                        ¦   ¦               
                        ¦   +---View
                        ¦       +---Components
                        ¦               AppLayout.php
                        ¦               GuestLayout.php
                        ¦               
                        +---bootstrap
                        ¦   ¦   app.php
                        ¦   ¦   
                        ¦   +---cache
                        ¦           .gitignore
                        ¦           
                        +---config
                        ¦       adminlte.php
                        ¦       app.php
                        ¦       auth.php
                        ¦       broadcasting.php
                        ¦       cache.php
                        ¦       cors.php
                        ¦       database.php
                        ¦       dompdf.php
                        ¦       filesystems.php
                        ¦       fortify.php
                        ¦       hashing.php
                        ¦       jetstream.php
                        ¦       logging.php
                        ¦       mail.php
                        ¦       permission.php
                        ¦       queue.php
                        ¦       sanctum.php
                        ¦       services.php
                        ¦       session.php
                        ¦       view.php
                        ¦       
                        +---database
                        ¦   ¦   .gitignore
                        ¦   ¦   
                        ¦   +---factories
                        ¦   ¦       AsistenciaFactory.php
                        ¦   ¦       ClienteFactory.php
                        ¦   ¦       InformeFactory.php
                        ¦   ¦       InstalacionFactory.php
                        ¦   ¦       PersonalFactory.php
                        ¦   ¦       UserFactory.php
                        ¦   ¦       
                        ¦   +---migrations
                        ¦   ¦       2014_10_12_000000_create_users_table.php
                        ¦   ¦       2014_10_12_100000_create_password_resets_table.php
                        ¦   ¦       2014_10_12_200000_add_two_factor_columns_to_users_table.php
                        ¦   ¦       2019_08_19_000000_create_failed_jobs_table.php
                        ¦   ¦       2019_12_14_000001_create_personal_access_tokens_table.php
                        ¦   ¦       2021_05_24_171456_create_sessions_table.php
                        ¦   ¦       2021_05_24_171458_fechas.php
                        ¦   ¦       2021_05_25_153037_create_asistencias_table.php
                        ¦   ¦       2021_05_25_153103_create_clientes_table.php
                        ¦   ¦       2021_05_25_153130_create_instalacions_table.php
                        ¦   ¦       2021_05_25_153538_create_informes_table.php
                        ¦   ¦       2021_05_25_232253_create_permission_tables.php
                        ¦   ¦       2021_07_13_013329_create_ventas_table.php
                        ¦   ¦       
                        ¦   +---seeders
                        ¦           AsistenciaSeeder.php
                        ¦           ClienteSeeder.php
                        ¦           DatabaseSeeder.php
                        ¦           FechaSeeder.php
                        ¦           InformeSeeder.php
                        ¦           InstalacionSeeder.php
                        ¦           PermissionSeeder.php
                        ¦           RoleSeeder.php
                        ¦           UserSeeder.php
                        ¦           
                        +---public
                        ¦   ¦   .htaccess
                        ¦   ¦   favicon.ico
                        ¦   ¦   index.php
                        ¦   ¦   mix-manifest.json
                        ¦   ¦   robots.txt
                        ¦   ¦   style.css
                        ¦   ¦   web.config
                        ¦   ¦   
                        ¦   +---assets
                        ¦   ¦   +---css
                        ¦   ¦   ¦       bootstrap.min.css
                        ¦   ¦   ¦       styles.css
                        ¦   ¦   ¦       
                        ¦   ¦   +---images
                        ¦   ¦   ¦       agua.jpg
                        ¦   ¦   ¦       agua2.jpg
                        ¦   ¦   ¦       arrow-borderless-left.svg
                        ¦   ¦   ¦       arrow-borderless-right.svg
                        ¦   ¦   ¦       arrow-right.svg
                        ¦   ¦   ¦       dribbble.svg
                        ¦   ¦   ¦       facebook.svg
                        ¦   ¦   ¦       favicon.png
                        ¦   ¦   ¦       hero.jpg
                        ¦   ¦   ¦       icon.gif
                        ¦   ¦   ¦       instagram.svg
                        ¦   ¦   ¦       logo-dark.svg
                        ¦   ¦   ¦       logo-light.svg
                        ¦   ¦   ¦       member-01.jpg
                        ¦   ¦   ¦       member-02.jpg
                        ¦   ¦   ¦       member-03.jpg
                        ¦   ¦   ¦       menu.svg
                        ¦   ¦   ¦       portfolio-01.jpg
                        ¦   ¦   ¦       portfolio-02.jpg
                        ¦   ¦   ¦       portfolio-03.jpg
                        ¦   ¦   ¦       portfolio-04.jpg
                        ¦   ¦   ¦       twitter.svg
                        ¦   ¦   ¦       youtube.svg
                        ¦   ¦   ¦       
                        ¦   ¦   +---js
                        ¦   ¦           bootstrap.min.js
                        ¦   ¦           jquery.js
                        ¦   ¦           popper.min.js
                        ¦   ¦           
                        ¦   +---css
                        ¦   ¦       app.css
                        ¦   ¦       hoja.css
                        ¦   ¦       style.css
                        ¦   ¦       
                        ¦   +---favicons
                        ¦   ¦       favicon.ico
                        ¦   ¦       
                        ¦   +---images
                        ¦   ¦       favicon.png
                        ¦   ¦       imag1.jpg
                        ¦   ¦       imag2.jpg
                        ¦   ¦       imag3.jpg
                        ¦   ¦       
                        ¦   +---js
                        ¦   ¦       app.js
                        ¦   ¦       
                        ¦   +---vendor
                        ¦       +---adminlte
                        ¦       ¦   +---dist
                        ¦       ¦       +---css
                        ¦       ¦       ¦       adminlte.css
                        ¦       ¦       ¦       adminlte.css.map
                        ¦       ¦       ¦       adminlte.min.css
                        ¦       ¦       ¦       adminlte.min.css.map
                        ¦       ¦       ¦       
                        ¦       ¦       +---img
                        ¦       ¦       ¦       AdminLTELogo.png
                        ¦       ¦       ¦       
                        ¦       ¦       +---js
                        ¦       ¦               .eslintrc.json
                        ¦       ¦               adminlte.js
                        ¦       ¦               adminlte.js.map
                        ¦       ¦               adminlte.min.js
                        ¦       ¦               adminlte.min.js.map
                        ¦       ¦               
                        ¦       +---bootstrap
                        ¦       ¦   +---js
                        ¦       ¦           bootstrap.bundle.js
                        ¦       ¦           bootstrap.bundle.js.map
                        ¦       ¦           bootstrap.bundle.min.js
                        ¦       ¦           bootstrap.bundle.min.js.map
                        ¦       ¦           bootstrap.js
                        ¦       ¦           bootstrap.js.map
                        ¦       ¦           bootstrap.min.js
                        ¦       ¦           bootstrap.min.js.map
                        ¦       ¦           
                        ¦       +---fontawesome-free
                        ¦       ¦   +---css
                        ¦       ¦   ¦       all.css
                        ¦       ¦   ¦       all.min.css
                        ¦       ¦   ¦       brands.css
                        ¦       ¦   ¦       brands.min.css
                        ¦       ¦   ¦       fontawesome.css
                        ¦       ¦   ¦       fontawesome.min.css
                        ¦       ¦   ¦       regular.css
                        ¦       ¦   ¦       regular.min.css
                        ¦       ¦   ¦       solid.css
                        ¦       ¦   ¦       solid.min.css
                        ¦       ¦   ¦       svg-with-js.css
                        ¦       ¦   ¦       svg-with-js.min.css
                        ¦       ¦   ¦       v4-shims.css
                        ¦       ¦   ¦       v4-shims.min.css
                        ¦       ¦   ¦       
                        ¦       ¦   +---webfonts
                        ¦       ¦           fa-brands-400.eot
                        ¦       ¦           fa-brands-400.svg
                        ¦       ¦           fa-brands-400.ttf
                        ¦       ¦           fa-brands-400.woff
                        ¦       ¦           fa-brands-400.woff2
                        ¦       ¦           fa-regular-400.eot
                        ¦       ¦           fa-regular-400.svg
                        ¦       ¦           fa-regular-400.ttf
                        ¦       ¦           fa-regular-400.woff
                        ¦       ¦           fa-regular-400.woff2
                        ¦       ¦           fa-solid-900.eot
                        ¦       ¦           fa-solid-900.svg
                        ¦       ¦           fa-solid-900.ttf
                        ¦       ¦           fa-solid-900.woff
                        ¦       ¦           fa-solid-900.woff2
                        ¦       ¦           
                        ¦       +---jquery
                        ¦       ¦       jquery.js
                        ¦       ¦       jquery.min.js
                        ¦       ¦       jquery.min.map
                        ¦       ¦       
                        ¦       +---jquery-ui
                        ¦       ¦   ¦   AUTHORS.txt
                        ¦       ¦   ¦   index.html
                        ¦       ¦   ¦   jquery-ui.css
                        ¦       ¦   ¦   jquery-ui.js
                        ¦       ¦   ¦   jquery-ui.min.css
                        ¦       ¦   ¦   jquery-ui.min.js
                        ¦       ¦   ¦   jquery-ui.structure.css
                        ¦       ¦   ¦   jquery-ui.structure.min.css
                        ¦       ¦   ¦   jquery-ui.theme.css
                        ¦       ¦   ¦   jquery-ui.theme.min.css
                        ¦       ¦   ¦   LICENSE.txt
                        ¦       ¦   ¦   package.json
                        ¦       ¦   ¦   
                        ¦       ¦   +---external
                        ¦       ¦   ¦   +---jquery
                        ¦       ¦   ¦           jquery.js
                        ¦       ¦   ¦           
                        ¦       ¦   +---images
                        ¦       ¦           ui-icons_444444_256x240.png
                        ¦       ¦           ui-icons_555555_256x240.png
                        ¦       ¦           ui-icons_777620_256x240.png
                        ¦       ¦           ui-icons_777777_256x240.png
                        ¦       ¦           ui-icons_cc0000_256x240.png
                        ¦       ¦           ui-icons_ffffff_256x240.png
                        ¦       ¦           
                        ¦       +---overlayScrollbars
                        ¦       ¦   +---css
                        ¦       ¦   ¦       OverlayScrollbars.css
                        ¦       ¦   ¦       OverlayScrollbars.min.css
                        ¦       ¦   ¦       
                        ¦       ¦   +---js
                        ¦       ¦           jquery.overlayScrollbars.js
                        ¦       ¦           jquery.overlayScrollbars.min.js
                        ¦       ¦           OverlayScrollbars.js
                        ¦       ¦           OverlayScrollbars.min.js
                        ¦       ¦           
                        ¦       +---popper
                        ¦           ¦   popper-utils.js
                        ¦           ¦   popper-utils.js.map
                        ¦           ¦   popper-utils.min.js
                        ¦           ¦   popper-utils.min.js.map
                        ¦           ¦   popper.js
                        ¦           ¦   popper.js.map
                        ¦           ¦   popper.min.js
                        ¦           ¦   popper.min.js.map
                        ¦           ¦   
                        ¦           +---esm
                        ¦           ¦       popper-utils.js
                        ¦           ¦       popper-utils.js.map
                        ¦           ¦       popper-utils.min.js
                        ¦           ¦       popper-utils.min.js.map
                        ¦           ¦       popper.js
                        ¦           ¦       popper.js.map
                        ¦           ¦       popper.min.js
                        ¦           ¦       popper.min.js.map
                        ¦           ¦       
                        ¦           +---umd
                        ¦                   popper-utils.js
                        ¦                   popper-utils.js.map
                        ¦                   popper-utils.min.js
                        ¦                   popper-utils.min.js.map
                        ¦                   popper.js
                        ¦                   popper.js.flow
                        ¦                   popper.js.map
                        ¦                   popper.min.js
                        ¦                   popper.min.js.map
                        ¦                   
                        +---resources
                        ¦   +---css
                        ¦   ¦       app.css
                        ¦   ¦       
                        ¦   +---js
                        ¦   ¦       app.js
                        ¦   ¦       bootstrap.js
                        ¦   ¦       
                        ¦   +---lang
                        ¦   ¦   +---en
                        ¦   ¦   ¦       auth.php
                        ¦   ¦   ¦       pagination.php
                        ¦   ¦   ¦       passwords.php
                        ¦   ¦   ¦       validation.php
                        ¦   ¦   ¦       
                        ¦   ¦   +---es
                        ¦   ¦   ¦       auth.php
                        ¦   ¦   ¦       es.json
                        ¦   ¦   ¦       pagination.php
                        ¦   ¦   ¦       passwords.php
                        ¦   ¦   ¦       validation-inline.php
                        ¦   ¦   ¦       validation.php
                        ¦   ¦   ¦       
                        ¦   ¦   +---vendor
                        ¦   ¦       +---adminlte
                        ¦   ¦           +---ar
                        ¦   ¦           ¦       adminlte.php
                        ¦   ¦           ¦       
                        ¦   ¦           +---ca
                        ¦   ¦           ¦       adminlte.php
                        ¦   ¦           ¦       
                        ¦   ¦           +---de
                        ¦   ¦           ¦       adminlte.php
                        ¦   ¦           ¦       menu.php
                        ¦   ¦           ¦       
                        ¦   ¦           +---en
                        ¦   ¦           ¦       adminlte.php
                        ¦   ¦           ¦       menu.php
                        ¦   ¦           ¦       
                        ¦   ¦           +---es
                        ¦   ¦           ¦       adminlte.php
                        ¦   ¦           ¦       menu.php
                        ¦   ¦           ¦       
                        ¦   ¦           +---fa
                        ¦   ¦           ¦       adminlte.php
                        ¦   ¦           ¦       
                        ¦   ¦           +---fr
                        ¦   ¦           ¦       adminlte.php
                        ¦   ¦           ¦       
                        ¦   ¦           +---hr
                        ¦   ¦           ¦       adminlte.php
                        ¦   ¦           ¦       
                        ¦   ¦           +---hu
                        ¦   ¦           ¦       adminlte.php
                        ¦   ¦           ¦       
                        ¦   ¦           +---id
                        ¦   ¦           ¦       adminlte.php
                        ¦   ¦           ¦       menu.php
                        ¦   ¦           ¦       
                        ¦   ¦           +---it
                        ¦   ¦           ¦       adminlte.php
                        ¦   ¦           ¦       
                        ¦   ¦           +---ja
                        ¦   ¦           ¦       adminlte.php
                        ¦   ¦           ¦       menu.php
                        ¦   ¦           ¦       
                        ¦   ¦           +---la
                        ¦   ¦           ¦       adminlte.php
                        ¦   ¦           ¦       menu.php
                        ¦   ¦           ¦       
                        ¦   ¦           +---nl
                        ¦   ¦           ¦       adminlte.php
                        ¦   ¦           ¦       
                        ¦   ¦           +---pl
                        ¦   ¦           ¦       adminlte.php
                        ¦   ¦           ¦       
                        ¦   ¦           +---pt-br
                        ¦   ¦           ¦       adminlte.php
                        ¦   ¦           ¦       menu.php
                        ¦   ¦           ¦       
                        ¦   ¦           +---ru
                        ¦   ¦           ¦       adminlte.php
                        ¦   ¦           ¦       menu.php
                        ¦   ¦           ¦       
                        ¦   ¦           +---sr
                        ¦   ¦           ¦       adminlte.php
                        ¦   ¦           ¦       menu.php
                        ¦   ¦           ¦       
                        ¦   ¦           +---tr
                        ¦   ¦           ¦       adminlte.php
                        ¦   ¦           ¦       menu.php
                        ¦   ¦           ¦       
                        ¦   ¦           +---uk
                        ¦   ¦           ¦       adminlte.php
                        ¦   ¦           ¦       menu.php
                        ¦   ¦           ¦       
                        ¦   ¦           +---vi
                        ¦   ¦           ¦       adminlte.php
                        ¦   ¦           ¦       menu.php
                        ¦   ¦           ¦       
                        ¦   ¦           +---zh-CN
                        ¦   ¦                   adminlte.php
                        ¦   ¦                   menu.php
                        ¦   ¦                   
                        ¦   +---markdown
                        ¦   ¦       policy.md
                        ¦   ¦       terms.md
                        ¦   ¦       
                        ¦   +---sass
                        ¦   ¦       app.scss
                        ¦   ¦       
                        ¦   +---views
                        ¦       ¦   dashboard.blade.php
                        ¦       ¦   navigation-menu.blade.php
                        ¦       ¦   policy.blade.php
                        ¦       ¦   terms.blade.php
                        ¦       ¦   welcome.blade.php
                        ¦       ¦   
                        ¦       +---admin
                        ¦       ¦   ¦   index.blade.php
                        ¦       ¦   ¦   
                        ¦       ¦   +---asistencias
                        ¦       ¦   ¦       conteo.blade.php
                        ¦       ¦   ¦       create.blade.php
                        ¦       ¦   ¦       edit.blade.php
                        ¦       ¦   ¦       index.blade.php
                        ¦       ¦   ¦       
                        ¦       ¦   +---clientes
                        ¦       ¦   ¦   ¦   create.blade.php
                        ¦       ¦   ¦   ¦   edit.blade.php
                        ¦       ¦   ¦   ¦   index.blade.php
                        ¦       ¦   ¦   ¦   
                        ¦       ¦   ¦   +---partials
                        ¦       ¦   ¦           form.blade.php
                        ¦       ¦   ¦           
                        ¦       ¦   +---fechas
                        ¦       ¦   ¦       create.blade.php
                        ¦       ¦   ¦       edit.blade.php
                        ¦       ¦   ¦       index.blade.php
                        ¦       ¦   ¦       
                        ¦       ¦   +---informes
                        ¦       ¦   ¦   ¦   create.blade.php
                        ¦       ¦   ¦   ¦   edit.blade.php
                        ¦       ¦   ¦   ¦   index.blade.php
                        ¦       ¦   ¦   ¦   informepdf.blade.php
                        ¦       ¦   ¦   ¦   
                        ¦       ¦   ¦   +---partials
                        ¦       ¦   ¦           form.blade.php
                        ¦       ¦   ¦           
                        ¦       ¦   +---instalaciones
                        ¦       ¦   ¦   ¦   create.blade.php
                        ¦       ¦   ¦   ¦   descargapdf.blade.php
                        ¦       ¦   ¦   ¦   edit.blade.php
                        ¦       ¦   ¦   ¦   index.blade.php
                        ¦       ¦   ¦   ¦   nota.blade.php
                        ¦       ¦   ¦   ¦   
                        ¦       ¦   ¦   +---partials
                        ¦       ¦   ¦           form.blade.php
                        ¦       ¦   ¦           
                        ¦       ¦   +---roles
                        ¦       ¦   ¦   ¦   create.blade.php
                        ¦       ¦   ¦   ¦   edit.blade.php
                        ¦       ¦   ¦   ¦   index.blade.php
                        ¦       ¦   ¦   ¦   
                        ¦       ¦   ¦   +---partials
                        ¦       ¦   ¦           form.blade.php
                        ¦       ¦   ¦           
                        ¦       ¦   +---users
                        ¦       ¦   ¦       create.blade.php
                        ¦       ¦   ¦       edit.blade.php
                        ¦       ¦   ¦       index.blade.php
                        ¦       ¦   ¦       
                        ¦       ¦   +---ventas
                        ¦       ¦           descargarpdf.blade.php
                        ¦       ¦           index.blade.php
                        ¦       ¦           
                        ¦       +---api
                        ¦       ¦       api-token-manager.blade.php
                        ¦       ¦       index.blade.php
                        ¦       ¦       
                        ¦       +---auth
                        ¦       ¦       confirm-password.blade.php
                        ¦       ¦       forgot-password.blade.php
                        ¦       ¦       login.blade.php
                        ¦       ¦       register.blade.php
                        ¦       ¦       reset-password.blade.php
                        ¦       ¦       two-factor-challenge.blade.php
                        ¦       ¦       verify-email.blade.php
                        ¦       ¦       
                        ¦       +---emails
                        ¦       ¦       contactMail.blade.php
                        ¦       ¦       
                        ¦       +---layouts
                        ¦       ¦       app.blade.php
                        ¦       ¦       guest.blade.php
                        ¦       ¦       
                        ¦       +---livewire
                        ¦       ¦       admin-clientes.blade.php
                        ¦       ¦       admin-fecha.blade.php
                        ¦       ¦       admin-users.blade.php
                        ¦       ¦       
                        ¦       +---profile
                        ¦       ¦       delete-user-form.blade.php
                        ¦       ¦       logout-other-browser-sessions-form.blade.php
                        ¦       ¦       show.blade.php
                        ¦       ¦       two-factor-authentication-form.blade.php
                        ¦       ¦       update-password-form.blade.php
                        ¦       ¦       update-profile-information-form.blade.php
                        ¦       ¦       
                        ¦       +---vendor
                        ¦           +---jetstream
                        ¦               +---components
                        ¦               ¦       action-message.blade.php
                        ¦               ¦       action-section.blade.php
                        ¦               ¦       application-logo.blade.php
                        ¦               ¦       application-mark.blade.php
                        ¦               ¦       authentication-card-logo.blade.php
                        ¦               ¦       authentication-card.blade.php
                        ¦               ¦       banner.blade.php
                        ¦               ¦       button.blade.php
                        ¦               ¦       checkbox.blade.php
                        ¦               ¦       confirmation-modal.blade.php
                        ¦               ¦       confirms-password.blade.php
                        ¦               ¦       danger-button.blade.php
                        ¦               ¦       dialog-modal.blade.php
                        ¦               ¦       dropdown-link.blade.php
                        ¦               ¦       dropdown.blade.php
                        ¦               ¦       form-section.blade.php
                        ¦               ¦       input-error.blade.php
                        ¦               ¦       input.blade.php
                        ¦               ¦       label.blade.php
                        ¦               ¦       modal.blade.php
                        ¦               ¦       nav-link.blade.php
                        ¦               ¦       responsive-nav-link.blade.php
                        ¦               ¦       secondary-button.blade.php
                        ¦               ¦       section-border.blade.php
                        ¦               ¦       section-title.blade.php
                        ¦               ¦       switchable-team.blade.php
                        ¦               ¦       validation-errors.blade.php
                        ¦               ¦       welcome.blade.php
                        ¦               ¦       
                        ¦               +---mail
                        ¦                       team-invitation.blade.php
                        ¦                       
                        +---routes
                        ¦       admin.php
                        ¦       api.php
                        ¦       channels.php
                        ¦       console.php
                        ¦       web.php
                        ¦       
                        +---storage
                        ¦   +---app
                        ¦   ¦   ¦   .gitignore
                        ¦   ¦   ¦   
                        ¦   ¦   +---public
                        ¦   ¦           .gitignore
                        ¦   ¦           
                        ¦   +---framework
                        ¦   ¦   ¦   .gitignore
                        ¦   ¦   ¦   
                        ¦   ¦   +---cache
                        ¦   ¦   ¦   ¦   .gitignore
                        ¦   ¦   ¦   ¦   
                        ¦   ¦   ¦   +---data
                        ¦   ¦   ¦           .gitignore
                        ¦   ¦   ¦           
                        ¦   ¦   +---sessions
                        ¦   ¦   ¦       .gitignore
                        ¦   ¦   ¦       
                        ¦   ¦   +---testing
                        ¦   ¦   ¦       .gitignore
                        ¦   ¦   ¦       
                        ¦   ¦   +---views
                        ¦   ¦           .gitignore
                        ¦   ¦           
                        ¦   +---logs
                        ¦           .gitignore
                        ¦           
                        +---tests
                        ¦   ¦   CreatesApplication.php
                        ¦   ¦   TestCase.php
                        ¦   ¦   
                        ¦   +---Feature
                        ¦   ¦       ApiTokenPermissionsTest.php
                        ¦   ¦       AuthenticationTest.php
                        ¦   ¦       BrowserSessionsTest.php
                        ¦   ¦       CreateApiTokenTest.php
                        ¦   ¦       DeleteAccountTest.php
                        ¦   ¦       DeleteApiTokenTest.php
                        ¦   ¦       EmailVerificationTest.php
                        ¦   ¦       ExampleTest.php
                        ¦   ¦       PasswordConfirmationTest.php
                        ¦   ¦       PasswordResetTest.php
                        ¦   ¦       ProfileInformationTest.php
                        ¦   ¦       RegistrationTest.php
                        ¦   ¦       TwoFactorAuthenticationSettingsTest.php
                        ¦   ¦       UpdatePasswordTest.php
                        ¦   ¦       
                        ¦   +---Unit
                        ¦           ExampleTest.php
                        ¦           
                        +---tu_proyecto
                            ¦   .env
                            ¦   main.py
                            ¦   requirements.txt
                            ¦   
                            +---app
                                ¦   main.py
                                ¦   __init__.py
                                ¦   
                                +---api
                                ¦   ¦   deps.py
                                ¦   ¦   __init__.py
                                ¦   ¦   
                                ¦   +---endpoints
                                ¦           auth.py
                                ¦           options.py
                                ¦           questions.py
                                ¦           users.py
                                ¦           __init__.py
                                ¦           
                                +---core
                                ¦       config.py
                                ¦       __init__.py
                                ¦       
                                +---crud
                                ¦       option.py
                                ¦       question.py
                                ¦       user.py
                                ¦       __init__.py
                                ¦       
                                +---db
                                ¦       base.py
                                ¦       database.py
                                ¦       __init__.py
                                ¦       
                                +---models
                                ¦       option.py
                                ¦       question.py
                                ¦       user.py
                                ¦       __init__.py
                                ¦       
                                +---schemas
                                        option.py
                                        question.py
                                        user.py
                                        __init__.py




                    
</pre>
    
</div>
 











<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
