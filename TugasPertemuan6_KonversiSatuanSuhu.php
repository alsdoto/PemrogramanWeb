<!DOCTYPE html>
<html>
  <head>
    <title>Konversi Suhu Celcius</title>
  </head>
  <body>
    <h1>Konversi Satuan Suhu Celcius</h1>
    <table cellpadding="7">
        <form method="post">
            <tr>
                <td>
                    <label for="celcius">Masukkan suhu Celcius</label>
                </td>
                <td>
                    <input type="number" id="celcius" name="celcius" required placeholder="Masukan angka suhu">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Pilih konversi</label>
                </td>
                <td>
                    <select name="konversi" required>
                        <option>Pilih</option>
                        <option value="reamur">Reamur</option>
                        <option value="fahrenheit">Fahrenheit</option>
                        <option value="kelvin">Kelvin</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Konversi">
                </td>
            </tr>
        </form>
    </table>
      
      
    
    <?php
      function convertSuhu($celcius, $konversi){
        switch($konversi){
          case "reamur":
            $result = $celcius * 0.8;
            break;
          case "fahrenheit":
            $result = $celcius * 1.8 + 32;
            break;
          case "kelvin":
            $result = $celcius + 273.15;
            break;
          default:
            $result = "Pilih konversi yang valid (reamur, fahrenheit, atau kelvin)";
        }
        return $result;
      }
      
      if($_SERVER["REQUEST_METHOD"] == "POST"){
        $celcius = $_POST["celcius"];
        $konversi = $_POST["konversi"];
        $hasil = convertSuhu($celcius, $konversi);
        if($konversi == "reamur"){
            echo "Hasil Konversi ke Reamur :";
        }elseif($konversi == "fahrenheit"){
            echo "Hasil Konversi ke Fahrenheit :";
        }elseif($konversi == "kelvin"){
            echo "Hasil Konversi ke Kelvin :";
        }
        echo "<br>$celcius °C sama dengan $hasil";
        if($konversi == "reamur"){
          echo " °R";
        }elseif($konversi == "fahrenheit"){
          echo " °F";
        }elseif($konversi == "kelvin"){
          echo " K";
        }
      }
    ?>
    
  </body>
</html>
