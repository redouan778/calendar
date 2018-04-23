<h3>Voeg een nieuwe verjaardag toe</h3>
<div>
  <form action="<?=URL ?>calender/toevoegenSave" method="POST">
    <label class="title" for="fname">Naam</label>
    <input required type="text" id="person" name="person" placeholder="Nieuwe naam" required>

    <label class="title" for="fname">Dag</label>
    <input  required type="number" type="number" onkeydown="return FilterInput(event)" onpaste="handlePaste(event)"  id="day" name="day" min="1" max ="31" placeholder="Dag" required>
    <br>
    <label class="title" for="fname">Maand</label>
    <input  required type="number" type="number"onkeydown="return FilterInput(event)" onpaste="handlePaste(event)" id="month" name="month"  min="1" max ="12" placeholder="Maand" required>
    <br>
    <label class="title" for="fname">Jaar</label>
    <input type="number"onkeydown="return FilterInput(event)" onpaste="handlePaste(event)"  id="year" name="year"  min="1900" max = "2018" placeholder="Jaar" required>


    <input id="button" type="submit" value="Versturen">
  </form>
</div>


<img src="../img/giphy.gif" alt="birthday">
