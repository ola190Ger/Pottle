/* для отправки без php
function sendMail(){
    var link="mailto:ola190.ger@gmail.com"
    +"?cc=ola190.ger@gmail.com"
        +"&subject="+escape("Хочу попробовать!")
    +"&body="+escape(document.getElementById('phone').value)
    +"&body="+escape(document.getElementById('name').value)
}
*/


$('form.exemple').sendMail(); 



