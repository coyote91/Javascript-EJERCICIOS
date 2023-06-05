/* Este código PHP genera un enlace HTML que apunta a un archivo llamado `profile.php` 
y pasa un parámetro `id` con el valor `3` en la URL. El texto del enlace es "Lina Londoño".  

*/

let link = document.createElement('a');
link.href = 'profile.html?id=3';
link.textContent = 'Lina Londoño';

document.body.appendChild(link);

//



