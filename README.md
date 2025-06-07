# RPGStudio

**RPGStudio** es una plataforma para crear y gestionar fichas de personajes de juegos de rol.

---

## Descripción

RPGStudio te permite diseñar, guardar y consultar fichas de rol de forma sencilla y visual. Está pensado para:

* Crear fichas basadas en diferentes sistemas de juego (D\&D 5e, Vampiro, sistemas propios, etc.).
* Gestionar atributos, habilidades, equipo, historial de personaje y más.
* Ampliarse en el futuro con módulos de gestión de campañas, mapas, PNJs y herramientas extra.

## Tecnología

El proyecto se estructura en dos repositorios independientes:

* **Backend**: Laravel (PHP) – API REST para gestión de datos.
* **Frontend**: React – Interfaz de usuario moderna y reactiva.

## Características iniciales

* Registro e inicio de sesión de usuarios.
* CRUD de fichas de personaje:

    * Atributos y características.
    * Habilidades y estadísticas.
    * Inventario y equipo.
    * Historial y notas.
* API bien documentada con OpenAPI/Swagger.

## Instalación y puesta en marcha

### Backend (Laravel)

1. Clona el repositorio:

   ```bash
   git clone https://github.com/tu-usuario/rpgstudio-api.git
   ```
2. Instala dependencias:

   ```bash
   cd rpgstudio-backend
   composer install
   ```
3. Configura el archivo `.env` con tu base de datos y claves:

   ```ini
   APP_NAME=RPGStudio
   DB_DATABASE=rpgstudio
   DB_USERNAME=root
   DB_PASSWORD=
   ```
4. Ejecuta migraciones y seeders:

   ```bash
   php artisan migrate --seed
   ```
5. Levanta el servidor de desarrollo:

   ```bash
   php artisan serve
   ```

### Frontend (React)

1. Clona el repositorio:

   ```bash
   git clone https://github.com/tu-usuario/rpgstudio.git
   ```
2. Instala dependencias:

   ```bash
   cd rpgstudio
   npm install
   ```
3. Configura variables de entorno (`.env`):

   ```ini
   REACT_APP_API_URL=http://localhost/rpgstudio-api
   ```
4. Inicia la aplicación:

   ```bash
   npm start
   ```

## Contribuciones

¡Las contribuciones son bienvenidas! Si quieres colaborar:

1. Haz un fork del repositorio.
2. Crea una rama con tu feature o bugfix (`git checkout -b mi-feature`).
3. Haz commit de tus cambios (`git commit -m "Añade nueva funcionalidad"`).
4. Envía un pull request.

## Licencia

Este proyecto está bajo la licencia MIT. Consulta el archivo [LICENSE](LICENSE) para más detalles.
