<form name="wave_form" id="wave_form">
    <label for="wave_text">Introduce el texto para tu ola (no se aceptan mayúsculas o números):</label>
    <input type="text" name="wave_text" id="wave_text" pattern="[a-z ]+">
    <br>
    <input type="submit" value="Generar ola">
    <div id="response_area"></div>
</form>

<script>
    document.querySelector("#wave_form").addEventListener("submit", function(e){
        e.preventDefault();
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if(this.status == 200){
                document.getElementById("response_area").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "wave_generator.php?wave_text=" + document.getElementById("wave_text").value, true);
        xhttp.send(); 
    });
</script>