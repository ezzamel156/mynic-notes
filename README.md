## Installation walkthrough

Please follow the steps below to get the application up and running :

1. run composer install
2. run composer run-script post-root-package-install
3. php artisan key:generate
4. Edit your .env file accordingly (DB credentials)
5. run php artisan migrate
6. run php artisan serve

Database seeders were not implement so manual user registration is required.

## Overview
After registration and logging in, user will be redirected to notes listing screen.  
User can then create a note by clicking Add new note button.  
Once created, notes can be edited by clicking the name of the note in the card in the notes listing screen.  
Notes can be deleted by clicking Delete in the edit form.  
Only owners of the note can edit and delete the note.  
When creating or updating a note, the name and description fields are mandatory.  
