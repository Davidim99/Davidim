<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>encuesta</title>
    </head>
    <body>
        
        <form action="proceEncuesta.php" method="post">
            <label for="inputEdad">Edad</label>
            <input required type="number" id="inputEdad" name="inputEdad" placeholder="Digite Edad">
           <table>
   <tr>
   <td>
     <label><div>Sexo</div></label><br>
     <input type="radio"id="hombre" name="sexo" value="hombre"> Hombre
   </td>
   <td>
     <label><b>Prendas de Ropa Hombre</b></label><br>
     <label><i>Camisa:</i></label><br>
   <select id="ropaH1"name="ropaH1">
     <option>Manga Larga</option>
     <option>Manga Corta</option>
     <option>Sin Mangas</option>
     <option>Otro tipo</option>
   </select>
   <br>
   <label><i>Pantalon:</i></label><br>
   <select id="ropaH2"name="ropaH2">
     <option>Tela</option>
      <option>Licra</option>
      <option>Cuero</option>
      <option>Otro tipo</option>
   </select>
   <br>
   <label><i>Zapatos:</i></label><br>
   <select id="ropaH3"name="ropaH3">
      <option>Finos</option>
      <option>Combers</option>
      <option>Chanclas</option>
      <option>Botas</option>
      <option>Otro tipo</option>
     </select>
     </td>
     <tr>
   <td>
     
   <input type="radio"id="mujer" name="sexo" value="mujer"> Mujer
    </td>
   <td>
     <b>Prendas de Ropa Mujer</b><br>
     <label><i>falda:</i></label><br>
   <select id="ropaM1"name="ropaM1">
     <option>No Tiene</option>
     <option>Larga</option>
     <option>Corta</option>
     </select>
     <br>
     <label><i>Blusa con Escote:</i></label><br>
   <select id="ropaM2"name="ropaM2">
     <option>No</option>
     <option>Si</option>
   </select> 
   <br>
   <label><i>Pantalon:</i></label><br>
   <select id="ropaM3"name="ropaM3">
     <option>Tela</option>
    <option>otro</option>
   </select>
   <br>
   <label><i>Zapatos:</i></label><br>
   <select id="ropaM4"name="ropaM4">
     <option>Tacones</option>
     <option>Otros</option>
     
   </select>
   
     </td>
     
   
     
     </table>
            
               <input type="submit" value="Enviar">
                
       </form>
    </body>
</html>