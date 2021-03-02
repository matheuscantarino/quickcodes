<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<script>
function keyPressed(evt){
    evt = evt || window.event;
    var key = evt.keyCode || evt.which;
    return String.fromCharCode(key); 
}

document.onkeypress = function(evt) {
    var str = keyPressed(evt);
    
    if(str == 'r')
        alert("Apertou o 'f', chamando uma função...");
};
</script>
<p>Pressione a tecla F</p>
</html>

